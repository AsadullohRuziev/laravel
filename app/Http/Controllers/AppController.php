<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function app()
    {
        return view('app');
    }
    public function members()
    {
        $members = [
//            'Maya',
//            'Nozi',
//            'Dili'
        ];
        return view('members', compact('members'));
    }
    public function about()
    {
        return view('about');
    }
}
