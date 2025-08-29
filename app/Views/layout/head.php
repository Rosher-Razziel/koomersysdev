<!DOCTYPE html>
<html lang="es">

<head>
  <base href="<?= base_url() ?>">
  <title><?= ($title !== null && $title !== '') ? $title : 'Pagina'; ?> - Koomersys</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
  <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
  <link rel="shortcut icon" href="<?= base_url('assets/images/logos/logo-koomersys-v3.svg'); ?>">

  <!-- FontAwesome JS-->
  <script src="https://kit.fontawesome.com/ae5f698689.js" crossorigin="anonymous"></script>
  <!-- App CSS -->
  <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- DataTables con estilos de Bootstrap -->
  <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

  <script> let base_url = "<?= base_url() ?>"; </script>

</head>