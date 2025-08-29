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
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username,id,{id}]',
        'email'    => 'required|valid_email|max_length[120]|is_unique[users.email,id,{id}]',
        'password' => 'permit_empty|min_length[8]',
        'role_id'  => 'required|is_natural_no_zero',
    ];
    protected $validationMessages   = [
        'password' => [
            'min_length' => 'La contraseña debe tener al menos 8 caracteres.'
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
        if (! empty($data['data']['password'])) {
            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_ARGON2ID);
        }
        return $data;
    }

    public function findByLogin(string $login){
        return $this->select('TAUSUARIO.*, TAROL.FCNOMBREROL')
            ->join('TAROL','TAROL.FIROLID = TAUSUARIO.FIROLID')
            ->groupStart()
                ->where('FCEMAIL', $login)
            ->groupEnd()
            ->first();
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
            ->findAll();
    }

    public function getUsuarioPorId($userId){
        return $this->select("
            TAUSUARIO.FIUSUARIOID,
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
}
