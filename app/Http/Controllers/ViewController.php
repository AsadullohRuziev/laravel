<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view($name=null)
    {
//        $name = 'Shermat';
        return view('view',[
                'username' => $name
            ]);
    }
}
