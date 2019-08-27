<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    public function product()
    {
        return view('product');
    }

    function insert(Request $req)
    {
        $productName=$req->input('productName');
        $category=$req->input('category');
        $description=$req->input('description');

        $data = array('productName'=>$productName, 'category'=>$category, 'description'=>$description);

        DB::table('products')->insert($data);

        echo "Successfully Added Product";
    }
}
