<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewinvoicesController extends Controller
{
    public function viewinvoice()
    {
        return view('viewInvoice');
    }
}
