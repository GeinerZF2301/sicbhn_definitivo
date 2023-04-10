<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('home');
    }
    public function store(Request $request){
        $correo = new ContactMail($request->all());
    Mail::to('sicbhn2023@gmail.com')->send($correo);
    return view('principal/contactos.contactos-index');
    }
}
