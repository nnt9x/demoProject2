<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class BrandController extends Controller
{
    function viewAllBrands(){
        $brands = Brand::all();
        return view('admin/brand/index',['brands'=>$brands]);
    }
}
