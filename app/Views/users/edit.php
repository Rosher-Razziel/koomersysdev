<?= view('layout/head'); ?>

<body class="app">
  <header class="app-header fixed-top">
    <div class="app-header-inner">
      <div class="container-fluid py-2">
        <?= view('layout/nav-top'); ?>
      </div>
      <div id="app-sidepanel" class="app-sidepanel">
        <?= view('layout/nav'); ?>
      </div>
    </div>
  </header>

  <div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
          <div class="col-auto">
            <h1 class="app-page-title mb-0">Editar Usuario</h1>
          </div>
          <div class="col-auto">
            <div class="page-utilities">
              <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                  <a class="btn app-btn-secondary" href="<?= base_url('users'); ?>">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 640 640" class="bi bi-download me-1"
                      fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4 mb-4">
          <div class="container mt-4">
            <?= view('componentes/formulario_usuarios'); ?>
          </div>
        </div>

      </div>
    </div>
    <?= view('layout/footer'); ?>
  </div>
  <?= view('layout/scripts'); ?>
  <script src="<?= base_url('assets/js/scripts/users/users.js'); ?>"></script>
</body>

</html>