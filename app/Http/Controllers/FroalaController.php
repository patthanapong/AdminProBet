<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
class FroalaController extends Controller
{
    public function store(Request $request)
    {
        $title = request('title');
        $keywords = request('keywords');
        $data =request('data');

         content::create([
                    'user_id' => auth()->user()->id, 
                    'title' =>$title,
                    'keywords' =>$keywords, 
                    'body'=> $data
         ]);
        //  $data = request()->except([ '_token' ]);
         $data = request('data');
        
        return view('froala.show' ,compact('data'));




        //   $rules =[
        //      'fullname' => 'required|min:5',
        //      'email' => 'required|string|email|max:255|unique:users,email',
        //     'password' => 'required|min:6',
        //     'retypepassword' => 'required|min:6'
           
        //  ];

        // $fullname = request('fullname');
        // $email = request('email');
        // $password = bcrypt(request('password'));
        // $checkpassword = request('password');
        // $checkretypepassword = request('retypepassword');
        // $retypepassword = bcrypt(request('retypepassword'));

        // $this->validate($request,$rules);

        // if($checkpassword==$checkretypepassword){
        // DB::table('users')->insert([
        // 'fullname' => $fullname,
        // 'email' => $email,
        // 'password' => $password,
        // ]);
        // return redirect('/');

        // }else{return redirect('/');}
       


        
       

        
    }
}
