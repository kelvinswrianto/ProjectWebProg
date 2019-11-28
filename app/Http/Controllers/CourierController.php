<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    //
    public function update(Request $request, $id){
        $rules = [
            'courier_name' => 'required|min:3',
            'courier_price' => 'required|numeric|min:3000'
        ];
        $this->validate($request, $rules);

        $courier = Courier::find($id);
        $courier->courier_name = $request->courier_name;
        $courier->courier_price = $request->courier_price;
        $courier->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $courier = Courier::find($id);
        return view('admin.UpdateCourier', compact('courier'));
    }
}
