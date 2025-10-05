// console.log('LLEGUE A USERS');

$(document).ready(function () {
  const tabla = $('#usuariosTable').DataTable({
    responsive: true,
    autoWidth: false,
    columnDefs: [
      { targets: [0, 3, 4, 5, 6], className: 'text-center' }
    ],
    pageLength: 10,
    lengthMenu: [10, 25, 50, 100],
    lengthChange: true,
    ordering: true,
    info: true,
    responsive: true,
    language: {
      url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
    }
  });

  const loader = $("#loader");

  $(document).on("click", ".btn-detalles", async function () {
    const registroId = $(this).data("id"); // Obtenemos el ID del atributo

    try {
      const response = await axios.get(`${base_url}users/find/${registroId}`);

      if (response.data.status === 'success') {
        const usuario = response.data.data;

        // Estatus
        const estatusHtml = usuario.FIESTATUS == 1
          ? '<span class="badge bg-success"> Activo </span>'
          : '<span class="badge bg-warning"> Inactivo </span>';

        $("#estatus").html(estatusHtml);  

        // Datos del usuario
        $("#nombre").text(usuario.FCNOMBREUSUARIO ? usuario.FCNOMBREUSUARIO : 'N/A');
        $("#appat").text(usuario.FCAPELLIDOPATERNO ? usuario.FCAPELLIDOPATERNO : 'N/A');
        $("#apmat").text(usuario.FCAPELLIDOMATERNO ? usuario.FCAPELLIDOMATERNO : 'N/A');
        $("#email").text(usuario.FCEMAIL ? usuario.FCEMAIL : 'N/A');
        $("#fechaalta").text(usuario.FDFECHAALTA ? usuario.FDFECHAALTA : 'N/A');
        $("#fechaactualizacion").text(usuario.FDFECHAACTUALIZACION ? usuario.FDFECHAACTUALIZACION : 'N/A');

        // Enlace de edición
        $("#btn-editar").attr("href", `${base_url}users/edit/${response.data.userIdEncrypted}`);
      } else {
        alert(response.data.message);
      }
    } catch (error) {
      console.error("❌ Error en la petición:", error);
      alert("No se pudo obtener la información del usuario.");
    }
  });
  
});
