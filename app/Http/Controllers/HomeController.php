<?php

namespace App\Http\Controllers;

use App\dataFlower;
use App\Score;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function logout(){
        Session::flush();
        return redirect('login');
    }

    public function index(){
        $flowers = dataFlower::paginate(10);
        return view('auth.homepage', compact('flowers'));
    }

    public function search(Request $request){
        $key = $request->search;

        $flowers = DB::table('data_flowers')
            ->where('name','like','%'.$key.'%')
            ->orWhere('description', 'like', '%'.$key.'%')
            ->paginate(10);

        return view('auth.homepage',
            compact('flowers')
        );
    }
}
