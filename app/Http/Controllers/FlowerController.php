<?php

namespace App\Http\Controllers;

use App\dataFlower;
use App\Flower;
use App\FlowerType;
use Illuminate\Http\Request;
use Faker\Provider\Uuid;
use Illuminate\Support\Facades\DB;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers = Flower::paginate(10);
        return view('admin.manage_flower', compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flower_types = FlowerType::all();
        return view('admin.insert_flower', compact('flower_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'flower_name' => 'required|min:5|max:50',
            'flower_price' => 'required|numeric',
            'flower_stock' => 'required|numeric',
            'flower_description' => 'required',
            'flower_image' => 'required',
        ];

        $this->validate($request, $rules);
        $flower = new Flower();
        $flower->flower_name = $request->flower_name;
        $flower->flower_price = $request->flower_price;
        $flower->flower_stock = $request->flower_stock;
        $flower->flower_type = $request->flower_type;
        $flower->flower_description = $request->flower_description;
        $flower_image = $request->file('flower_image');
        // 1. Nama image
        $image_name = Uuid::uuid().'.'.$flower_image->getClientOriginalExtension();
        // 2. Path/folder untuk store image
        $dest = public_path('/storage/images');
        // 3. Move image
        $flower_image->move($dest, $image_name);
        // 4. Store nama image di DB
        $flower->flower_image = $image_name;
        $flower->save();
        return redirect('/admin/flowers');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $flower = Flower::find($id);

        $flower_types = FlowerType::all();
        return view('admin.update_flower', compact('flower', 'flower_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'flower_name' => 'required|min:5|max:50',
            'flower_price' => 'required|numeric',
            'flower_stock' => 'required|numeric',
            'flower_description' => 'required',
            'flower_image' => 'required',
        ];
        $this->validate($request, $rules);
        $flower = Flower::find($id);
        $flower->flower_name = $request->flower_name;
        $flower->flower_price = $request->flower_price;
        $flower->flower_stock = $request->flower_stock;
        $flower->flower_type = $request->flower_type;
        $flower->flower_description = $request->flower_description;
        $flower_image = $request->file('flower_image');
        $image_name = Uuid::uuid().'.'.$flower_image->getClientOriginalExtension();
        $dest = public_path('/storage/images');
        $flower_image->move($dest, $image_name);
        $flower->flower_image = $image_name;
        $flower->save();
        return redirect('/admin/flowers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flower = Flower::find($id);
        $flower->delete();
        return redirect('/admin/flowers');
    }
}
