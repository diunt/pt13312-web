<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Dịu';
        $age = 20;
        $address ='Thanh Hóa';
        $email = 'diuntph06069@fpt.edu.vn';
        return view('hello', ['ten' => $name, 'tuoi' => $age, 'diachi' => $address, 'email' => $email]);
    }

    
}
