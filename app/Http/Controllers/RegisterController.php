<?php

namespace App\Http\Controllers;

use App\User;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class RegisterController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $rules = [
            'emailregister' => 'required|string|email|max:255|unique:users',
            'nameregister' => 'required',
            'password' => 'required|confirmed|alpha_dash|min:5',
            'password_confirmation' => 'required',
            'phoneregister' => 'required|numeric|digits_between:8,12',
            'gender' => 'required|in:male,female',
            'txtarea' => 'required|min:10',
            'product_image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ];

        $this->validate($request, $rules);

        $user = new User();
        $user->login_status = 0;
        $user->emailregister = $request->emailregister;
        $user->nameregister = $request->nameregister;
        $user->passregister = bcrypt($request->password);
        $user->phoneregister = $request->phoneregister;
        $user->gender = $request->gender;
        $user->address = $request->txtarea;

        $product_image = $request->file('product_image');
        $image_name = Uuid::uuid().'.'.$product_image->getClientOriginalExtension();
        $dest = storage_path('app/public/images');
        $product_image->move($dest, $image_name);
        $user->product_image = $image_name;
        $user->save();

        return redirect('login')->with('alert-success','Register Success, Please Login!');
    }

    public function loginPost(Request $request){
        $email = $request->emaillogin;
        $password = $request->passlogin;
        $remember = $request->remember;

        $user = DB::table('users')->where('emailregister', $email)->first();
        //dd($password);
        if($user){
            if(Hash::check($password,$user->passregister)){
                Session::put('username',$user->nameregister);
                Session::put('email',$user->emailregister);
                Session::put('role',$user->role);
                Session::put('login',1);
                if($remember){
                    //dd($remember);
                    return redirect('homepage')->withCookie(cookie('cookie', $email,60));
                }
                else{
                    //dd($remember);
                    return redirect('homepage'); //ini d ubah ntar
                }
            }
            else{
                return redirect('login')->with('alert','Wrong Password or Email, or you haven\'t registered yet !');
            }
        }
        else{
            return redirect('login')->with('alert','Wrong Password or Email, or you haven\'t registered yet !');
        }
    }
}
