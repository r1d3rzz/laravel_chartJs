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
        ]);
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'about' => ['required'],
            'amount' => ['required'],
            'date' => ['required'],
            'type' => ['required'],
        ]);

        Inout::create($formData);

        return redirect()->back()->with("success", "စရင်းသွင်းတာအောင်မြင်ပါသည်။");
    }
}
