<?php

namespace App\Http\Controllers\public_view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard(){
        // return view('public_view.example.abc');
        return view('public_view.example.test');
    }
}
