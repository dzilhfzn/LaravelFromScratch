<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index() {

        $data = ['dzil','yuki','cae','kei'];

        if (view()->exists('users'))
        {
            return view('users', ['data'=>$data]);
        }
    }
}
