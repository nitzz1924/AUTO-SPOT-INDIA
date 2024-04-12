<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function signup_submit(Request $req)
    {
        // dd($req->all());
        $randomNumber = rand(100000, 999999);
        $data = new Team;
        $data->fullname=$req->input('fullname');
        $data->mobilenumber=$req->input('mobilenumber');
        $data->verifyotp=$randomNumber;
        $data->save();
        $responseData = [
            'msg' => 'success',
            'data' => $data->toArray(),
        ];
        return response()->json($responseData);
    }
}
