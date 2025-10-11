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
            <h1 class="app-page-title mb-0">Carga Masiva Usuarios</h1>
          </div>
          <div class="col-auto">
            <div class="page-utilities">
              <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                  <!-- <a class="btn app-btn-secondary" href="#">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                      <path fill-rule="evenodd"
                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg>
                    Descargar Plantilla
                  </a> -->
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
            <div class="card shadow-sm p-4">
              <!-- <h5 class="card-title mb-3">
                <i class="bi bi-upload"></i> Carga Masiva de Usuarios
              </h5> -->

              <!-- Alerta informativa -->
              <div class="alert alert-info" role="alert">
                Selecciona un archivo en formato <strong>.xlsx</strong> o <strong>.csv</strong> con los datos de los
                usuarios.
                <a href="<?= base_url('assets/plantillas/carga_masiva_usuario.xlsx') ?>" class="alert-link">Descargar plantilla</a>.
              </div>

              <form action="<?= base_url('usuarios/cargar_excel') ?>" method="post" enctype="multipart/form-data">
                <div class="row g-3">

                  <!-- Selección de sucursal -->
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <label for="sucursal" class="form-label">Sucursal</label>
                    <select id="sucursal" name="sucursal" class="form-select" required>
                      <option value="">Seleccione una sucursal...</option>
                      <?php if (!empty($sucursales)): ?>
                        <?php foreach ($sucursales as $sucursal): ?>
                          <option value="<?= $sucursal['FISUCURSALID']; ?>"><?= $sucursal['FCNOMBRESUCURSAL']; ?></option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </select>
                  </div>

                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <label for="fileInput" class="form-label">Cargar archivo Excel</label>
                    <div class="input-group">
                      <!-- Botón "Buscar" -->
                      <label class="input-group-text btn btn-primary text-white" for="fileInput">
                        <i class="bi bi-search"></i> Buscar
                      </label>
                      <!-- Input de archivo (oculto para que no se vea feo) -->
                      <input class="form-control d-none" type="file" id="fileInput" name="fileInput" accept=".xlsx,.xls">
                      <!-- Input de solo lectura para mostrar nombre -->
                      <input type="text" class="form-control" id="fileName" placeholder="Ningún archivo seleccionado" readonly disabled>
                      <!-- Botón eliminar -->
                      <button class="btn btn-outline-danger text-white bg-danger d-none" type="button" id="clearFileBtn">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                    </div>
                  </div>

                  <!-- Comentario -->
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <label for="comentario" class="form-label">Comentario</label>
                    <input type="text" class="form-control" id="comentario" name="comentario"
                      placeholder="Agrega un comentario">
                  </div>

                  <!-- Estatus de los usuarios -->
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <label for="estatusUsuarios" class="form-label">Estatus de los usuarios</label>
                    <select id="estatusUsuarios" name="estatusUsuarios" class="form-select" required>
                      <option value="">Seleccione un estatus...</option>
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                      <option value="0">Eliminado</option>
                    </select>
                  </div>

                  <!-- Botón de envío -->
                  <div class="col-12 text-center mt-3">
                    <button type="submit" class="btn btn-success px-4 text-white">
                      <i class="bi bi-cloud-arrow-up"></i> Subir Archivo
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?= view('layout/footer'); ?>
  </div>
  <?= view('layout/scripts'); ?>
  <script src="<?= base_url('assets/js/scripts/users/masiveload.js'); ?>"></script>
</body>

</html>