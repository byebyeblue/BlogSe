<?php

namespace App\Controllers;

use App\Controllers\BaseControllers;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel(); //nah ini contruct utk usermodel
    }

    public function index()
    {
        $data = [
            'title' => "Profile"
        ];
        return view('v_profile', $data);
    }

    public function register()
    {
        $data = [
            'title' => "Register"
        ];
        return view('user/v_register', $data);
    }

    public function saveRegister()
    {
        $request = service('request');
        $data = [
            'fullname' => $request->getVar('fullname'),     //ambil data dari inputan fullname di register
            'email' => $request->getVar('email'),           //ambil data dari inputan email di register
            'password' => $request->getVar('password'),
        ];
        // $this->UserModel->insert($data);
        // return redirect()->to(base_url('/login'));
        $register = new UserModel();
        $save = $register->insert($data);      //insert ini fungsi bawaan model untuk memasukkan/input data ken database
        if ($save) {
            return redirect()->to('/login');
        }
    }

    public function login()
    {
        $data = [
            'title' => "Form Login",
            'tampil' => "Login"
        ];
        return view('user/v_login', $data);
    }
}
