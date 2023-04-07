<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Auth_admin extends Controller
{

        public function register(Request $request){
            if($request->isMethod('post')){
                $rules=[
                    'name'=>'required|max:255',
                    'email'=>'required|email|max:255',


                ];
                $valaditor=Validator::make($request->all(),$rules);
                if($valaditor->fails()){
                    // return response()->json($valaditor->errors(),401); //400 envalies responce
                    Toastr::success($valaditor->errors(), 'Title', ["positionClass" => "toast-bottom-right"]);
                    return redirect()->route('admin.register');
                }


                $data=User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),

                ]);
                Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-bottom-right"]);
                return redirect()->route('admin.login');
            }else{
                Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-bottom-right"]);
                return view('admin.auth.register');
            }

        }



        public function login(Request $request){
            // if(auth()->user()){
            //     return redirect()->route('school.dashboard');
            // }
            if($request->isMethod('post')){
                $rules=[
                    'email'=>'required|email|max:255',
                    // 'password'=>'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/'
                ];
                $valaditor=Validator::make($request->all(),$rules);
                if($valaditor->fails()){
                    Toastr::success($valaditor->errors(), 'Title', ["positionClass" => "toast-bottom-right"]);
                    return redirect()->route('admin.login');
                }

                if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                    // if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                        // return Auth::guard('orgSadmin')->user();

                        // return auth()->guard('wc_admin')->user();
                        Toastr::success('Successfully Log in :)','Success');
                        return redirect()->route('admin.dashboard');
                    }else{
                        Toastr::error('Wrong Username And Password :)','error');
                        // Toastr::error
                        return redirect()->route('admin.login');
                    }




            }else{
                return view('admin.auth.login');
            }

        }

}
