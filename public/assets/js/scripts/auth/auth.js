// console.log('LLEGUE A AUTH')

$(document).ready(function () {
  $('#frm-login').on('submit', async function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    await axios.post(base_url + 'auth/login', formData, {
      headers: {
        'X-CSRF-TOKEN': $('#csrf-token').val()
      }
    })
      .then(res => {
        if (res.data.status === 'success') {
          window.location.href = base_url + res.data.url;
        } else {
          const alerta = `
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              ${res.data.message}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>`;
          $('#contenedor-alertas').html(alerta);
        }
      })
      .catch(err => {
        const alerta = `
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              ${res.data.message}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>`;
          $('#contenedor-alertas').html(alerta);
      });
  });
});

