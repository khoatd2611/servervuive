<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //
    function index(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    function register(Request $req)
    {
        $user = new User;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->birthday = $req->birthday;
        $user->gender = $req->gender;
        $user->phone_number = $req->phone_number;
        $user->address = $req->address;
        $user->admin = false;
        $result = $user->save();

        if ($result) {
            return [
                "result" => "Success",
                "User" => $user,
            ];
        }
    }
}
