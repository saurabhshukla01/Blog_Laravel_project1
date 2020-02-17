<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\routes;

class examplecontroller extends Controller
{
    public function index($title)
    {
        return view('title',['title'=>$title]);
    }

    public function title(Request $req)
    {
        echo $url= $req->url()."<br>";
        echo $url= $req->method()."<br>";
        echo $url= $req->path()."<br>";
        print_r($req->input());
    }

    public function form_data()
    {
        return view('form_data');
    }

    public function get_data(Request $req)
    {
        $req->validate(['name'=>'required',
                        'email'=>'required | min:5 | max:30',
                        'password'=>'required | min:6 | max:16'
                       ]);
        $show = $req->input();
        //$show = $req->input('_token');
        //$show = $req->input('name');
        //$show = $req->input('email');
        //$show = $req->input('pwd');
        print_r($show);
    }


}
