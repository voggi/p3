<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitterController extends Controller
{
    public function index()
    {
        return 'Show the form where the user can enter details of how to split the bill.';
    }

    public function splitBill()
    {
        return 'Calculate the amount everyone owes and redirect the user back to the index page.';
    }
}
