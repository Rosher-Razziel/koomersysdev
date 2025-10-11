$(document).ready(() => {
  // TABLA USUARIOS
  const $tabla = $('#tablaUsuarios');

  // CARGA MASIVA DE USUARIO MODAL
  const $fileInput = $('#fileInput');
  const $fileNameInput = $('#fileName');
  const $clearFileBtn = $('#clearFileBtn');

  // CONFIGURACIÓN DE DATATABLES
  const dataTable = $tabla.DataTable({
    responsive: true,
    autoWidth: false,
    pageLength: 10,
    columnDefs: [
      { targets: 0, width: '20%' },
      { targets: 1, width: '20%' },
      { targets: 2, width: '10%', className: 'text-center' },
      { targets: 3, width: '10%', className: 'text-center' },
      { targets: 4, width: '15%', className: 'text-center' },
      { targets: 5, width: '15%', className: 'text-center' },
      { targets: 6, orderable: false, width: '10%', className: 'text-center' }
    ],
    language: {
      url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
    }
  });

  // Botón editar usuario en pantallas pequeñas siga funcionando
  $(document).on('click', '.btn-edit-user', function () {
    const modal = new bootstrap.Modal(document.getElementById('addUserModal'));
    modal.show();
  });

  // Mostrar nombre del archivo y botón eliminar carga masiva usuarios
  $fileInput.on('change', function () {
    const file = this.files[0];
    if (file) {
      $fileNameInput.val(file.name);
      $fileNameInput.attr('title', file.name);
      $clearFileBtn.removeClass('d-none');
    } else {
      $fileNameInput.val('Ningún archivo seleccionado');
      $clearFileBtn.addClass('d-none');
    }
  });

  // Limpiar archivo seleccionado
  $clearFileBtn.on('click', function () {
    $fileInput.val('');
    $fileNameInput.val('Ningún archivo seleccionado');
    $clearFileBtn.addClass('d-none');
  });

});