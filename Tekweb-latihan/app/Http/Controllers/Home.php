<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    public function render(){
        return view('layout.dashboard');
    }
}
