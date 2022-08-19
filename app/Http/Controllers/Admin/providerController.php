<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;

class providerController extends Controller
{
    public function index()
    {
        $subcategory = SubCategory::count();
        $service = Service::count();
        $provider = User::where('role_as','provider')->count();

        return view('admin.provider',compact('subcategory','service','provider'));
//         return view('admin.dashboard');
    }
}
