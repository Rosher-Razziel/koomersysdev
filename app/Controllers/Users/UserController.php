<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RolesModel;
use App\Models\SucursalModel;

class UserController extends BaseController
{
    public function index(){
        $userModel = new UserModel();

        $data['title'] = 'Usuarios';
        $data['usuarios'] = $userModel->findAllUsers();
        return view('users/index', $data);
    }

    public function create(){
        $rolesModel = new RolesModel();
        $sucursalModel = new SucursalModel();
        
        $roles = $rolesModel->getRoles();
        $sucursales = $sucursalModel->getSucursales();

        $data['roles'] = $roles;
        $data['sucursales'] = $sucursales;
        $data['title'] = 'Agregar Usuario';
        return view('users/crear', $data);
    }
    
    public function edit($encryptedId){
        $encrypter = \Config\Services::encrypter();

        try {
            $userId = $encrypter->decrypt(hex2bin($encryptedId));
            $userModel = new UserModel();
            $rolesModel = new RolesModel();
            $sucursalModel = new SucursalModel();
            
            $usuario = $userModel->getUsuarioPorId($userId);
            $roles = $rolesModel->getRoles();
            $sucursales = $sucursalModel->getSucursales();

            if ($usuario) {
                $data['userEncrypt'] = $encryptedId;
                $data['usuario'] = $usuario;
                $data['roles'] = $roles;
                $data['sucursales'] = $sucursales;
            } else {
                // Devuelve un JSON de error si no se encuentra
                $data['error'] = [
                    'status'  => 'error',
                    'message' => 'Usuario no encontrado'
                ];
            }
        } catch (\Exception $e) {
            $data['error'] = [
                    'status'  => 'error',
                    'message' => 'Id Invalido'
                ];
        }

        $data['title'] = 'Editar Usuario';
        return view('users/edit', $data);
    }

    public function cargaMasiva(){
        $data['title'] = 'Carga Masiva Usuarios';
        return view('users/masiveload', $data);
    }

    public function find($encryptedId){
        $encrypter = \Config\Services::encrypter();

        try {
            $userId = $encrypter->decrypt(hex2bin($encryptedId));
            $userModel = new UserModel();
            $usuario = $userModel->getUsuarioPorId($userId);
            if ($usuario) {
                // Devuelve un JSON con status 200
                return $this->response->setJSON([
                    'status' => 'success',
                    'userIdEncrypted' => $encryptedId,
                    'data'   => $usuario
                ]);
            } else {
                // Devuelve un JSON de error si no se encuentra
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Usuario no encontrado'
                ])->setStatusCode(404);
            }
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message'=> 'ID inválido'
            ])->setStatusCode(400);
        }
    }

}
