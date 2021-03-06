<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller {

    
    public function getServiceDetail($serviceId) {

        $url = 'https://petoriapi.herokuapp.com/service/'.$serviceId;
        $client = new Client(); 
        $res = $client->get($url);
        
        $result = $res->getBody();

        $result = json_decode($result,true);

        $category = [];


        // Breakdown pet category 
        foreach ($result['items'] as $item) {
            array_push($category, $item['category']);
        }
        $category = array_unique($category);
        
        return view('pages.service.service_detail', [
            'service' => $result,
            'categories' => $category
        ]);
    }

    public function getItemComponent($category) {

        $url = 'https://petoriapi.herokuapp.com/item/c/'.$category;
        $client = new Client(); 
        $res = $client->get($url);
        
        $items = $res->getBody();

        $items = json_decode($items,true);


        return view('pages.service.item_component', [
            'items' => $items
        ]);
    }



    public function getOrderDetail() {

        $request = Session::get('request');
        $serviceId = Session::get('serviceId');
        $idItems = Session::get('items');
        $totalItem = Session::get('totalItem');


        $items = array();

        // HTTP REQUEST
        foreach ($idItems as $idItem) {
            $url = 'https://petoriapi.herokuapp.com/service/'.$serviceId;
            $client = new Client();
            $res = $client->get($url);
            $result = $res->getBody();

            $service = json_decode($result,true);

            foreach($service['items'] as $item) {
                if ( $item['_id'] == $idItem) {
                    array_push($items,$item);
                }
            }
        }

        // get user
        $email = Session::get('user');
        $url = 'https://petoriapi.herokuapp.com/user/e/' . $email;
        $client = new Client();
        $res = $client->get($url);
        $result = $res->getBody();

        $user = json_decode($result,true);


        return view('pages.service.order_detail', [
            'items' => $items,
            'user' => $user
        ]);
    }

    public function getConfirmationPage(Request $request) {

        $bodyContent = $request->getContent();

        $city = $request->input('city');
        $name = $request->input('name');
        $address = $request->input('address');
        $itemIds = $request->input('items');

        $items = [];
        $totalPrice = 0;

        // getting Items 
        foreach ($itemIds as $key => $itemId) {
            $url = 'https://petoriapi.herokuapp.com/item/' . $itemId;
            $client = new Client();
            $res = $client->get($url);
            $result = $res->getBody();

            $item = json_decode($result,true);

            $totalPrice = $totalPrice + $item['price'];
            array_push($items,$item);
        }

        $category = $items[0]['category'];
        
         // get user
         $email = Session::get('user');
         $url = 'https://petoriapi.herokuapp.com/user/e/' . $email;
         $client = new Client();
         $res = $client->get($url);
         $result = $res->getBody();
 
         $user = json_decode($result,true);

        return view('pages.service.order_confirm', [
            'content' => $bodyContent,
            'city' => $city,
            'name' => $name,
            'address' => $address,
            'items' => $items,
            'totalprice' => $totalPrice,
            'category' => $category,
            'user' => $user
        ]);
    }

    // 
    public function postSelectedItem(Request $request) {
        $bodyContent = $request->getContent();
        
        $serviceId = $request->input('serviceId');
        $totalItem = $request->input('totalItem');

        $itemCart = array();

        for ($i=0; $i <= $totalItem; $i++) { 
            $itemCart[$i] = $request->input('item-cb-'.$i);
        }
      
        return redirect()->route('service.order')
            ->with( [
                'request' => $bodyContent,
                'serviceId' => $serviceId,
                'items' => $itemCart,
                'totalItem' => $totalItem
            ]);
    }

    
    public function getOrderSuccessPage(Request $request) {

        $city = $request->input('city');
        $name = $request->input('name');
        $address = $request->input('address');
        $itemIds = $request->input('items');

        $userid = $request->input('userid');

        $url = 'https://petoriapi.herokuapp.com/order/make';
        $client = new Client();
        $res = $client->post(
            $url,
            array(
                'form_params' => array(
                    'userid' => $userid,
                    'name' => $name,
                    'city' => $city,
                    'address' => $address,
                    'items' => $itemIds
                )
            )
        );

        return view('pages.service.order_success');
    }


}



