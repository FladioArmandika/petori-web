<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller {

    public function getLoginPage() {
        return view('pages.auth.login');
    }

    public function getRegisterPage() {
        return view('pages.auth.register');
    }

    public function login(Request $request) {
        $bodyContent = $request->getContent();

        $email = $request->input('email');
        $password = $request->input('password');

        $url = 'https://petoriapi.herokuapp.com/user/login';
        $client = new Client(); 
        $res = $client->post($url,
            array(
                'form_params'=> array(
                    'email' => $email,
                    'password' => $password
                )
            )
        );

        $result = $res->getBody();

        $value = json_decode($result,true);

        if ($value['success'] != 1 ) {
            return $result;
        } else {
            // login sucessful
            Session::put('user',$email);
            Session::put('token',$value['token']);
            return "login success";
        }
    }

    public function register(Request $request) {
        $bodyContent = $request->getContent();

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $city = $request->input('city');

        $url = 'https://petoriapi.herokuapp.com/user/add';
        $client = new Client(); 
        $res = $client->post($url,
            array(
                'form_params'=> array(
                    'email' => $email,
                    'password' => $password,
                    'name' => $name,
                    'city' => $city
                )
            )
        );

        return redirect()->route('home');

    }

    public function logout() {
        Session::forget('some_data');
        Session::flush();

        return redirect()->route('home');
    }


}
