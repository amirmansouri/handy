<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\Setting;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

//      return view('home');
        $subcategory = SubCategory::count();
        $service = Service::count();
        $provider = User::where('role_as','provider')->count();

        return view('home',compact('subcategory','service','provider'));

    }


}
