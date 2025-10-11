<!DOCTYPE html>
<html lang="es">

<head>
  <base href="<?= base_url() ?>">
  <title><?= esc($title ?? 'Koomersys') ?> - Koomersys</title>

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

<body class="app app-404-page">
  <div class="container mb-5">
    <div class="row">
      <div class="col-12 col-md-11 col-lg-7 col-xl-6 mx-auto">
        <div class="app-branding text-center mb-5"> <a class="app-logo" href="index.html"> <img class="logo-icon me-2"
              src="<?= base_url('assets/images/logos/logo-koomersys-v2.svg'); ?>" alt="logo"> <span
              class="logo-text">Koomersys</span> </a> </div>
        <div class="app-card p-5 text-center shadow-sm">
          <h1 class="page-title mb-4">404<br><span class="font-weight-light">Pagina no encontrada</span></h1>
          <div class="mb-4"> Lo sentimos, no podemos encontrar la página que estás buscando. </div> <a
            class="btn app-btn-primary" href="<?= base_url(); ?>">Ir a la página principal</a>
        </div>
      </div>
    </div>
  </div>
  <?= $this->include('partials/footer') ?>
</body>

</html>