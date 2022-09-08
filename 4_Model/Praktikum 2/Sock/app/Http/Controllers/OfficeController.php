<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index()
    {
        $office = Office::all();
        return view('office',compact('office'));
    }
}