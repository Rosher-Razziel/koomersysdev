<!DOCTYPE html>
<html lang="es">

<head>
  <title>Login - Koomersys</title>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
  <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
  <link rel="shortcut icon" href="<?= base_url('assets/images/logos/logo-koomersys-v3.svg'); ?>">
  <!-- App CSS -->
  <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/css/portal.css'); ?>">
</head>

<body class="app app-login p-0">
  <div class="row g-0 app-auth-wrapper">
    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
      <div class="d-flex flex-column align-content-end">
        <div class="app-auth-body mx-auto">
          <div class="app-auth-branding mb-4"><a class="app-logo" href="<?= base_url(''); ?>"><img class="logo-icon me-2"
                src="<?= base_url('assets/images/logos/logo-koomersys-v2.svg'); ?>" alt="logo"></a></div>
          <h2 class="auth-heading text-center mb-5" id="title-Form">Iniciar Sesion</h2>
          <div class="auth-form-container text-start">
            <form class="auth-form login-form" id="frm-login">
              <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" id="csrf-token">
              <div class="email mb-3">
                <!-- <label class="sr-only" for="signin-email">Correo</label> -->
                <input id="signin-email" name="signin-email" type="email" class="form-control signin-email"
                  placeholder="Correo" required="required">
              </div>
              <div class="password mb-3">
                <!-- <label class="sr-only" for="signin-password">Contraseña</label> -->
                <input id="signin-password" name="signin-password" type="password" class="form-control signin-password"
                  placeholder="Contraseña" required="required">
                <div class="extra mt-3 row justify-content-between">
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="RememberPassword" name="RememberPassword" >
                      <label class="form-check-label" for="RememberPassword">
                        Recuerdame
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="forgot-password text-end">
                      <a href="reset-password.html">Recuperar contraseña?</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Iniciar sesion</button>
              </div>
            </form>
            <div class="auth-option text-center pt-5">No tengo cuenta? Registrate <a class="text-link"
                href="signup.html">aqui</a>.</div>
          </div>
          <div id="contenedor-alertas" class="pt-2"></div>
        </div>
        <footer class="app-auth-footer">
          <div class="container text-center py-3">
            <small class="copyright">Diseñado con <span class="sr-only">amor</span><i class="fas fa-heart"
                style="color: #fb866a;"></i> por <a class="app-link" href="http://themes.3rdwavemedia.com"
                target="_blank">Rogelio Espinosa</a> desarrollador.</small>
          </div>
        </footer>
      </div>
    </div>
    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
      <div class="auth-background-holder">
      </div>
      <div class="auth-background-mask"></div>
      <!-- Alerta Notificaion -->
      <div class="auth-background-overlay p-3 p-lg-5">
        <div class="d-flex flex-column align-content-end h-100">
          <div class="h-100"></div>
          <div class="overlay-content p-3 p-lg-4 rounded">
            <h5 class="mb-3 overlay-title">Actualizacion de sistema v1.0.0</h5>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptates voluptatem iure, exercitationem dolorum doloribus quam magnam tenetur sint animi, corporis numquam fuga modi eveniet, nobis atque sequi voluptate at! 
              <a href="<?= base_url('assets/docs/actualizacion-sistema-v1.0.0.pdf'); ?>">here</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script> let base_url  = "<?= base_url(''); ?>"; </script>
  <script src="<?= base_url('assets/js/scripts/auth/auth.js') ?>"></script>
</body>

</html>