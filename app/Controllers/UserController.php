<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoleModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();
                    

                // Stroing session values
                $this->setUserSession($user);

                return redirect()->to(base_url('dashboard'));
            }
        }
        return view('login');
    }

    private function setUserSession($user)
    {
        $role = new RoleModel();
        $role->where('id', $user->role_id)->first();
        $data = [
            'id' => $user['id'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role_id" => $user['role_id'],
            "role" => $role->nama,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}