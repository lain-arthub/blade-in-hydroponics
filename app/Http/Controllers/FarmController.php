<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\Farm;
class FarmController extends Controller
{
    public function index(){

        $data['farm'] = Farm::all()->toArray();

        return view("admin.farm-management", $data);
    }

    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'location'  => 'required',
           
        ]);


        if($validator->fails()) {
            return  redirect()
                    ->route('admin-farmmanagement')
                    ->with([
                        'error' => 'Invalid Input',
                    ]);
        }


        $data = $request->all();

        Farm::create([
            'name'      => $data['name'],
            'location'  => $data['location'],
        ]);

        return  redirect()
                ->route('admin-farmmanagement')
                ->with([
                    'msg' => 'Create Success',
                ]);

    }
}
