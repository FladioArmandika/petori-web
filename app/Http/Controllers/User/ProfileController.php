<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    

    public function getProfilePage() {
        return view('pages.user.profile');
    }

}
