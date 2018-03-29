<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(Request $request)
    {
        $tabTotal = $request->input('tabTotal', null);
        $splitNum = $request ->input('splitNum', null);
        $serviceLevel = $request ->input('serviceLevel', null);
        $roundUp = $request ->input('roundUp', null);
        $total = 0;
        if ($roundUp && $tabTotal && $splitNum && $serviceLevel) {
            $total = number_format((float)(ceil(($tabTotal + ($tabTotal * $serviceLevel)) / $splitNum)), 2, '.', '');
        }

        elseif ($tabTotal && $splitNum && $serviceLevel) {
            $total = number_format(round((($tabTotal + ($tabTotal * $serviceLevel)) / $splitNum), 2), 2, '.', '');
        }
        return view('bills.index')->with(['tabTotal' => $tabTotal,
                                                'splitNum' => $splitNum,
                                                'serviceLevel' => $serviceLevel,
                                                'roundUp' => $roundUp,
                                                'total' => $total,
        ]);
    }

}
