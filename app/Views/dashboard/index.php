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
          Dashboard
        </h1>
      </div>
      <div class="col-auto">
        <div class="page-utilities">
          <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
            <div class="col-auto">
              <button class="btn app-btn-secondary shadow" id="btndownload">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
                Agregar Sucursal
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
                Descargar Excel
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Grid con Input y Output -->
    <div class="row g-4">
      <!-- JSON de entrada -->
      <div class="col-lg-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-2">
          <div class="app-card-body">
            <div class="container d-flex justify-content-center">
              <form class="settings-form w-100" style="max-width: 960px;" id="frmBuscarTiendas">
                <div class="row g-2">
                  <div class="col-12 col-md-4">
                    <select class="form-select" id="agregadorSelect">
                      <option selected disabled>Selecciona agregador</option>
                      <option value="1">Uber Eats</option>
                      <option value="2">Didi Food</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-4">
                    <select class="form-select" id="tipoMenuAgregador">
                      <option selected disabled>Tipo de menú</option>
                      <option value="0">Ver Todas</option>
                      <option value="15">Delivery Bis</option>
                      <option value="16">Delivery NoBis</option>
                      <option value="95">Delivery Bis LVL6</option>
                      <option value="4">Delivery Bis Congelados</option>
                      <option value="5">Delivery Bis Sinaloa</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-4 text-center">
                    <button type="submit" class="btn app-btn-primary mx-1" id="btnBuscarTiendas">Buscar Tiendas</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

      <!-- JSON de salida -->
      <div class="col-lg-12">
        <div class="card shadow-sm">
          <div class="table-responsive p-2" style="overflow-x: auto;">
            <table class="table table-bordered table-hover align-middle" id="tablaSucursales">
              <thead class="table-dark">
                <tr>
                  <th class="text-center">CECO</th>
                  <th class="text-center">NOMBRE</th>
                  <th class="text-center">AGREGADOR</th>
                  <th class="text-center">UUID AGREGADOR</th>
                  <th class="text-center">CLUSTER</th>
                  <th class="text-center">MENU</th>
                  <th class="text-center">ESTATUS</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<?= $this->endSection() ?>