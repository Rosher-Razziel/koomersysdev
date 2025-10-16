<?php namespace App\Services;

use App\Models\UserModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\Encryption\Encryption;
use CodeIgniter\CodeIgniter; // solo si necesitas services
use Config\Services;

class UserService{
  protected $model;
  protected $db;
  protected $validation;

  public function __construct(UserModel $model){
    $this->model = $model ?? new UserModel();
    $this->db = \Config\Database::connect();
    $this->validation = Services::validation();
  }

  /**
   * Crea un usuario validando y ejecutando la inserción en transacción.
   * Retorna array con status, message y datos (insertID).
   */
  public function create(array $payload): array{
    // 1. Rules server-side (coinciden con cliente)
    $rules = [
      'nombreUsuario'   => 'required|min_length[2]|max_length[120]',
      'apellidoPaterno' => 'permit_empty|max_length[120]',
      'apellidoMaterno' => 'permit_empty|max_length[120]',
      'email'           => 'required|valid_email|max_length[60]|is_unique[TAUSUARIO.FCEMAIL,FIUSUARIOID,{id}]',
      'password'        => 'required|min_length[8]|max_length[120]',
      'rol'             => 'required|is_natural_no_zero',
      'sucursal'        => 'required|is_natural_no_zero',
      'estatus'         => 'in_list[0,1]',
    ];

    $this->validation->reset();
    $this->validation->setRules($rules);

    if (!$this->validation->run($payload)) {
      $errores = $this->validation->getErrors();
      $primerError = reset($errores);

      return [
        'status' => 'validation',
        'message' => 'Errores de validación',
        'errors' => $primerError
      ];
    }

    // 2. Hash password (usar password_hash - PHP default bcrypt/argon2)
    $hash = password_hash($payload['password'], PASSWORD_DEFAULT);

    // 3. Prepara datos a insertar (solo campos necesarios)
    $insertData = [
      'FCNOMBREUSUARIO' => $payload['nombreUsuario'],
      'FCAPELLIDOPATERNO' => $payload['apellidoPaterno'] ?? null,
      'FCAPELLIDOMATERNO' => $payload['apellidoMaterno'] ?? null,
      'FCEMAIL' => strtolower($payload['email']),
      'FCCLAVE' => $hash,
      'FIROLID' => (int) $payload['rol'],
      'FISUCURSALID' => (int) $payload['sucursal'],
      'FIESTATUS' => isset($payload['estatus']) ? (int)$payload['estatus'] : 1,
      'FIEMAILVERIFICADO' => 0,
      'FDFECHAALTA' => date('Y-m-d H:i:s'),
    ];

    // 4. Transacción + inserción
    $this->db->transStart();
    try {
      $insertID = $this->model->insertUser($insertData, true); // true para returnID si CI se configura
      // aquí podrías crear auditoría, envío email en cola, asignar permisos, etc.

      $this->db->transComplete();

      if ($this->db->transStatus() === false) {
          return ['status'=>'error','message'=>'Error creando usuario test','insertID'=>null];
      }

      return ['status'=>'success','message'=>'Usuario creado correctamente','insertID'=>$insertID];
    } catch (\Throwable $e) {
      $this->db->transRollback();
      // Loggear error y devolver mensaje genérico
      log_message('error', 'UserService::create - ' . $e->getMessage());
      return ['status'=>'error','message'=>'Error interno al crear usuario'];
    }
  }
}