<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'TAUSUARIO';
    protected $primaryKey       = 'FIUSUARIOID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['FCNOMBREUSUARIO', 'FCAPELLIDOPATERNO', 'FCAPELLIDOMATERNO', 'FCEMAIL', 'FCCLAVE', 'FIROLID', 'FISUCURSALID', 'FIESTATUS', 'FIEMAILVERIFICADO', 'FCRECORDARTOKEN', 'FDRECORDARTOKENFIN'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'FDFECHAALTA';
    protected $updatedField  = 'FDFECHAACTUALIZACION';

    // Validation
    protected $validationRules      = [
        'FCNOMBREUSUARIO' => 'required|min_length[3]|max_length[50]|is_unique[TAUSUARIO.FCNOMBREUSUARIO,FIUSUARIOID,{id}]',
        'FCEMAIL'    => 'required|valid_email|max_length[120]|is_unique[TAUSUARIO.FCEMAIL,FIUSUARIOID,{id}]',
        'FCCLAVE' => 'permit_empty|min_length[8]',
        'FIROLID'  => 'required|is_natural_no_zero',
        'FISUCURSALID' => 'required|is_natural_no_zero',
    ];
    protected $validationMessages   = [
        'FCCLAVE' => [
            'min_length' => 'La contraseña debe tener al menos 8 caracteres.'
        ],
        'FIROLID' => [
            'is_natural_no_zero' => 'El rol debe ser un número entero positivo.'
        ],
        'FISUCURSALID' => [
            'is_natural_no_zero' => 'La sucursal debe ser un número entero positivo.'
        ],
        'FCNOMBREUSUARIO' => [
            'required' => 'El nombre de usuario es requerido.'
        ],
        'FCEMAIL' => [
            'required' => 'El email es requerido.',
            'valid_email' => 'El email no es válido.',
            'max_length' => 'El email no puede exceder los 120 caracteres.',
            'is_unique' => 'El email ya está registrado.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['hashPassword'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashPassword(array $data){
        if (! empty($data['data']['FCCLAVE'])) {
            $data['data']['FCCLAVE'] = password_hash($data['data']['FCCLAVE'], PASSWORD_DEFAULT);
        }
        return $data;
    }    
    public function findAllUsers(){
        return $this->select("
            TAUSUARIO.FIUSUARIOID,
            TAUSUARIO.FCNOMBREUSUARIO,
            TAUSUARIO.FCAPELLIDOPATERNO,
            TAUSUARIO.FCAPELLIDOMATERNO,
            TAUSUARIO.FCEMAIL,
            TAROL.FIROLID,
            TAROL.FCNOMBREROL,
            TASUCURSAL.FCNOMBRESUCURSAL,
            TAUSUARIO.FIESTATUS,
            TAMARCA.FIMARCAID,
            TAMARCA.FCNOMBRE")
            ->join('TAROL', 'TAROL.FIROLID = TAUSUARIO.FIROLID', 'LEFT')
            ->join('TASUCURSAL', 'TASUCURSAL.FISUCURSALID = TAUSUARIO.FISUCURSALID', 'LEFT')
            ->join('TAMARCA', 'TAMARCA.FIMARCAID = TASUCURSAL.FIMARCAID', 'LEFT')
            ->asArray()
            ->findAll();
    }

    public function getUsuarioPorId($userId){
        return $this->select("
            TAUSUARIO.FCNOMBREUSUARIO,
            TAUSUARIO.FCAPELLIDOPATERNO,
            TAUSUARIO.FCAPELLIDOMATERNO,
            TAUSUARIO.FCEMAIL,
            TAROL.FIROLID,
            TAROL.FCNOMBREROL,
            TASUCURSAL.FISUCURSALID,
            TASUCURSAL.FCNOMBRESUCURSAL,
            TAMARCA.FIMARCAID,
            TAUSUARIO.FIESTATUS,
            TAUSUARIO.FIEMAILVERIFICADO,
            TAUSUARIO.FDFECHAALTA,
            TAUSUARIO.FDFECHAACTUALIZACION")
        ->join('TAROL', 'TAROL.FIROLID = TAUSUARIO.FIROLID', 'LEFT')
        ->join('TASUCURSAL', 'TASUCURSAL.FISUCURSALID = TAUSUARIO.FISUCURSALID', 'LEFT')
        ->join('TAMARCA', 'TAMARCA.FIMARCAID = TASUCURSAL.FIMARCAID', 'LEFT')
        ->where('TAUSUARIO.FIUSUARIOID', $userId)
        ->asArray()
        ->first();
    }

    public function insertUser(array $data){
        $usuario = [];

        // Asignar campos obligatorios
        $usuario['FCNOMBREUSUARIO']   = $data['FCNOMBREUSUARIO'] ?? 'SinNombre';
        $usuario['FCAPELLIDOPATERNO'] = $data['FCAPELLIDOPATERNO'] ?? 'SinApellido';
        $usuario['FCAPELLIDOMATERNO'] = $data['FCAPELLIDOMATERNO'] ?? 'SinApellido';
        $usuario['FCEMAIL']           = $data['FCEMAIL'];
        $usuario['FCCLAVE']           = $data['FCCLAVE'];

        // Asignar campos opcionales con valores por defecto
        $usuario['FIROLID']           = $data['FIROLID'] ?? 2; // rol genérico
        $usuario['FISUCURSALID']      = $data['FISUCURSALID'] ?? 1; // sucursal principal
        $usuario['FIESTATUS']         = $data['FIESTATUS'] ?? 1; // activo por defecto
        $usuario['FIEMAILVERIFICADO'] = $data['FIEMAILVERIFICADO'] ?? 0;

        // Campos de token (si aplica)
        $usuario['FCRECORDARTOKEN']     = $data['FCRECORDARTOKEN'] ?? null;
        $usuario['FDRECORDARTOKENFIN']  = $data['FDRECORDARTOKENFIN'] ?? null;

        return $this->insert($usuario);
    }

    public function updateUsuarioPorId($userId, $data){
        return $this->update($userId, $data);
    }    
}
