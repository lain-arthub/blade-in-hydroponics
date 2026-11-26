<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required',
        ]);


        if($validator->fails()) {
            return  redirect()
                    ->route('login')
                    ->with([
                        'msg' => 'Invalid Input',
                    ]);
        }

        
        // =================================================
        // Unsaon pag extract sa data gikan sa request
        // $email = $request->input('email');
        // ================================================


        // =================================================
        // Unsaon pag extract tanan data as an array
        // $fuck = $request->all();
        // ================================================


        // Kuhaon ang password og email
        $credentials    = $request->only('email', 'password');

        // check if correct iya email og password
        if(Auth::attempt($credentials)) {
            // if sakto
            // return response()->json([
            //     'msg' => 'Sakto'
            // ]);

            $user = Auth::user();
            if($user->admin == true) {
                return  redirect()
                    ->route('admin-usermanagement');
            } else {
                return  redirect()
                    ->route('dashboard');
            }


            
                   
        } else {
            // if mali
            return  redirect()
                    ->route('login')
                    ->with([
                        'msg' => 'Invalid email or password',
                    ]);
        }


    }
}
