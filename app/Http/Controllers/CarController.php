<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_cars = "active";
        $active_brands = "";

        $cars = Car::all();
        $brands = Brand::all();

        return view('mycar', 
            compact('active_welcome', 'active_cars', 'active_brands', 'cars', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('createCar', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'code' => 'required',
        //     'car' => 'required',
        //     'type' => 'required',
        //     'merk' => 'required',
        //     'engine' => 'required',
        //     // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $input = $request->all();
  
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }
        
        $code = Str::upper(Str::substr($request->car, 0, 3));

        Car::create([
            'code' => $code,
            'car' => $request->car,
            'type' => $request->type,
            'merk' => $request->merk,
            'engine' => $request->engine,
            'price' => $request->price
            // 'image' => $request->image 
        ]);
        return redirect(route('car.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Car::where('code', $id)
        ->first();
        return view('showcar', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::findOrFail($id);
        $brands = Brand::all();
        return view('editCar', compact('cars', 'brands'));
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
        // $request->validate([
        //     'code' => 'required',
        //     'car' => 'required',
        //     'type' => 'required',
        //     'merk' => 'required',
        //     'engine' => 'required',
        //     // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $input = $request->all();
  
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }else{
        //     unset($input['image']);
        // }

        $code = Str::upper(Str::substr($request->car, 0, 3));
        $cars = Car::findOrFail($id);
        $cars->update([
            'code' => $code,
            'car' => $request->car,
            'type' => $request->type,
            'merk' => $request->merk,
            'engine' => $request->engine,
            'price' => $request->price
            // 'image' => $request->image
        ]);
      
        return redirect(route('car.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Car::findOrFail($id);
        $cars->delete();
        return redirect(route('car.index'));
    }
}