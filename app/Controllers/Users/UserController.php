<?php

namespace App\Controllers\Users;

use App\Services\UserService;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RolesModel;
use App\Models\SucursalModel;

class UserController extends BaseController{
	// ---------- Propiedades ----------
	protected $userModel, $rolesModel, $sucursalModel;
	protected $encrypter;
	protected $userService;
	// ---------- Constructor ----------
	public function __construct(){
		$this->userModel = new UserModel();
		$this->rolesModel = new RolesModel();
		$this->sucursalModel = new SucursalModel();
		$this->userService = new UserService($this->userModel);
		$this->encrypter = \Config\Services::encrypter();
		helper('text');
	}
	// ---------- Listar Usuarios ----------
	public function index(){
		$sucursales = $this->sucursalModel->getSucursales();
		$roles = $this->rolesModel->getRoles();

		$data['roles'] = $roles;
		$data['sucursales'] = $sucursales;

		$data['title'] = 'Usuarios';
		return view('users/index', $data);
	}
	// ---------- Listar Usuarios ----------
	public function listarUsuarios(){
		$usuarios = $this->userModel->findAllUsers();

		foreach ($usuarios as &$user) {
			$user['ID_ENCRIPTADO'] = bin2hex($this->encrypter->encrypt($user['FIUSUARIOID']));
			unset($user['FIUSUARIOID']);
		}
		
		if ($usuarios) {
			return $this->response->setJSON([
				'status'  => 'success',
				'message' => 'Listado de usuarios',
				'usuarios' => $usuarios
			]);
		} else {
			return $this->response->setJSON([
				'status'  => 'error',
				'message' => 'No se encontraron usuarios'
			]);
		}
	}
	// ---------- Editar Usuario ----------
	public function edit($encryptedId = null){
		$response = [];

		try {
			$userId = $this->encrypter->decrypt(hex2bin($encryptedId));
			$usuario = $this->userModel->getUsuarioPorId($userId);

			if (!$usuario) {
				throw new \Exception('Usuario no encontrado');
			}
			// Agregar el ID encriptado al array del usuario
			$usuario['FIUSUARIOIDENCRYPTED'] = $encryptedId;

			$response = [
				'status' => 'success',
				'message' => 'Usuario Obtenido',
				'usuario' => $usuario
			];
		} catch (\Exception $e) {
			$response = [
				'status' => 'error',
				'message' => 'Usuario no encontrado'
			];
		}

		return $this->response->setJSON($response);
	}
	// ---------- Eliminar Usuario ----------
	public function delete($encryptedId = null){
		try {
			if (empty($encryptedId)) {
				return $this->response->setJSON(['status'=>'error','message'=>'ID no provisto'])->setStatusCode(400);
			}

			if (!ctype_xdigit($encryptedId)) {
				return $this->response->setJSON(['status'=>'error','message'=>'Formato inválido del id encriptado'])->setStatusCode(400);
			}

			$userId = $this->encrypter->decrypt(hex2bin($encryptedId));
			$this->userModel->delete($userId);

			return $this->response->setJSON(['status'=>'success','message'=>'Usuario eliminado','userIdEncrypted'=>$encryptedId]);
    } catch (\Exception $e) {
			return $this->response->setJSON(['status'=>'error','message'=>'Error interno: '.$e->getMessage()])->setStatusCode(500);
    }
	}
	// ---------- Crear Usuario ----------  
	 public function create()
    {
        $request = service('request');
        $payload = $request->getPost(); // obtiene todo el POST (FormData)

        // Llamamos al service
        $result = $this->userService->create($payload);

        if ($result['status'] === 'validation') {
            return $this->response->setJSON([
                'status' => 'info',
                'message' => $result['message'],
                'errors' => $result['errors']
            ]);
        }

        if ($result['status'] === 'success') {
            return $this->response->setStatusCode(201)->setJSON([
                'status' => 'success',
                'message' => $result['message'],
                'insertID' => $result['insertID']
            ]);
        }

        // fallback error
        return $this->response->setStatusCode(500)->setJSON([
            'status' => 'error',
            'message' => $result['message'] ?? 'Error interno'
        ]);
    }
	// ---------- Actualizar Usuario ----------
	public function update(){
		$request = service('request');

		$data = [
			'nombreUsuario'     => $request->getPost('nombreUsuario'),
			'apellidoPaterno'   => $request->getPost('apellidoPaterno'),
			'apellidoMaterno'   => $request->getPost('apellidoMaterno'),
			'email'             => $request->getPost('email'),
			'password'          => $request->getPost('password'),
			'confirmPassword'   => $request->getPost('confirmPassword'),
			'rol'               => (int) $request->getPost('rol'),
			'sucursal'          => (int) $request->getPost('sucursal'),
			'estatus'           => (int) $request->getPost('estatus')
		];
		return $this->response->setJSON(['status'=>'success','message'=>'Usuario ACTUALIZADO', 'datos' => $data]);
	}
}