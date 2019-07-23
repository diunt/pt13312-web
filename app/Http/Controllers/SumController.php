<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumView(){
        return view('sum-view');
    }
    public function sum(Request $request){
        $data =$request->all();
        $number_1 = $data['n_1'];
        $number_2 = $data['n_2'];
        $number_3 = $data['n_3'];
        // tinh kq pt
        //1: khai bao cac bien co the sd
        $x;
        $x1;
        $x2;
        //2: kiem tr a=0
        if ($number_1 == 0){
            $x = - $number_3/$number_2;
        }
        //3: neu a !=0
        else{
            //3.1: tinh delta
            $delta = $number_2*$number_2 - 4*$number_1*$number_3;
            //3.2:tinh delta
            if ($delta < 0){
                $x = 'Pt vo nghiem';
                return view('output', ['ketqua' => $x]);
            } else if($delta == 0){
                $x = -$number_2/(2*$number_1);
                return view('output', ['ketqua' => $x]);
            } else {
                $x1 = (-$number_2 + sqrp($delta))/(2*$number_1);
                $x2 = (-$number_2 - sqrp($delta))/(2*$number_1);
                return view('output', [
                    'ketqua_1' => $x1,
                    'ketqua_2' => $x2,
            ]);
            }
        }
        
    }
}
