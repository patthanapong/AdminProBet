<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contents;
class FroalaController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }
    
    public function store(Request $request)
    {
        // $title = request('title');
        // $keywords = request('keywords');
        // $data =request('data');
         $path = $request->photo->storeAs('images', $request->photo->getClientOriginalName() );

         contents::create([
                    'user_id' => auth()->user()->id, 
                    'title' => request('title'),
                    'keywords' => request('keywords'), 
                    'path'=> $path
         ]);
        //  $data = request()->except([ '_token' ]);
        //  $path = request('path');
        
        return view('upload.show' ,compact('path'));




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

    public function show()
    {
        $contents = contents::get();
        return view('promotion' ,compact('contents'));
    }
}
