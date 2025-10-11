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
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- DataTables con estilos de Bootstrap -->
  <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />

  <script>
  let base_url = "<?= base_url() ?>";
  </script>

</head>

<body class="app">
  <?= $this->include('partials/header') ?>

  <div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      <?= $this->renderSection('content') ?>
    </div>

    <div id="loader" class="loader-container">
      <span class="spinner-border text-primary" role="status"></span>
      <span>Cargando...</span>
    </div>

    <?= $this->include('partials/footer') ?>
  </div>

  <!-- jQuery (requerido por DataTables) -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Javascript -->
  <script src="<?= base_url('assets/plugins/popper.min.js'); ?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <!-- Page Specific JS -->
  <script src="<?= base_url('assets/js/app.js'); ?>"></script>
  <!-- Select2 -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <?= $this->renderSection('scripts') ?>
</body>

</html>