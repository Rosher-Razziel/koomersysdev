// console.log('LLEGUE A USERS');

$(document).ready(function () {
  $('#usuariosTable').DataTable({
    "responsive": true
  });
});

const loader = document.getElementById("loader")

document.querySelectorAll(".btn-detalles").forEach(btn => {
  btn.addEventListener("click", async function () {
    const registroId = this.getAttribute("data-id"); // Obtenemos el ID del atributo

    // Petición con Axios
    await axios.get(`${base_url}users/find/${registroId}`)
      .then(response => {
        if (response.data.status === 'success') {
          const usuario = response.data.data;
          // console.log("Usuario:", usuario);
          // 👉 Aquí puedes llenar tu offcanvas o modal
          document.getElementById("nombre").innerText = usuario['FCNOMBREUSUARIO'];
          document.getElementById("appat").innerText = usuario['FCAPELLIDOPATERNO'];
          document.getElementById("apmat").innerText = usuario['FCAPELLIDOMATERNO'];
          document.getElementById("email").innerText = usuario['FCEMAIL'];
          document.getElementById("estatus").innerText = usuario['FIESTATUS'];
          document.getElementById("fechaalta").innerText = usuario['FDFECHAALTA'];
          document.getElementById("fechaactualizacion").innerText = usuario['FDFECHAACTUALIZACION'];
        } else {
          alert(response.data.message);
        }
      })
      .catch(error => {
        console.error("❌ Error en la petición:", error);
        alert("No se pudo obtener la información del usuario.");
      });
  });
});
