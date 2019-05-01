<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller {
    
    public function getOrderPage() {

        return view('pages.order.order');
    }

    public function fetchOrder($status) {

    }

}
