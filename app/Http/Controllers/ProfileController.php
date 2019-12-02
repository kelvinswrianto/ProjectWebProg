<?php

namespace App\Http\Controllers;

use App\User;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function update(Request $request, $id){
        $rules = [
            'nameregister' => 'required|string',
            'emailregister' => 'required|email|unique',
            'phoneregister' => 'required|integer|min:8|max:12',
            'gender' => 'required|in:male,female',
            'address' => 'required|min:10',
            'product_image' => 'required|mimes:jpg,jpeg,png'
        ];
        $this->validate($request, $rules);

        $profile = User::find($id);
        $profile->nameregister = $request->nameregister;
        $profile->emailregister = $request->emailregister;
        $profile->phoneregister = $request->phonregister;
        $profile->gender = $request->gender;
        $profile->address = $request->address;

        $profile_image = $request->file('product_image')
        $image_name = Uuid::uuid().'.'.$profile_image->getClientOriginalExtension();
        $dest = storage_path('app/public/images');
        $profile_image->move($dest, $image_name);
        $profile->product_image = $image_name;

        $profile->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $courier = User::find($id);
        return view('updateProfile', compact('profile'));
    }
}
