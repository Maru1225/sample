<?php

// 課題１．引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($a){
    return $a*2;
}echo double(4);

echo"\n";


// 課題２.　$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
    return $a+$b;
}echo f(4,3);

echo"\n";


// 課題３.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function mul($arr){
    
    $total=1;
    foreach($arr as $a){
      $total *=$a;
              }return $total; 
}echo mul(array(1, 3, 5 ,7, 9) );

echo"\n";


// 課題４．【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
$max_number = $arr[0];
 foreach($arr as $a){
  if($a > $max_number){
       $max_number=$a;}
 }
 return $max_number;
 }echo max_array(array(1, 3, 5 ,7, 9));
 
 echo"\n";
 
 
 
// 課題　５．次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

/*
◎strip_tags
<用途>文字列からHTMLおよびPHPタグ(開始タグ～終了タグ）を取り除く
<使い方>string strip_tags (string $str [,string $tags ])※指定した文字列 (str) から全ての NULL バイトと HTML および PHP タグを取り除き
*/

$title ="<html><body><title>PHP勉強</title><p>勉強方法</p></body></html>";
echo strip_tags($title);
echo"\n";

echo strip_tags($title,'<body><a>');
echo"\n";
 
/*
◎array_push
<用途> 1つ以上の要素を配列の最後に追加したい場合に使用(追加したいのが１つであれば$ array[]=を使用したほうがよい。)
<使い方>int array_push($配列名,$値１[,値2 $...])
*/
$fruits=['apple','orenge','melon'];
array_push($fruits,'banana','pineapple');
print_r($fruits);



/*
◎array_merge
<用途>配列の要素の最後に一つまたは複数の配列を結合するときに使用（配列に配列を追加する方法）
<使い方>array　array_merge(最初の配列名,追加する配列1,追加する配列2,)；
*/
$array1=[1,2,3];
$array2=[10,20,30];
$array3=[100,200,300];
print_r(array_merge($array1,$array3,$array3));

$fruits1 =[0=>'peach',1=>'melon',2=>'apple'];
$fruits2 =[0=>'orenge',1=>'banana'];
$fruits_new= array_merge($fruits1,$fruits2);
print_r($fruits_new);

/*
◎time, mktime
<用途>UNIXタイムスタンプを取得することができる(timeは、現在のUNIXタイムスタンプを返す）（mktimeは、指定した日時のUNIXタイムスタンプを返す） 
※UNIXタイムスタンプとは、コンピューターのシステム時刻の一種で、協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間
<使い方> int time(void)
         int mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )
*/

$time_now= time();
echo '現在' .$time_now;

echo"\n";

 
$twodaytime=time()+(2*24*60*60);
echo '2日後'.$twodaytime;

echo"\n";

$time20190912= mktime(0,0,0,9,12,2019);
echo $time20190912;
echo"\n";
/*

◎date
<用途>UNIXタイムスタンプをフォーマットで日時として取得
<使い方＞string date (string $フォーマット[,int $タイムスタンプ=time()])
*/
echo date('Y/m/d',time());

echo"\n";

$time20190912= mktime(0,0,0,9,12,2019);
echo date('Y/m/d',$time20190912);
