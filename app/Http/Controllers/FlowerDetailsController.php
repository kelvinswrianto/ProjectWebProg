<?php

namespace App\Http\Controllers;

use App\Flower;
use Illuminate\Http\Request;

class FlowerDetailsController extends Controller
{
    public function detail($id){
        $detail = Flower::find($id);
        return view('auth.flower_details', compact('detail'));
    }
}
