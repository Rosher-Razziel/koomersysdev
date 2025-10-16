/* Reescritura optimizada - JS con jQuery y async/await */
$(document).ready(function () {
  console.log('Document ready - users.js');

  // ---------- Config / selectores cacheados ----------
  const AXIOS = axios.create({ baseURL: base_url });
  const $tabla = $('#tablaUsuarios');
  const $fileInput = $('#fileInput');
  const $fileNameInput = $('#fileName');
  const $clearFileBtn = $('#clearFileBtn');
  const $loaderModalUser = $('#loaderModalUser');
  const $btnAddUser = $('#btnAddUser');
  const $estatus = $('#estatus');
  const $estatusLabel = $('#estatusLabel');
  const $frmAddUser = $('#addUserForm');
  // Expresión regular para validar la contraseña
  const regexPassword = /^(?=.*[A-Z])(?=.*[!@#$%^&*(),.?":{}|<>]).{8,}$/;

  // util: escapar texto para evitar XSS cuando armamos HTML desde datos
  const escapeHtml = (str = '') => {
    return String(str)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#39;');
  };

  // ---------- DataTable init (único lugar) ----------
  const dataTable = $tabla.DataTable({
    responsive: true,
    autoWidth: false,
    pageLength: 10,
    columnDefs: [
      { targets: 0, width: '20%' },
      { targets: 1, width: '20%' },
      { targets: 2, width: '20%', className: 'text-center' },
      { targets: 3, width: '20%', className: 'text-center' },
      { targets: 4, width: '5%', className: 'text-center' },
      { targets: 5, width: '5%', className: 'text-center' },
      { targets: 6, orderable: false, width: '10%', className: 'text-center' }
    ],
    language: { url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json' }
  });

  // ---------- Helpers UI ----------
  const showLoader = ($el) => $el && $el.removeClass && $el.removeClass('d-none');
  const hideLoader = ($el) => $el && $el.addClass && $el.addClass('d-none');

  // ---------- Cargar usuarios (async) ----------
  async function cargarUsuarios() {
    try {
      const resp = await AXIOS.get('users/listarUsuarios');
      const data = resp.data;

      if (data.status !== 'success') {
        mostrarAlerta('error', 'Error al cargar usuario: ' + data.message);
        return;
      }

      // limpiar tabla sin redibujar hasta el final
      dataTable.clear();

      for (const usuario of data.usuarios) {
        // calcular badges y escapar
        const estadoHTML = usuario.FIESTATUS == '1'
          ? '<span class="badge bg-success">Activo</span>'
          : '<span class="badge bg-danger">Inactivo</span>';

        const emailVerificadoHTML = usuario.FIEMAILVERIFICADO == '1'
          ? '<span class="badge bg-success">Verificado</span>'
          : '<span class="badge bg-danger">No Verificado</span>';

        // acciones (atributos data-id seguros)
        const idEnc = escapeHtml(usuario.ID_ENCRIPTADO);
        const acciones = `
          <div class="btn-group" role="group">
            <button class="btn btn-primary btn-sm text-white btnEditUser" data-id="${idEnc}" title="Editar Usuario"
              data-bs-toggle="modal" data-bs-target="#addUserModal" type="button">
              <!-- icono editar -->
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg>
            </button>
            <button class="btn btn-danger btn-sm text-white btnDeleteUser" data-id="${idEnc}" title="Eliminar Usuario" type="button">
              <!-- icono eliminar -->
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"> 
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" /> 
              </svg>
            </button>
          </div>
        `;

        const nombreCompleto = escapeHtml(usuario.FCNOMBREUSUARIO + ' ' + usuario.FCAPELLIDOPATERNO + ' ' + usuario.FCAPELLIDOMATERNO);
        const email = escapeHtml(usuario.FCEMAIL);
        const rol = escapeHtml(usuario.FCNOMBREROL);
        const sucursal = escapeHtml(usuario.FCNOMBRESUCURSAL);

        dataTable.row.add([nombreCompleto, email, rol, sucursal, estadoHTML, emailVerificadoHTML, acciones]);
      }

      // dibujar sin perder paginación actual
      dataTable.draw(false);

      // mostrarAlerta(data.status, data.message);
    } catch (err) {
      console.error('cargarUsuarios error', err);
      mostrarAlerta('error', 'Error en la peticion: ' + err.message);
    }
  }
  // Carga inicial
  cargarUsuarios();

  // ---------- Evento: botón abrir modal y limpiar formulario (pantallas pequeñas) ----------
  $btnAddUser.on('click', () => {
    $('#addUserModalLabel').text('Agregar Usuario');
    $('#addUserForm')[0].reset();
    $('#usuarioId').val('');
  });

  // ---------- Evento dinámico: Editar Usuario (delegación) ----------
  $(document).on('click', '.btnEditUser', async function (e) {
    e.preventDefault();
    const userId = $(this).data('id');
    if (!userId) return Toast.fire({ icon: 'warning', title: 'ID de usuario inválido' });

    $('#addUserModalLabel').text('Editar Usuario');
    $('#password').prop('required', false);
    $('#confirmPassword').prop('required', false);

    showLoader($loaderModalUser);

    try {
      const resp = await AXIOS.get(`users/edit/${userId}`);
      const usuario = resp.data.usuario;

      if (!usuario) throw new Error('Usuario no encontrado');

      if (resp.data.status === 'success') {
        $('#usuarioId').val(usuario.FIUSUARIOIDENCRYPTED);

        // Llenar el modal con datos (usar .val en selects, .prop para checkbox)
        $('#nombreUsuario').val(usuario.FCNOMBREUSUARIO || '');
        $('#apellidoPaterno').val(usuario.FCAPELLIDOPATERNO || '');
        $('#apellidoMaterno').val(usuario.FCAPELLIDOMATERNO || '');
        $('#email').val(usuario.FCEMAIL || '');

        // Si los selects están cargados por plugin (select2), se recomienda:
        $('#rol').val(usuario.FIROLID || '').trigger('change');
        $('#sucursal').val(usuario.FISUCURSALID || '').trigger('change');

        // Checkbox estado: usar prop (no trigger salvo que uses plugin que lo necesite)
        const activo = usuario.FIESTATUS == '1';
        $estatus.prop('checked', activo);
        $estatusLabel.text(activo ? 'Usuario Activo' : 'Usuario Inactivo');
      }

      mostrarAlerta(resp.data.status, resp.data.message);

    } catch (err) {
      console.error('Error cargar usuario', err);
      mostrarAlerta('error', 'Error al cargar usuario ' + err);
    } finally {
      hideLoader($loaderModalUser);
    }
  });

  // ---------- Evento dinámico: Eliminar Usuario (delegación, async) ----------
  $(document).on('click', '.btnDeleteUser', function (e) {
    e.preventDefault();
    const userId = $(this).data('id');
    if (!userId) return mostrarAlerta('warning', 'ID invalido');

    Swal.fire({
      title: '¿Estás seguro?',
      text: "Esta acción no se puede revertir",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, eliminar',
      cancelButtonText: 'Cancelar'
    }).then(async (result) => {
      if (!result.isConfirmed) return;
      try {
        const resp = await AXIOS.delete(`users/eliminar/${userId}`);
        const data = resp.data;

        // console.log('ID: ', data.userIdEncrypted);

        if (data.status === 'success') {
          // Eliminar la fila correspondiente del DataTable sin recargar
          const $tr = $(this).closest('tr');
          // Si DataTables está en modo responsive puede haber filas "child", buscamos la fila real
          const row = dataTable.row($tr);
          if (row && row.node()) {
            row.remove().draw(false); // draw(false) mantiene la página actual
          } else {
            // fallback: buscar la fila padre (por si el botón está dentro de un detalle)
            const $parentTr = $tr.prev('tr');
            if ($parentTr.length) dataTable.row($parentTr).remove().draw(false);
          }
          mostrarAlerta(data.status, data.message);
        } else {
          mostrarAlerta(data.status, data.message);
        }
      } catch (err) {
        console.error('Eliminar error', err);
        // Toast.fire({ icon: 'error', title: 'Error en la petición: ' + (err.message || '') });
        mostrarAlerta('error', 'Error en la peticion: ' + err.message);
      }
    });
  });

  // ---------- Evento: botón Agregar Usuario (enviar formulario) ----------
  $frmAddUser.on('submit', async function (e) {
    e.preventDefault();

    let ruta = '';
    // Desactivar botón mientras se envía
    $('#btnAgregarUsuario').prop('disabled', true).text('Guardando...');

    let clave = $('#password').val();
    let confirmClave = $('#confirmPassword').val();

    if (!regexPassword.test(clave)) {
      mostrarAlerta('error', 'Formato de contraseña incorrecto');
      $('#btnAgregarUsuario').prop('disabled', false).text('Guardar cambios');
      return;
    }

    if (clave !== confirmClave) {
      mostrarAlerta('error', 'Las contraseñas no coinciden');
      $('#btnAgregarUsuario').prop('disabled', false).text('Guardar cambios');
      return;
    }

    try {
      // Crear objeto FormData (envía todo automáticamente)
      const formData = new FormData(this);
      // Si tu checkbox no está en el formData, agrégalo manualmente
      formData.set('estatus', $('#estatus').is(':checked') ? '1' : '0');

      if (formData.get('usuarioId') === '') {
        ruta = 'users/create';
      } else {
        ruta = 'users/update';
      }

      // Enviar con Axios
      const resp = await AXIOS.post(ruta, formData, {
        headers: { 'Content-Type': 'multipart/form-data' }
      });
      const data = resp.data;

      // console.log(data);

      if (data.status === 'success') {
        cargarUsuarios();
        mostrarAlerta(data.status, data.message);
      } else {
        mostrarAlerta(data.status, data.message + ' ' + data.errors);
      }
    } catch (err) {
      console.error('Error en envío', err);
      mostrarAlerta('error', 'Error en la petición: ' + (err.message || ''));
    } finally {
      $('#addUserModal').modal('hide');
      $('#btnAgregarUsuario').prop('disabled', false).text('Guardar cambios');
    }
  });

  // Conprobar contraseña
  $('#password').on('input', function () {
    const value = $('#password').val().trim();
    if (!regexPassword.test(value)) {
      $('#password').addClass('border-danger');
      $('#password').removeClass('border-success');
      // $('#passwordError').text('La contraseña debe tener mínimo 8 caracteres, una mayúscula y un símbolo especial.');
    } else {
      $('#password').removeClass('border-danger');
      $('#password').addClass('border-success');
      // $('#passwordError').text('');
    }
  });
  // Validar verificacion de contraseña
  $('#confirmPassword').on('input', function () {
    const value = $('#confirmPassword').val().trim();

    if (value !== $('#password').val().trim()) {
      $('#confirmPassword').removeClass('border-success');
      $('#confirmPassword').addClass('border-danger');
    } else {
      $('#confirmPassword').removeClass('border-danger');
      $('#confirmPassword').addClass('border-success');
    }
  });

  // ---------- Cambiar etiqueta Estado (checkbox) ----------
  $estatus.on('change', function () {
    const activo = $(this).prop('checked');
    $estatusLabel.text(activo ? 'Usuario Activo' : 'Usuario Inactivo');
  });

  // ---------- File input: mostrar nombre + limpiar ----------
  $fileInput.on('change', function () {
    const file = this.files && this.files[0];
    if (file) {
      $fileNameInput.val(file.name).attr('title', file.name);
      $clearFileBtn.removeClass('d-none');
    } else {
      $fileNameInput.val('Ningún archivo seleccionado').attr('title', '');
      $clearFileBtn.addClass('d-none');
    }
  });

  $clearFileBtn.on('click', function (e) {
    e.preventDefault();
    $fileInput.val(null);
    $fileNameInput.val('Ningún archivo seleccionado').attr('title', '');
    $(this).addClass('d-none');
  });

  // ---------- Mostrar Alerta ----------
  function mostrarAlerta(estatus, message) {
    Toast.fire({ icon: estatus, title: message });
  }

});
