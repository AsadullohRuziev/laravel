<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id=null)
    {
        return view('show');
    }
    public function list()
    {
        $users = [
            'Malik',
            'Joshqin',
            'Garr'
        ];
        $plans = [
            'free',
            'premium',
            'Gold'
        ];
        return view('list', compact('users','plans'));
//        return "go";
    }
}
