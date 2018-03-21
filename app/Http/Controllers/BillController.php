<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('bills.index');
    }

    public function splitBill()
    {
        $response = 'Amount that everyone owes will eventually go here ...';

        return view('bills.index')->with(['response' => $response]);
    }
}
