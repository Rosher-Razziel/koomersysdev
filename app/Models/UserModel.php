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

    // Campos permitidos (solo los que se guardan en DB)
    protected $allowedFields    = [
        'FCNOMBREUSUARIO',
        'FCAPELLIDOPATERNO',
        'FCAPELLIDOMATERNO',
        'FCEMAIL',
        'FCCLAVE',
        'FIROLID',
        'FISUCURSALID',
        'FIESTATUS',
        'FIEMAILVERIFICADO',
        'FDFECHAALTA',
        'FDFECHAACTUALIZACION',
        'FCRECORDARTOKEN',
        'FDRECORDARTOKENFIN'
    ];

    // Timestamps configurados (CI4 manejará created_at/updated_at si corresponden)
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'FDFECHAALTA';
    protected $updatedField  = 'FDFECHAACTUALIZACION';

    // Desactivar validación y callbacks en el modelo:
    // (La validación y hashing los realiza el UserService)
    protected $skipValidation = true;
    protected $allowCallbacks = false;

    public function findAllUsers(){
        return $this->select("
            TAUSUARIO.FIUSUARIOID,
            TAUSUARIO.FCNOMBREUSUARIO,
            TAUSUARIO.FCAPELLIDOPATERNO,
            TAUSUARIO.FCAPELLIDOMATERNO,
            TAUSUARIO.FCEMAIL,
            TAUSUARIO.FIEMAILVERIFICADO,
            TAROL.FIROLID,
            TAROL.FCNOMBREROL,
            TASUCURSAL.FISUCURSALID,
            TASUCURSAL.FCNOMBRESUCURSAL,
            TAUSUARIO.FIESTATUS,
            TAMARCA.FIMARCAID,
            TAMARCA.FCNOMBRE")
            ->join('TAROL', 'TAROL.FIROLID = TAUSUARIO.FIROLID', 'LEFT')
            ->join('TASUCURSAL', 'TASUCURSAL.FISUCURSALID = TAUSUARIO.FISUCURSALID', 'LEFT')
            ->join('TAMARCA', 'TAMARCA.FIMARCAID = TASUCURSAL.FIMARCAID', 'LEFT')
            ->orderBy('TAUSUARIO.FIUSUARIOID', 'ASC')
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

    // public function updateUsuarioPorId($userId, $data){
    //   return $this->update($userId, $data);
    // } 
    
    // insertar y devolver id
    public function insertUser(array $data){
        return $this->insert($data, true); // true -> return id if configured
    }
}