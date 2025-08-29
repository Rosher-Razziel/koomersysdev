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
            <h1 class="app-page-title mb-0">Usuarios</h1>
          </div>
          <div class="col-auto">
            <div class="page-utilities">
              <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                  <a class="btn app-btn-secondary" href="#">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                      <path fill-rule="evenodd"
                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg>
                    Descargar CSV
                  </a>
                  <a class="btn app-btn-secondary" href="<?= base_url('users/create/massiveload') ?>">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 640 640" class="bi bi-download me-1"
                      fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M176 544C96.5 544 32 479.5 32 400C32 336.6 73 282.8 129.9 263.5C128.6 255.8 128 248 128 240C128 160.5 192.5 96 272 96C327.4 96 375.5 127.3 399.6 173.1C413.8 164.8 430.4 160 448 160C501 160 544 203 544 256C544 271.7 540.2 286.6 533.5 299.7C577.5 320 608 364.4 608 416C608 486.7 550.7 544 480 544L176 544zM337 255C327.6 245.6 312.4 245.6 303.1 255L231.1 327C221.7 336.4 221.7 351.6 231.1 360.9C240.5 370.2 255.7 370.3 265 360.9L296 329.9L296 432C296 445.3 306.7 456 320 456C333.3 456 344 445.3 344 432L344 329.9L375 360.9C384.4 370.3 399.6 370.3 408.9 360.9C418.2 351.5 418.3 336.3 408.9 327L336.9 255z" />
                    </svg>
                    Carga Masiva
                  </a>
                  <a class="btn app-btn-secondary" href="<?= base_url('users/create'); ?>">
                    Agregar
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4 mb-4">
          <div class="container mt-4">
            <table id="usuariosTable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="text-center">Marca</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Correo</th>
                  <th class="text-center">Rol</th>
                  <th class="text-center">Sucursal</th>
                  <th class="text-center">Estatus</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($usuarios)): ?>
                  <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                      <td class="cell"><?= $usuario['FCNOMBRE']; ?></td>
                      <td class="cell">
                        <span class="truncate">
                          <?= $usuario['FCNOMBREUSUARIO'] . ' ' . $usuario['FCAPELLIDOPATERNO'] . ' ' . $usuario['FCAPELLIDOMATERNO']; ?>
                        </span>
                      </td>
                      <td class="cell"><?= $usuario['FCEMAIL']; ?></td>
                      <td class="cell"><?= $usuario['FCNOMBREROL']; ?></td>
                      <td class="cell"><?= $usuario['FCNOMBRESUCURSAL']; ?></td>
                      <td class="cell text-center">
                        <span
                          class="badge <?php echo $usuario['FIESTATUS'] == 0 ? 'bg-danger' : ($usuario['FIESTATUS'] == 1 ? 'bg-success' : 'bg-warning'); ?>">
                          <?php echo $usuario['FIESTATUS'] == 0 ? 'Eliminado' : ($usuario['FIESTATUS'] == 1 ? 'Activo' : 'Inactivo'); ?>
                        </span>
                      </td>
                      <td class="cell text-center">
                        <?php if ($usuario['FIROLID'] == 1): ?>
                          <span class="badge bg-info"> Administrador </span>
                        <?php else: ?>
                          <?php
                          $encrypter = \Config\Services::encrypter();
                          $encryptedId = bin2hex($encrypter->encrypt($usuario['FIUSUARIOID']));
                          ?>
                          <button type="button" id="btn-detalles" data-id="<?= $encryptedId; ?>" class="btn-sm app-btn-secondary px-2 btn-detalles" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            Detalles
                          </button>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?= view('layout/footer'); ?>
  </div>
  <!-- canva detalle ususarios -->
  <div class="offcanvas offcanvas-end"
    style="width: 500px; transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;" tabindex="-1"
    id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title d-flex align-items-center gap-2 text-primary" id="offcanvasUserLabel">
        <i class="bi bi-person-circle fs-3 text-primary fa-solid fa-user"></i>
        Detalles del Usuario
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="nav nav-tabs" id="userTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="detalles-tab" data-bs-toggle="tab" data-bs-target="#detalles"
            type="button" role="tab">Detalles</button>
        </li>
        <!-- <li class="nav-item" role="presentation">
          <button class="nav-link" id="formulario-tab" data-bs-toggle="tab" data-bs-target="#formulario" type="button"
            role="tab">Editar</button>
        </li> -->
      </ul>
      <!-- TAB DETALLES -->
      <div class="tab-content mt-3" id="userTabContent">
        <div class="tab-pane fade show active" id="detalles" role="tabpanel">
          <ul class="list-group">
            <li class="list-group-item"><strong>Nombre:</strong> <span id="nombre"></span> </li>
            <li class="list-group-item"><strong>Apellido Paterno:</strong> <span id="appat"></span></li>
            <li class="list-group-item"><strong>Apellido Materno:</strong> <span id="apmat"></span></li>
            <li class="list-group-item"><strong>Correo:</strong> <span id="email"></span></li>
            <li class="list-group-item"><strong>Estatus:</strong> <span id="estatus"></span></li>
            <li class="list-group-item"><strong>Fecha Alta:</strong> <span id="fechaalta"></span></li>
            <li class="list-group-item"><strong>Última Actualización:</strong> <span id="fechaactualizacion"></span></li>
          </ul>
          <div class="d-flex gap-2 pt-2 justify-content-center">
            <button type="submit" id="btn-suspender" class="btn btn-warning w-25 text-white">
              <i class="bi bi-save"></i> Suspender
            </button>
            <button type="button" id="btn-elininar" class="btn btn-danger w-25 text-white">
              <i class="bi bi-trash"></i> Eliminar
            </button>
            <a type="button" id="btn-editar" class="btn btn-info w-25 text-white" href="<?= base_url('users/edit/' . 1); ?>">
              <i class="bi bi-trash"></i> Editar
            </a>
          </div>
        </div>
        <!-- TAB FORMULARIO -->
        <!-- <div class="tab-pane fade" id="formulario" role="tabpanel">
          <form>
            <div class="row">
              <div class="mb-3 col-6">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" value="Juan">
              </div>
              <div class="mb-3 col-6">
                <label class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" value="Pérez">
              </div>
              <div class="mb-3 col-6">
                <label class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" value="López">
              </div>
              <div class="mb-3 col-6">
                <label class="form-label">Correo</label>
                <input type="email" class="form-control" value="juan.perez@example.com">
              </div>
              <div class="mb-3 col-6">
                <label class="form-label">Clvae</label>
                <input type="email" class="form-control" value="juan.perez@example.com">
              </div>
              <div class="mb-3 col-6">
                <label class="form-label">Estatus</label>
                <select class="form-select">
                  <option selected>Activo</option>
                  <option>Inactivo</option>
                </select>
              </div>
            </div>
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-success w-25 text-white">
                <i class="bi bi-save"></i> Editar
              </button>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </div>
  <!--//app-wrapper-->
  <?= view('layout/scripts'); ?>
  <script src="<?= base_url('assets/js/scripts/users/index.js'); ?>"></script>
</body>

</html>