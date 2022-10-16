<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\chamcong;

class TimekeepingController extends Controller
{
    //
    public function index()
    {
        $data = employee::all();
        return view('layouts.chamcong.index', ['data' => $data]);
    }

    public function add(Request $request)
    {
        $data = $request->post();
        $checkbox = isset($data['check']) ? $data['check'] : "";
        
        $date = isset($data['date']) ? $data['date'] : "";
        if (!empty($checkbox)) {
            for ($n = 0; $n < count($checkbox); $n++) {
            for ($i = 0; $i < count($date); $i++) {
                $kt = chamcong::where('employee_id',$checkbox[$n])->where('toDate',$date[$i])->first();
                if(!empty($kt)){
                    continue;
                }
                chamcong::create([
                    'employee_id' => $checkbox[$n],
                    'toDate' => $date[$i]
                ]);
            }
        }
        }
        return redirect()->route('timekeeping');
    }
}
