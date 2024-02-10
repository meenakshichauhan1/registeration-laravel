<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\MyAuth;

class MyAuthController extends Controller
{
    function register(){
        return view('register');
    }
    function login(){
        return view('login');
    }
                    function register_save(Request $request){
                $request  ->validate([
                    'name' =>'required',
                    'email'=>'required|email|unique:my_auths',
                    'password'=>'required|min:5|max:12',
                ]);
                $user=new MyAuth;
                $user->name=$request->name;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $query=$user->save();
                if($query){
                    return back()->with('success', 'Registered succssfully');
                }
                else{
                    return back()->with('fail','Please input correct email id or password');
                }

            }


            public function login_check(Request $request)
            {
                $request->validate([
                    'email' => 'required|email',
                    'password' => 'required',
                ]);
        
                $user = MyAuth::where('email', $request->email)->first();
        
                if (!$user) {
                    return back()->with('fail', 'User not found');
                }
        
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('user_id', $user->id);
                   
                    return redirect('profile');
                } else {
                    return back()->with('fail', 'Invalid password');
                }
            }

            public function profile()
            {
                $userId = session('user_id');
                $user = MyAuth::find($userId);
            
                if (!$user) {
                    return redirect('login')->with('fail', 'You are not logged in');
                }
            
                return view('auth.profile', ['user_data' => $user]);
            }
            
                function logout(){
                    if(session()->has('user_id')){
                        session()->pull('user_id');
                        return redirect('login')->with('logout', 'succesfully logout');

                    }
                }
                }










            

                
