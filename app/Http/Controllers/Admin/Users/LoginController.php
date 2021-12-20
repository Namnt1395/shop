<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        echo view('admin.users.login', [
            'title'=> 'Đăng nhập hệ thống'
        ]);
    }
}
