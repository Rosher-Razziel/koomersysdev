<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container-xl">
  <!-- Botones Usuarios -->
  <div class="row g-3 mb-3 align-items-center justify-content-between">
    <!-- Título Usuarios -->
    <div class="col-auto">
      <h1 class="app-page-title mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor"
          class="bi bi-shop-window" viewBox="0 0 16 16">
          <path
            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
        </svg>
        Lista de usuarios
      </h1>
    </div>
    <!-- Botones Acciones -->
    <div class="col-auto">
      <div class="page-utilities">
        <div class="row g-2 justify-content-center justify-content-md-end align-items-center">
          <div class="col-auto">
            <button class="btn app-btn-secondary shadow" id="btnAddUser" title="Agregar Usuario" data-bs-toggle="modal"
              data-bs-target="#addUserModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
              </svg>
              Agregar Usuario
            </button>
          </div>
          <div class="col-auto">
            <button class="btn app-btn-secondary shadow" id="btnDownload" title="Descargar">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                <path fill-rule="evenodd"
                  d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
              </svg>
              Descargar Usuarios
            </button>
          </div>
          <div class="col-auto">
            <button class="btn app-btn-secondary shadow" href="<?= base_url('users/create') ?>" id="btnUpload"
              title="Cargar Masiva" data-bs-toggle="modal" data-bs-target="#uploadUsersModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload"
                viewBox="0 0 16 16">
                <path
                  d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                <path
                  d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
              </svg>
              Cargar Masiva
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tabla de Usuarios -->
  <div class="row g-3">
    <div class="col-lg-12">
      <div class="app-card shadow-sm p-2 table-responsive">
        <table class="table table-bordered table-hover align-middle table-sm" id="tablaUsuarios">
          <thead class="table-dark">
            <tr>
              <th class="text-center">NOMBRE COMPLETO</th>
              <th class="text-center">EMAIL</th>
              <th class="text-center">ROL</th>
              <th class="text-center">SUCURSAL</th>
              <th class="text-center">ESTATUS</th>
              <th class="text-center">VERIFICADO</th>
              <th class="text-center">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Formulario -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content position-relative">
      <!-- Loader -->
      <div id="loaderModalUser"
        class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center bg-white bg-opacity-75 d-none"
        style="z-index: 1055;">
        <div class="spinner-border text-primary" role="status" style="width: 2.5rem; height: 2.5rem;">
          <span class="visually-hidden">Cargando...</span>
        </div>
      </div>

      <div class="modal-header bg-secondary">
        <h1 class="modal-title fs-5 text-white" id="addUserModalLabel">Agregar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <input type="hidden" id="userIdEncrypted" name="userIdEncrypted">
        <form class="settings-form w-100" id="addUserForm">
          <input type="hidden" id="usuarioId" name="usuarioId">
          <div class="row g-2">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="nombreUsuario" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required
                placeholder="Ingrese nombre de usuario">
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required
                placeholder="Ingrese apellido paterno">
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required
                placeholder="Ingrese apellido materno">
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="email" class="form-label">Correo</label>
              <input type="email" class="form-control" id="email" name="email" required
                placeholder="Ingrese correo electrónico">
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="password" class="form-label">Contraseña</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••">
                <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="left"
                  title="La contraseña debe tener al menos 8 caracteres, una letra mayúscula y un símbolo especial.">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path
                      d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                  </svg>
                </span>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                placeholder="••••••••">
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="rol" class="form-label">Rol</label>
              <select class="form-select" id="rol" name="rol" required>
                <option value="" disabled selected>Seleccione un rol</option>
                <?php foreach ($roles as $rol): ?>
                <option value="<?= $rol['FIROLID'] ?>"><?= $rol['FCNOMBREROL'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="confirmPassword" class="form-label">Sucursal</label>
              <select class="form-select" id="sucursal" name="sucursal" required>
                <option value="" disabled selected>Seleccione una sucursal</option>
                <?php foreach ($sucursales as $sucursal): ?>
                <option value="<?= $sucursal['FISUCURSALID'] ?>"><?= $sucursal['FCNOMBRESUCURSAL'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
              <label for="estatus" class="form-label d-block">Estatus</label>
              <div class="form-check form-switch align-items-center d-flex">
                <input class="form-check-input" type="checkbox" id="estatus" name="estatus" role="switch"
                  style="height: 30px; width: 60px;">
                <label class="form-check-label ms-2" for="estatus" id="estatusLabel">Usuario Activo</label>
              </div>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary text-white" id="btnAgregarUsuario">Guardar cambios</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Carga Masiva -->
<div class="modal fade" id="uploadUsersModal" tabindex="-1" aria-labelledby="uploadUsersModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h1 class="modal-title fs-5 text-white" id="uploadUsersModalLabel">Carga Masiva de Usuarios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
          Selecciona un archivo en formato <strong>.xlsx</strong> o <strong>.csv</strong> con los datos de los
          usuarios o
          <a href="<?= base_url('assets/plantillas/carga_masiva_usuario.xlsx') ?>" class="alert-link">Descarga
            plantilla</a>.
        </div>
        <form class="settings-form w-100" id="frmAddUser">
          <div class="row g-2">
            <div class="col-12 col-md-4">
              <label for="role" class="form-label">Selecciona Marca</label>
              <select class="form-select" id="role" name="role" required>
                <option value="" disabled selected>Seleccione una marca</option>
                <option value="1">Marca 1</option>
                <option value="2">Marca 2</option>
                <option value="3">Marca 3</option>
              </select>
            </div>
            <div class="col-12 col-md-8">
              <label for="file" class="form-label">Subir Archivo</label>
              <div class="input-group">
                <!-- Botón "Buscar" -->
                <label class="input-group-text btn btn-primary text-white" for="fileInput">
                  <i class="bi bi-search"></i> Buscar
                </label>
                <!-- Input de archivo (oculto para que no se vea feo) -->
                <input class="form-control d-none" type="file" id="fileInput" name="fileInput" accept=".xlsx,.xls">
                <!-- Input de solo lectura para mostrar nombre -->
                <input type="text" class="form-control" id="fileName" placeholder="Ningún archivo seleccionado" readonly
                  disabled>
                <!-- Botón eliminar -->
                <button class="btn btn-outline-danger text-white bg-danger d-none" type="button" id="clearFileBtn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash3" viewBox="0 0 16 16">
                    <path
                      d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary text-white">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('assets/js/scripts/users/users.js') ?>"></script>
<?= $this->endSection() ?>