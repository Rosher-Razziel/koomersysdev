<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RolesModel;
use App\Models\SucursalModel;

class UserController extends BaseController{

	protected $userModel, $rolesModel, $sucursalModel;
	protected $encrypter;

	public function __construct(){
		$this->userModel = new UserModel();
		$this->rolesModel = new RolesModel();
		$this->sucursalModel = new SucursalModel();
		$this->encrypter = \Config\Services::encrypter();
		helper('text');
	}

	public function index(){
		$sucursales = $this->sucursalModel->getSucursales();
		$roles = $this->rolesModel->getRoles();

		// Encriptar los IDs de sucursales
		foreach ($sucursales as &$sucursal) {
			$sucursal['FISUCURSALID'] = base64_encode($this->encrypter->encrypt($sucursal['FISUCURSALID']));
		}	
		// Encriptar los IDs de roles
		foreach ($roles as &$rol) {
			$rol['FIROLID'] = base64_encode($this->encrypter->encrypt($rol['FIROLID']));
		}

		$data['roles'] = $roles;
		$data['sucursales'] = $sucursales;

		$data['title'] = 'Usuarios';
		return view('users/index', $data);
	}

	public function listarUsuarios(){
		$usuarios = $this->userModel->findAllUsers();

		foreach ($usuarios as &$user) {
			$user['ID_ENCRIPTADO'] = bin2hex($this->encrypter->encrypt($user['FIUSUARIOID']));
			unset($user['FIUSUARIOID']);
		}

		if ($usuarios) {
			return $this->response->setJSON([
				'status'  => 'success',
				'usuarios' => $usuarios
			]);
		} else {
			return $this->response->setJSON([
				'status'  => 'error',
				'message' => 'No se encontraron usuarios'
			]);
		}
	}

	public function create(){
		$roles = $this->rolesModel->getRoles();
		$sucursales = $this->sucursalModel->getSucursales();

		$data['roles'] = $roles;
		$data['sucursales'] = $sucursales;
		$data['title'] = 'Agregar Usuario';
		return view('users/crear', $data);
	}
		
	public function edit($encryptedId = null){
			
		// try {
		// 	$userId = $this->encrypter->decrypt(hex2bin($encryptedId));
		// 	$usuario = $this->userModel->getUsuarioPorId($userId);

		// 	if ($usuario) {
		// 		$data['usuario'] = $usuario;
		// 	} else {
		// 		// Devuelve un JSON de error si no se encuentra
		// 		$data['error'] = [
		// 			'status'  => 'error',
		// 			'message' => 'Usuario no encontrado'
		// 		];
		// 	}
		// } catch (\Exception $e) {
		// 	$data['error'] = [
		// 		'status'  => 'error',
		// 		'message' => 'Usuario no encontrado'
		// 	];
		// }

		// return $this->response->setJSON([
		// 	'status' => 'success',
		// 	'userIdEncrypted' => $encryptedId,
		// 	$data
		// ]);

		$data['title'] = 'Editar Usuario TEST';
		return view('users/edit', $data);
	}

	public function cargaMasiva(){
		$data['title'] = 'Carga Masiva Usuarios';
		return view('users/masiveload', $data);
	}

	public function find($encryptedId){
		
		try {
			$userId = $this->encrypter->decrypt(hex2bin($encryptedId));
			$usuario = $this->userModel->getUsuarioPorId($userId);
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

	public function store(){
		if ($this->request->is('post')) {
			$data = $this->request->getPost();  // O usa validation primero
			// $result = $this->userModel->insertUser($data);
			return $this->response->setJSON(['success' => false, 'message' => 'Error al crear', 'registros' => $data]);
			// if ($result) {
			// 	return $this->response->setJSON(['success' => true, 'message' => 'Usuario creado']);
			// }
		}
		// return $this->response->setJSON(['success' => false, 'message' => 'Error al crear']);
	}

	public function update($encryptedId){

		try {
			$userId = $this->encrypter->decrypt(hex2bin($encryptedId));
			
			$data = $this->request->getPost();
			if ($this->userModel->updateUser($userId, $data)) {
				return $this->response->setJSON([
					'status' => 'success',
					'message' => 'Usuario actualizado correctamente'
				]);
			} else {
				return $this->response->setJSON([
					'status' => 'error',
					'message' => 'Error al actualizar el usuario'
				]);
			}
		} catch (\Exception $e) {
			return $this->response->setJSON([
				'status' => 'error',
				'message'=> 'ID inválido'
			])->setStatusCode(400);
		}
	}
}