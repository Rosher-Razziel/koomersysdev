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
              <th class="text-center">EMAIL VERIFICADO</th>
              <th class="text-center">ACCIONES</th>
            </tr>
          </thead>
          <tbody id="tbodyUsuarios">
            <tr>
              <td class="text-center">Juan Pérez Beltran</td>
              <td class="text-center">juan.perez@example.com</td>
              <td class="text-center">Administrador</td>
              <td class="text-center">Sucursal 1</td>
              <td class="text-center"><span class="badge bg-success">Activo</span></td>
              <td class="text-center"><span class="badge bg-success">Verificado</span></td>
              <td class="text-center">
                <button class="btn btn-primary btn-sm text-white" id="btnEditUser" title="Editar Usuario"
                  data-bs-toggle="modal" data-bs-target="#addUserModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                  </svg>
                </button>
                <button class="btn btn-danger btn-sm text-white" id="btnDeleteUser" title="Eliminar Usuario">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash3" viewBox="0 0 16 16">
                    <path
                      d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                  </svg>
                </button>
              </td>
            </tr>
            <tr>
              <td class="text-center">Rogelio Espinosa Reyes</td>
              <td class="text-center">maria.garcia@example.com</td>
              <td class="text-center">Usuario</td>
              <td class="text-center">Sucursal 2</td>
              <td class="text-center"><span class="badge bg-danger">Inactivo</span></td>
              <td class="text-center"><span class="badge bg-warning">Por Verificar</span></td>
              <td class="text-center">
                <button class="btn btn-primary btn-sm text-white" id="btnEditUser" title="Editar Usuario"
                  data-bs-toggle="modal" data-bs-target="#addUserModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                  </svg>
                </button>
                <button class="btn btn-danger btn-sm text-white" id="btnDeleteUser" title="Eliminar Usuario">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash3" viewBox="0 0 16 16">
                    <path
                      d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                  </svg>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Formulario -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h1 class="modal-title fs-5 text-white" id="addUserModalLabel">Agregar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="settings-form w-100" id="frmAddUser">
          <div class="row g-2">
            <div class="col-12 col-md-4">
              <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
              <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required
                placeholder="Ingrese nombre de usuario">
            </div>
            <div class="col-12 col-md-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="Ingrese email">
            </div>
            <div class="col-12 col-md-4">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required
                placeholder="Ingrese contraseña">
            </div>
            <div class="col-12 col-md-4">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                placeholder="Confirme contraseña">
            </div>
            <div class="col-12 col-md-4">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                placeholder="Confirme contraseña">
            </div>
            <div class="col-12 col-md-4">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                placeholder="Confirme contraseña">
            </div>
            <div class="col-12 col-md-4">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                placeholder="Confirme contraseña">
            </div>
            <div class="col-12 col-md-4">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                placeholder="Confirme contraseña">
            </div>
            <div class="col-12 col-md-4">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                placeholder="Confirme contraseña">
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