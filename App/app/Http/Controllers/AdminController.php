<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function _construct(){
        $this->middleware(['admin','auth']);
    }
    //
    public function index(){
        return view('admin.index');
    }
}
