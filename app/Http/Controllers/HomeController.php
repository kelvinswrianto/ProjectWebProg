<?php

namespace App\Http\Controllers;

use App\dataFlower;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $flowers = dataFlower::paginate(10);
        return view('auth.homepage', compact('flowers'));
    }
}
