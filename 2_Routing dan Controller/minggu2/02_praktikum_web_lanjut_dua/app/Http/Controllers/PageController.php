<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
    }

    public function about() {
        return 'Nama : Darman Saputra Saragih <br>
                NIM  : 1941720060';
    }

    public function articles($id){
        return 'Halaman artikel dengan id '.$id;
    }
}
