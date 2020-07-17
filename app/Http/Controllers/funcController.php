<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyHelpers\helpers;

class funcController extends Controller
{
    public function coffee(Request $request){
        //入力した数字
        $stringFigure=$request->input("stringFigure");
        $figure=explode(",",$stringFigure);
        //昇か降のどっちか
        $order=$request->input("order");
        //実行回数
        $kaisuu=$request->input("kaisuu");

        //ここから時間の計測
        $start=microtime(true);
        for($i=0;$i<$kaisuu;$i++){
        $kekka=Helpers::sort($figure,$order);
        }
        $end=microtime(true);
        $looptime=$end-$start;

        return view("func")->with([
            'kekka'=>$kekka,
            'kaisuu'=>$kaisuu,
            'looptime'=>$looptime,
        ]);
    }
}
