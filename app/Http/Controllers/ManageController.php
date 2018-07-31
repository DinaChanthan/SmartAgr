<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Farm;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Farm::where('user_id', Auth::id())->get();
        return view('manage/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$items = Manage::all();
        return view('manage/create', compact('items'));
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
            'product_name' => 'required',
            'product_image' => 'required|mimes:jpeg,jpg,bmp,png',
            'description' => 'required',
            
        ]);

        $image = $request->file('product_image');
        $slug = str_slug($request->name);

        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/item'))
            {
                mkdir('uploads/item',0777,true);    
            }
            $image->move('uploads/item',$imagename);

        }else{
            $imagename = "default.png";
        }

        $product = new Manage();
        $product->farm_id = $request->farm_id;
        $product->season_name = $request->season_name;
        $product->production_area = $request->production_area;
        $product->process = $request->process;
        $product->season_manager = $request->season_manager;
        $product->start_date = $request->start_date;
        $product->end_date = $request->end_date;
        $product->planting_date = $request->planting_date;
        $product->harvest_date = $request->harvest_date;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->product_image = $imagename;

        $product->save();
        return redirect()->route('farm.index');

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
