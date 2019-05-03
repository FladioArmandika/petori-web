<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class OrderController extends Controller {
    
    public function getOrderPage() {

        return view('pages.order.order');
    }

    public function fetchOrder($status) {

        $url = 'https://petoriapi.herokuapp.com/order/u/5c9cd427aac061161c602380/' . $status;
        $client = new Client();
        $res = $client->get($url);

        $orders = $res->getBody();
        $orders = json_decode($orders,true);

        return view('pages.order.order_item', [
            'orders' => $orders
        ]);
    }

}
