<form action="<?= base_url('usuarios/store') ?>" method="post">
  <div class="row g-3">
    <?php
      $fields = [
        'FCNOMBREUSUARIO' => 'Nombre de Usuario',
        'FCAPELLIDOPATERNO' => 'Apellido Paterno',
        'FCAPELLIDOMATERNO' => 'Apellido Materno',
        'FCEMAIL' => 'Correo Electrónico'
      ];
      foreach ($fields as $name => $label) {
    ?>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
      <label for="<?= $name ?>" class="form-label"><?= $label ?></label>
      <input type="<?= $name === 'FCEMAIL' ? 'email' : 'text' ?>" class="form-control" id="<?= $name ?>" name="<?= $name ?>"
        value="<?= $usuario[$name] ?? '' ?>" required placeholder="<?= $label ?>">
    </div>
    <?php } ?>

    <!-- Rol -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
      <label for="FIROLID" class="form-label">Rol</label>
      <select class="form-select" id="FIROLID" name="FIROLID" required>
        <option value="0" selected disabled>Seleccione un rol</option>
        <?php foreach ($roles as $r): ?>
        <option value="<?= $r['FIROLID'] ?>" <?= ($usuario['FIROLID'] ?? '') == $r['FIROLID'] ? 'selected' : '' ?>>
          <?= $r['FCNOMBREROL'] ?>
        </option>
        <?php endforeach ?>
      </select>
    </div>

    <!-- Sucursal -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
      <label for="FISUCURSALID" class="form-label">Sucursal</label>
      <select class="form-select" id="FISUCURSALID" name="FISUCURSALID" required>
        <option value="0" selected disabled>Seleccione una sucursal</option>
        <?php foreach ($sucursales as $s): ?>
        <option value="<?= $s['FISUCURSALID'] ?>" <?= ($usuario['FISUCURSALID'] ?? '') == $s['FISUCURSALID'] ? 'selected' : '' ?>>
          <?= $s['FCNOMBRESUCURSAL'] ?>
        </option>
        <?php endforeach ?>
      </select>
    </div>

    <?php
      $fechas = [
        'FDFECHAALTA' => 'Fecha de Creación',
        'FDFECHAACTUALIZACION' => 'Fecha de Actualización'
      ];
      foreach ($fechas as $name => $label):
        $value = $usuario[$name] ?? '';
        $disabled = $value ? 'disabled' : '';
    ?>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
      <label for="<?= $name ?>" class="form-label"><?= $label ?></label>
      <input type="datetime-local" class="form-control" id="<?= $name ?>" name="<?= $name ?>"
        value="<?= $value ?>" required placeholder="<?= $label ?>" <?= $disabled ?>>
    </div>
    <?php endforeach ?>

    <!-- Correo Verificado -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
      <label for="correoVerificado" class="form-label d-block">Correo Verificado</label>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="correoVerificado" name="FIEMAILVERIFICADO"
          <?= ($usuario['FIEMAILVERIFICADO'] ?? 0) == 1 ? 'checked disabled' : 'disabled' ?>>
        <label class="form-check-label" for="correoVerificado">
          <?= ($usuario['FIEMAILVERIFICADO'] ?? 0) == 1 ? 'Verificado' : 'No Verificado' ?>
        </label>
      </div>
    </div>

    <!-- Estatus -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
      <label for="estatusUsuario" class="form-label d-block">Estatus</label>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="estatusUsuario" name="FIESTATUS"
          <?= ($usuario['FIESTATUS'] ?? 0) == 1 ? 'checked' : '' ?>>
        <label class="form-check-label" for="estatusUsuario">Desactivado</label>
      </div>
    </div>
  </div>

  <!-- Botón Guardar -->
  <div class="col-12 text-center mt-3">
    <button type="submit" class="btn btn-success px-4 text-white">
      <i class="bi bi-save"></i> Guardar Usuario
    </button>
  </div>
</form>