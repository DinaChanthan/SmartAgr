<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Farm;
use App\Product;


class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farms = Farm::where('user_id', Auth::id())->get();
        return view('manage/crop/farm/index', compact('farms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farms = Farm::all();
        return view('farm.create', compact('farms'));
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
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
            'description' => 'required',
            
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/images/farm'))
            {
                mkdir('uploads/images/farm',0777,true);
            }
            $image->move('uploads/images/farm',$imagename);

        }else{
            $imagename = "default.png";
        }

        $farm = new Farm();
        $farm->user_id = Auth::id();
        $farm->name = $request->name;
        $farm->description = $request->description;
        $farm->image = $imagename;

        $farm->save();
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
        $farms = Product::all()->where('farm_id', $id);
        return view('manage/crop/farm/detail', compact('farms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $farm = Farm::find($id);
        // return view('farm.detail', compact('farm'));
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
        $farms = Product::find($id);
        if (file_exists('uploads/images/product/'.$farms->image))
        {
            unlink('uploads/images/product/'.$farms->image);
        }
        $farms->delete();
        return redirect()->back();
    }
}
