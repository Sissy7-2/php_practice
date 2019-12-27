<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($max) {
    $result = $max*2;
    //for($i = 1; $i <= $max*2; ){
        return $result;
    }
//}
echo sum(100);

echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b) {
  $result = $a + $b;
  return $result;
}
echo f(29, 7);

echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function k($arr) {
    $result = 1;
    foreach($arr as $ar) {
    $result*= $ar;
}

return $result;
}

//$arr = array(1, 3, 5, 7, 9);
echo k(array(1, 3, 5, 7, 9));

echo "\n";

//4.【応用】次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a){
        //$result = $a;
     if ($max_number < $a) {
         $max_number = $a;
     }
}
return $max_number;
}
echo max_array([4, 67, 123, 6, 43]);

echo "\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//・strip_tags
$str = "<li>2017/04/01 春メニュー提供開始しました。</li>"
       . "<p>渋谷駅より徒歩7分</p>";

echo strip_tags($str);

echo "\n";

//・array_push
$fruits = array("mulberry" , "orange", "pineapple");
array_push($fruits, "mango", "watermelon", "grape");
print_r($fruits);

echo "\n";

//・array_merge
$fruits1 =['pineapple', 'orange', 'mango', 'banana', 'melon', 'peach'];
$fruits2 =['watermelon', 'strawberry', 'lemon'];
$fruits3 =['cherry', 'mulberry', 'lime', 'apple', 'tangerine'];
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
print_r($fruits_merge);


//・time, mktime
$timestamp = time() ;
echo $timestamp ;
echo "\n";
echo date("Y/m/d" , $timestamp) ;
echo "\n";

//2019年12月20日 4時39分28秒のタイムスタンプ
echo mktime(4, 39, 28, 12, 20, 2019);
echo "\n";
echo date('y/m/d H:i:s', mktime(4, 39, 28, 12 ,20, 2019));

echo "\n";

//・date
$date1 = date('Y/m/d/');
$w = date('w');
$week = ['日', '月', '火', '水', '木', '金', '土'];
$date2 = date('Y/m/d/') .$week[$w];
echo $date2;








