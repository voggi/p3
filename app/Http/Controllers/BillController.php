<?php

namespace App\Http\Controllers;

use App\BillSplitter;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * GET /
    */
    public function index(Request $request)
    {
        return view('bills.index');
    }

    /**
     * GET /result
    */
    public function result(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric|min:0',
            'number-of-people' => 'required|numeric|min:0',
        ]);

        $billSplitter = new BillSplitter();

        $billSplitter->setAmount($request->input('amount'));

        $billSplitter->setNumberOfPeople($request->input('number-of-people'));

        $billSplitter->setTip($request->input('tip', 0));

        $billSplitter->setRoundUp($request->has('round-up'));

        $result = $billSplitter->getAmountOwedString();

        return view('bills.result')->with([
            'result' => $result,
        ]);
    }
}
