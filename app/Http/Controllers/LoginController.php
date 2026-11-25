<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        
        // =================================================
        // Unsaon pag extract sa data gikan sa request
        // $email = $request->input('email');
        // ================================================


        // =================================================
        // Unsaon pag extract tanan data as an array
        // $fuck = $request->all();
        // ================================================


        // Kuhaon ang password og email
        $credentials = $request->only('email', 'password');

        // check if correct iya email og password
        if(Auth::attempt($credentials)) {
            // if sakto
            return response()->json([
                'msg' => 'Sakto'
            ]);
        } else {
            // if mali
            return response()->json([
                'msg' => 'Maliii'
            ]);
        }


    }
}
