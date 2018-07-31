<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Farm;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$farms = Product::all();
        //$farms->where('user_id', Auth::id())->get();
        //return view('manage/crop/product/index', compact('farms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farms = Farm::all()->where('user_id', Auth::id());
        return view('manage/crop/product/create', compact('farms'));
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
            'season_name' => 'required',
            'farm_id' => 'required',
            'production_area' => 'required',
            'process' => 'required',
            'season_manager' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'planting_date' => 'required',
            'harvest_date' => 'required',
            'name' => 'required',
            'product_image' => 'required|mimes:jpeg,jpg,bmp,png',
            'description' => 'required',
            
        ]);

        $image = $request->file('product_image');
        $slug = str_slug($request->name);

        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/images/product'))
            {
                mkdir('uploads/images/product',0777,true);
            }
            $image->move('uploads/images/product',$imagename);

        }else{
            $imagename = "default.png";
        }

        
        $product = new Product();
        $product->farm_id = $request->farm_id;
        $product->user_id = Auth::id();
        $product->season_name = $request->season_name;
        $product->production_area = $request->production_area;
        $product->process = $request->process;
        $product->season_manager = $request->season_manager;
        $product->start_date = $request->start_date;
        $product->end_date = $request->end_date;
        $product->planting_date = $request->planting_date;
        $product->harvest_date = $request->harvest_date;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->product_image = $imagename;

        $product->save();
        return redirect()->route('farm.index');
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
