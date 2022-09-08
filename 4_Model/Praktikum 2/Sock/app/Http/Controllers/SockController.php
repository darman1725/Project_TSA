<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SockController extends Controller
{
    public function master(){
        return view('master', ['name' => 'masterSock']);
    }

    public function index(){
        return view('master.index', ['name' => 'indexSock']);
    }

    public function about(){
        return view('master.about', ['name' => 'masterSock']);
    }

    public function testmonial(){
        return view('master.testmonial', ['name' => 'testmonialSock']);
    }

    public function shop(){
        return view('master.clients', ['name' => 'clientsSock']);
    }

    public function contact(){
        return view('master.contact', ['name' => 'contactSock']);
    }

    public function office(){
        return view('office', ['name' => 'officeSock']);
    }
}
