<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomersController extends Controller
{
    public function customer()
    {
        return view('customer');
    }

    function insert(Request $req)
    {
        $customerName=$req->input('customerName');
        $address=$req->input('address');
        $email=$req->input('email');

        $data = array('customerName'=>$customerName, 'address'=>$address, 'email'=>$email);

        DB::table('customers')->insert($data);

        echo "Successfully Added Customer";
    }
}
