<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;
use Carbon\Carbon;
use App\Product;
use App\Device;
use Illuminate\Support\Facades\Auth;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->where('user_id', Auth::id());
        return view('monitor/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'farm_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
            'description' => 'required',
            
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/images/device'))
            {
                mkdir('uploads/images/device',0777,true);
            }
            $image->move('uploads/images/device',$imagename);

        }else{
            $imagename = "default.png";
        }

        $farm = new Farm();
        $farm->farm_id = $request->farm_id;
        $farm->name = $request->name;
        $farm->image = $imagename;
        $farm->description = $request->description;

        $farm->save();
        return redirect()->route('monitor.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
