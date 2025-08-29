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
            <form action="<?= base_url('usuarios/store') ?>" method="post">
              <div class="row g-3">

                <!-- Nombre de Usuario -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FCNOMBREUSUARIO" class="form-label">Nombre de Usuario</label>
                  <input type="text" class="form-control" id="FCNOMBREUSUARIO" name="FCNOMBREUSUARIO" required
                    placeholder="Nombre de Usuario">
                </div>

                <!-- Apellido Paterno -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FCAPELLIDOPATERNO" class="form-label">Apellido Paterno</label>
                  <input type="text" class="form-control" id="FCAPELLIDOPATERNO" name="FCAPELLIDOPATERNO" required
                    placeholder="Apellido Paterno">
                </div>

                <!-- Apellido Materno -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FCAPELLIDOMATERNO" class="form-label">Apellido Materno</label>
                  <input type="text" class="form-control" id="FCAPELLIDOMATERNO" name="FCAPELLIDOMATERNO"
                    placeholder="Apellido Materno">
                </div>

                <!-- Email -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FCEMAIL" class="form-label">Correo Electrónico</label>
                  <input type="email" class="form-control" id="FCEMAIL" name="FCEMAIL" required
                    placeholder="Correo Electronico">
                </div>

                <!-- Clave -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FCCLAVE" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="FCCLAVE" name="FCCLAVE" required
                    placeholder="Contraseña">
                </div>

                <!-- Confirmar Clave -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FCCONFIRMARCLAVE" class="form-label">Confirmar Contraseña</label>
                  <input type="password" class="form-control" id="FCCONFIRMARCLAVE" name="FCCONFIRMARCLAVE" required
                    placeholder="Confirmar Contraseña">
                </div>

                <!-- Rol -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FIROLID" class="form-label">Rol</label>
                  <select class="form-select" id="FIROLID" name="FIROLID" required>
                    <option value="" selected disabled>Seleccione un rol</option>
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                    <option value="3">Supervisor</option>
                  </select>
                </div>

                <!-- Sucursal -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FISUCURSALID" class="form-label">Sucursal</label>
                  <select class="form-select" id="FISUCURSALID" name="FISUCURSALID" required>
                    <option value="" selected disabled>Seleccione una sucursal</option>
                    <option value="1">Sucursal Centro</option>
                    <option value="2">Sucursal Norte</option>
                    <option value="3">Sucursal Sur</option>
                  </select>
                </div>

                <!-- Estatus -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                  <label for="FIESTATUS" class="form-label">Estatus</label>
                  <select class="form-select" id="FIESTATUS" name="FIESTATUS" required>
                    <option value="1" selected>Activo</option>
                    <option value="2">Inactivo</option>
                    <option value="0">Eliminado</option>
                  </select>
                </div>

                <!-- Botón Guardar -->
                <div class="col-12 text-center mt-3">
                  <button type="submit" class="btn btn-success px-4 text-white">
                    <i class="bi bi-save"></i> Guardar Usuario
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    <?= view('layout/footer'); ?>
  </div>
  <?= view('layout/scripts'); ?>
  <script src="<?= base_url('assets/js/scripts/users/crear.js'); ?>"></script>
</body>

</html>