<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index(){
        $userModel = new UserModel();

        $data['title'] = 'Usuarios';
        $data['usuarios'] = $userModel->findAllUsers();
        return view('users/index', $data);
    }

    public function create(){
        $data['title'] = 'Agregar Usuario';
        return view('users/crear', $data);
    }
    
    public function edit($userId){
        $data['title'] = 'Editar Usuario';
        return view('users/edit', $data);
    }

    public function masiveload(){
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
