<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog_model;

class Blog_url extends Controller
{
    public function Blog_list()
    {
        //return Blog_model::all();
        $blog_list = Blog_model::where('title','Main')
                               ->orderBy('id','desc')
                               ->get();
        return view('blog',['data'=>$blog_list]);
    }

    public function blog_submit(Request $req)
    {
        $path = $req->file('blog_image')->store('public');
        //print_r($path);
        $blog = new Blog_model();
        $blog->title = $req->title;
        $blog->description = $req->description;
        $blog->product_name = $req->product_name;
        $blog->product_price = $req->product_price;
        //$blog->remember_token = $req->_token;
        //$blog->assets = $req->$path;
        $blog->save();
        echo "Inserted value successfully .<br>";
        print_r($path);
    }

}
