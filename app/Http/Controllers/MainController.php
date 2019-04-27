<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MainController extends Controller {
    







    public function getHomePage() {
        return view('home');
    }

    


}
