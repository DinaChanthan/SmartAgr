<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DB;

class DashboardController extends Controller
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
        $farms = Farm::where('user_id', Auth::id())->get();
        return view('manage/crop/farm/index', compact('farms'));
    }
}
