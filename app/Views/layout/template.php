<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container-xl">
  <div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
      <h1 class="app-page-title mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor"
          class="bi bi-shop-window" viewBox="0 0 16 16">
          <path
            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
        </svg>
        Template
      </h1>
    </div>
    <div class="col-auto">
      <div class="page-utilities">
        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
          <div class="col-auto">
            <button class="btn app-btn-secondary shadow" id="btndownload">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
              </svg>
              Boton 1
            </button>
          </div>
          <div class="col-auto">
            <button class="btn app-btn-secondary shadow" id="btndownload">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                <path fill-rule="evenodd"
                  d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
              </svg>
              Boton 2
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <!-- DIV 1 -->
    <div class="col-lg-12 col-md-8">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <div class="container d-flex justify-content-center">
            <h2>CONTENIDO DIV 1</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- DIV 2 -->
    <div class="col-lg-12 col-md-8">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <div class="container d-flex justify-content-center">
            <h2>CONTENIDO DIV 2</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <div class="container d-flex justify-content-center">
            <h2>CONTENIDO DIV 3</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <div class="container d-flex justify-content-center">
            <h2>CONTENIDO DIV 4</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <div class="container d-flex justify-content-center">
            <h2>CONTENIDO DIV 5</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <div class="container d-flex justify-content-center">
            <h2>CONTENIDO DIV 5</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <div class="container d-flex justify-content-center">
            <h2>CONTENIDO DIV 6</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="app-card app-card-settings shadow-sm p-2">
        <div class="app-card-body">
          <table class="table table-bordered table-hover" id="usuariosTable">
            <thead class="table-dark">
              <tr>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Correo</th>
                <th scope="col" class="text-center">Rol</th>
                <th scope="col" class="text-center">Sucursal</th>
                <th scope="col" class="text-center">Estatus</th>
                <th scope="col" class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody id="tabla-usuarios">
              <tr>
                <td class="text-center">Juan Perez</td>
                <td class="text-center">juan.perez@example.com</td>
                <td class="text-center">Administrador</td>
                <td class="text-center">Sucursal 1</td>
                <td class="text-center">Activo</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-primary text-white">Editar</button>
                  <button class="btn btn-sm btn-danger text-white">Eliminar</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">María García</td>
                <td class="text-center">maria.garcia@example.com</td>
                <td class="text-center">Vendedor</td>
                <td class="text-center">Sucursal 2</td>
                <td class="text-center">Activo</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-primary text-white">Editar</button>
                  <button class="btn btn-sm btn-danger text-white">Eliminar</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('assets/js/scripts/archivo.js'); ?>"></script>
<?= $this->endSection() ?>