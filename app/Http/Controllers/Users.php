<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_check(Request $req)
    {
         $req->validate(['name'=>'required']);
         $req->session()->put('user_info',$req->input('name'));
         $user_name = $req->session()->get('user_info');
         if ($user_name ="Saurabh shukla")
         {
              // echo $user_name;
              echo "Welcome Saurabh";
         }
         else{
                echo "No Entry";
         }

    }

    public function users_list()
    {
        //$user_list = DB::select('select * from users');
        //$user_list = DB::table('users')->get();

        //get data in database value using name by first fetch data
        //$user_list = DB::table('users')->where('name','saurabh')->first();

        //find data using id if user know this id so fetch data in database table users id =3
        //$user_list = DB::table('users')->find(3);

        // find what is data in yours database table using count method
        //$user_list = DB::table('users')->count();

        //how to insert data in table of database when data insert print 1 data insert successfully in database..

        $user_list = DB::table('users')->insert(['name'=>'list',
                                                 'email'=>'list@gmail.com',
                                                 'password'=>'list@123'
                                                 ]);

        //how to update value query to database insert and updated successfully in database same table ..
        //$user_list = DB::table('users')->where(['name'=>'soni'])->update(['email'=>'soni1@gmail.com']);
        //how to delete value from data on database deleted successfully from same table data delete by row ......
        //$user_list = DB::table('users')->where(['name'=>'test'])->delete();
        print_r($user_list);
    }

}
