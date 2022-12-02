<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // GET localhost/admin/home
    function __construct()
    {
        $this->middleware('check.is.admin');
    }


    function viewHome(){
        return view('admin.home');
    }
}
