<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //get data
    function show ($id = null) {
        return $id ? products::find($id) : products::all();
    }

    function create ( Request $req) {
        $product = new products;
        $product->title = $req->title;
        $product->amount_left = $req->amount_left;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->img_url = $req->img_url;

        $result = $product->save();
        if ($result) {
            return [
                "result" => "success",
                "product" => $product,
            ];
        }
    }

    function update (Request $req) {
        $product = products::find($req->id);
        $product->title = $req->title;
        $product->amount_left = $req->amount_left;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->img_url = $req->img_url;

        $result = $product->save();
        if ($result) {
            return [
                "result" => "success",
                "product" => $product,
            ];
        }
    }

    function delete ($id) {
        $product = Products::find($id);
        $result = $product->delete();
        if ($result) {

            return [
                "result" => "Deleted id $id",
                "product" => $product
            ];
        } else {
            return "Can't not find $id";
        }
    }
}
