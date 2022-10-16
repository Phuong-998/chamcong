<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\chamcong;
use Illuminate\Support\Facades\DB;

class StatisticalController extends Controller
{
    //
    public function index(Request $request){
        $date = isset($request->idQuan) ? $request->idQuan : '';
        if($date == ''){
            $month = date('m');
        }else{
            $month = date("m",strtotime($date));
        }
        
        $product =employee::join('chamcong','chamcong.employee_id', '=', 'employee.id')->whereMonth('toDate','=',$month)->distinct()->select('chamcong.employee_id')->get();
      
        $data = [];
        foreach($product as $value){
            $a = DB::table('employee')->where('id',$value['employee_id'])->first();
           $data [] = [
                'id' => $value['id'],
                'coutn' => DB::table('chamcong')->where('employee_id',$value['employee_id'])->whereMonth('toDate','=',$month)->count(),
                'name' => $a->name,
                'salary' =>$a->salary
           ];
        }      
        
        return view('layouts/thongke/index',['data' => $data]);
    }

    public function search(Request $request)
    {
        $date = isset($request->idQuan) ? $request->idQuan : '';
        if($date == ''){
            $month = date('m');
        }
        $month = date("m",strtotime($date));
        $product =employee::join('chamcong','chamcong.employee_id', '=', 'employee.id')->whereMonth('toDate','=',$month)->distinct()->select('chamcong.employee_id')->get();
       $data = [];
        foreach($product as $value){
            $a = DB::table('employee')->where('id',$value['employee_id'])->first();
           $data [] = [
                'id' => $value['id'],
                'coutn' => DB::table('chamcong')->where('employee_id',$value['employee_id'])->whereMonth('toDate','=',$month)->count(),
                'name' => $a->name,
                'salary' =>$a->salary
           ];
        }  
        $html = '';
        $html .= ' <div class="phuong">';
        $html .= ' <tbody>';
        foreach($data as $value){
            $html .= ' <tr><td>';
            $html .= $value['name'] . '</td>';
            $html .= '<td>';
            $html .= $value['coutn'] . '</td>';
            $html .= '<td>';
            $html .= number_format($value['salary']) . '</td>';
            $html .= '<td>';
            $html .= number_format($value['coutn'] * $value['salary']) . '</td>';
            $html .= '</tr>';
            
        }
        $html .= ' </form> </tbody>';
       echo $html;

    }
}
