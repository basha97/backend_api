<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\User;

class adminController extends Controller
{
    public function index(){
        $data =  User::all();
        return view('welcome',compact('data'));
    }
}
