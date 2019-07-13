<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginAuth(Request $request){
        $validateData = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validateData->fails()){
            return redirect('/')->withErrors($validateData)->withInput();
        }else{
            $LoginData = array(
                'username'     => $request->input('username'),
                'password'  => $request->input('password')
            );

            if(Auth::attempt($LoginData)){
                return redirect('home');
            }else{
                return back()->withErrors('Incorrect Username or Password');
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
