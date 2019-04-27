<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function getLoginPage() {
        return view('pages.auth.login');
    }

    public function getRegisterPage() {
        return view('pages.auth.register');
    }

}
