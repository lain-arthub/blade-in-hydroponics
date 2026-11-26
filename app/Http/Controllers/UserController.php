<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class UserController extends Controller
{
    public function index() {

        // $data['name'] = 'Niggas';

        $data           = [];
        $users          = User::all()->toArray();
        $data['users']  = $users;        

       return view('admin.user-management', $data);
    }



    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'fname'     => 'required',
            'mname'     => 'nullable',
            'lname'     => 'required',
            'email'     => 'required',
            'role'      => 'required',
            'password'  => 'required|confirmed',
        ]);


        if($validator->fails()) {
            return  redirect()
                    ->route('add-user')
                    ->with([
                        'error' => 'Invalid Input',
                    ]);
        }


        $data = $request->all();

        User::create([
            'fname'     => $data['fname'],
            'mname'     => $data['mname'],
            'lname'     => $data['lname'],
            'email'     => $data['email'],
            'password'  => $data['password'],
            'admin'     => $data['role'] == 'admin' ? true : false,
        ]);


        return  redirect()
                ->route('add-user')
                ->with([
                    'msg' => 'Create Success',
                ]);
    }



    public function delete(int $id) {
        

        $user = User::where('id', '=', $id)->first();

        if($user != null) {
            
            $user->delete();
            return  redirect()
                    ->route('admin-usermanagement')
                    ->with([
                        'msg' => 'Deleted Successfully',
                    ]);
        } else {
            return  redirect()
                    ->route('admin-usermanagement')
                    ->with([
                        'error' => 'User does not exist',
                    ]);
        }

    }
}
