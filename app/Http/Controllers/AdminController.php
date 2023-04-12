<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-administracion',['only' => ['index']]);
       
    }

    public function index()
    {
        return view('layouts.admin');
    }

}
