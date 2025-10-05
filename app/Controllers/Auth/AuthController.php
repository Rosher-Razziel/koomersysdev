<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function showLogin(){
        return view('auth\index');
    }   

    public function login(){
        $request = service('request');

        $email = $request->getPost('signin-email');
        $password = $request->getPost('signin-password');
        $remember = $request->getPost('RememberPassword');

        $userModel = new UserModel();
        $user = $userModel
            ->select('TAUSUARIO.*, TAROL.FCNOMBREROL, TASUCURSAL.FCNOMBRESUCURSAL, TAMARCA.FIMARCAID')
            ->join('TAROL', 'TAROL.FIROLID = TAUSUARIO.FIROLID')
            ->join('TASUCURSAL', 'TASUCURSAL.FISUCURSALID = TAUSUARIO.FISUCURSALID')
            ->join('TAMARCA', 'TAMARCA.FIMARCAID = TASUCURSAL.FIMARCAID', 'LEFT')
            ->where('FCEMAIL', $email)
            ->first();

        if (!$user || !password_verify($password, $user['FCCLAVE'])) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Datos incorrectos.']);
        }

        // Guardar en sesión
        session()->set([
            'isLoggedIn' => true,
            'marca_id' => $user['FIMARCAID'],
            'usuario' => [
                'id' => $user['FIUSUARIOID'],
                'nombre' => $user['FCNOMBREUSUARIO'],
                'apellido' => $user['FCAPELLIDOPATERNO'],
                'email' => $user['FCEMAIL'],
                'rol' => $user['FCNOMBREROL'],
                'rol_id' => $user['FIROLID'],
                'sucursal' => $user['FCNOMBRESUCURSAL']
            ]
        ]);

        if ($remember) {
            $token = bin2hex(random_bytes(32)); // Token seguro
            $expire = time() + (15 * 60 * 60); // 15 horas

            // Guardar cookie
            setcookie('remember_token', $token, $expire, "/", "", false, true);

            // Guardar token en DB
            $userModel->update($user['FIUSUARIOID'], [
                'FCRECORDARTOKEN' => $token,
                'FDRECORDARTOKENFIN' => date('Y-m-d H:i:s', $expire)
            ]);
        }

        return $this->response->setJSON([
            'status' => 'success', 
            'message' => 'Login exitoso', 
            'url' => 'users']);
    }

    public function logout(){
        // Eliminar la cookie expirándola
        setcookie('remember_token', '', time() - 3600, '/', '', false, true);
        unset($_COOKIE['remember_token']); // ← Esto evita que el filtro la vea en el mismo request

        // Limpiar DB
        if (session()->get('usuario.id')) {
            $userModel = new UserModel();
            $userModel->update(session()->get('usuario.id'), [
                'FCRECORDARTOKEN' => null,
                'FDRECORDARTOKENFIN' => null
            ]);
        }

        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}