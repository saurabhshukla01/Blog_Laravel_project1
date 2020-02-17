<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class Userblog extends Controller
{
    public function index(){

        //$blog = DB::table('users')->get();
        $blog = User::paginate(4);
        //print_r($blog);
        return view('blog1',compact('blog'));
    }
}
