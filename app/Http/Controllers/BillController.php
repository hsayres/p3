<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('bills.index');
    }

    public function show($total) {
        return view('bills.show')->with(['total' => $total]);
    }

}
