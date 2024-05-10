<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaloController extends Controller
{

    // Dari Router ke Controller 
    public function index()
    {
        return '<h1>Dari Router ke Controller</h1>';
    }

    // Dari Router ke Controller ke View
    public function routerControllerView()
    {
        $nama = 'Khalid';
        $data = ['nama' => $nama];
        return view('basic.routercontrollerview', $data);
    }
}
