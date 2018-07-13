<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('dashboard');
    }

    public function manage()
    {
        $items = Manage::all();
        return view('manage/index', compact('items'));
    }
}
