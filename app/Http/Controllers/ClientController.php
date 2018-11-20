<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;
use App\Client as Client;

class ClientController extends Controller
{
    //
    public function __construct( Title $titles )
    {
        $this->titles = $titles->all();
    }


    public function index()
    {
        $data =[];

        $obj = new \stdClass;
        $obj -> id = 1;
        $obj-> name = 'sepehr';
        $obj-> title ='doctor';
        $obj-> email = 'sepehr@gmail.com';
        $data['clients'][] = $obj;
        $obj = new \stdClass;
        $obj -> id = 2;
        $obj-> name = 'poyan';
        $obj-> title ='mr';
        $obj-> email = 'puyan@gmail.com';
        $data['clients'][] = $obj;

        return view('client/index',$data);
    }

    public function newClient()
    {
        $data['title'] = $request->input('title');
        $data['name'] = $request->input('name');
        $data['last_name'] = $request->input('last_Name');

        $data['address'] = $request->input('address');
        $data['zip_code'] = $request->input('zip_code');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
        $data['email'] = $request->input('email');


        return view('client/newClient');
    }

    public function create()
    {
            return view('client/create');
    }

    public function show($client_id)
    {
        return view('client/show');
    }
}
