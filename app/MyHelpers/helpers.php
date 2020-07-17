<?php

namespace App\MyHelpers;

class helpers
{
        public static function sort($figure,$order){
            $maxCount=count($figure);
            // $kekka=[];
            
        if($order=="昇"){
            for($i=0;$i<$maxCount;$i++){
            //forの中のforだから、iが0のとき
            //maxCount-0-1だから4
            //jが3になるまで、つまりj=0~j=3の4回繰り返し
              for($j=0;$j<$maxCount-$i-1;$j++){
                  //jは3までしか増えないが、配列は0スタートなので
                  //[3]で4番目の配列が出る
                  //ここでやってるのは右の数字との比較なので、最後の
                  //数字に関しては判断する必要はない
                  //(最後から1つ前の数字で入れ替えが行われてる)
                  if($figure[$j]>$figure[$j+1]){
                      //もしこの数字が右よりおおきかった場合
                      //空箱のaを用意、figure[j]を一時的に避難
                      $a=$figure[$j];
                      //figure[j]を右の数字で上書き
                      $figure[$j]=$figure[$j+1];
                      //右の数字を空箱aに入れておいたfigure[j]で
                      //上書き
                      $figure[$j+1]=$a;
                      //入れ替え完了
                  }
              }
            }
            for($i=0;$i<$maxCount;$i++){
                $kekka[$i]=$figure[$i];
            }
        }elseif($order=="降"){
            for($i=0;$i<$maxCount;$i++){
                for($j=0;$j<$maxCount-$i-1;$j++){
                    //ここの<>を逆にするだけ
                    if($figure[$j]<$figure[$j+1]){
                        $a=$figure[$j];
                        $figure[$j]=$figure[$j+1];
                        $figure[$j+1]=$a;
                        }
                    }
                }
            for($i=0;$i<$maxCount;$i++){
                    $kekka[$i]=$figure[$i];
            }
        }
    
        return $kekka;
        }
    }