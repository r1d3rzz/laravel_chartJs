<?php

namespace App\Http\Controllers;

use App\Models\Inout;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $total_income = 0;
        $total_outcome = 0;

        $income_amount = [];
        $outcome_amount = [];

        $day_arr = [
            date("D")
        ];

        $date_arr = [
            [
                'year' => date("Y"),
                'month' => date("m"),
                'day' => date("d"),
            ]
        ];

        for ($i = 1; $i <= 6; $i++) {
            $day_arr[] = date("D", strtotime("-$i day"));
            $new_date = [
                'year' => date("Y", strtotime("-$i day")),
                'month' => date("m", strtotime("-$i day")),
                'day' => date("d", strtotime("-$i day")),
            ];
            $date_arr[] = $new_date;
        }

        function filterinoutTotalAmout($d, string $type)
        {
            return Inout::whereYear("date", $d['year'])
                ->whereMonth("date", $d['month'])
                ->whereDay("date", $d['day'])
                ->where("type", $type)
                ->sum("amount");
        }

        foreach ($date_arr as $d) {
            $income_amount[] =  filterinoutTotalAmout($d, "in");
            $outcome_amount[] = filterinoutTotalAmout($d, "out");
        }

        $date = date('Y-m-d');
        $today_inoutCome = Inout::whereDate('date', $date)->get();

        foreach ($today_inoutCome as $d) {
            if ($d->type == 'in') {
                $total_income += $d->amount;
            }

            if ($d->type == 'out') {
                $total_outcome += $d->amount;
            }
        }

        return view('index', [
            'data' => Inout::latest()->paginate(4),
            'total_income' => $total_income,
            'total_outcome' => $total_outcome,
            'day_arr' => $day_arr,
            'income_amount' => $income_amount,
            'outcome_amount' => $outcome_amount,
        ]);
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'about' => ['required'],
            'amount' => ['required'],
            'date' => ['required'],
            'type' => ['required'],
        ], [
            "about" => "အကြောင်းအရာထည့်သွင်းရန်လိုအပ်ပါသည်။",
            "amount" => "amount ထည့်သွင်းရန်လိုအပ်ပါသည်။"
        ]);

        Inout::create($formData);

        return redirect("/")->with("success", "စရင်းသွင်းတာအောင်မြင်ပါသည်။");
    }
}
