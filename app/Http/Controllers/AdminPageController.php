<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products;

class AdminPageController extends Controller
{
    //
    function indexInfor()
    {
        $numberOfUser = User::all()->count();
        $numberOfProduct = products::all()->count();

        $products = products::all();

        $respone = [
            "number_of_users" => $numberOfUser,
            "number_of_products" => $numberOfProduct,
            "products" => $products
        ];
        return $respone;
    }
}
