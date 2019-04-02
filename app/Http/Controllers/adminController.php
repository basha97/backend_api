<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use Illuminate\Support\Facades\Hash;

use App\User;

class adminController extends Controller
{
    public function index(){
        $data =  User::all();
        return view('welcome',compact('data'));
    }

    public function simple_form(){
        $data = User::get();
        return view('index',compact('data'));
    }

    public function saveData(Request $req){
        $input =  $req->all();

        $data = new User();

        $data->name = $input['name'];
        $data->email = $input['email'];
        $data->password = Hash::make($input['password']);
        $data->save();

        return Response()->json(['msg' => true , 'data' => $data]);

    }
}
