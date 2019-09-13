<?php
echo 'hello php!';
?>

<?php
 $a=3; $b=7;
 echo $a+$b;

 

 $array_month=[
     "1月","2月","3月", "4月","5月","6月","7月","8月","9月","10月", "11月","12月"
 ];
 echo $array_month[7];

 

  $hello = "Hello,";
  $name = "Mayumi";
  $world = "'s World!";
  echo $hello . $name . $world;
 
  

  $tech_boost = "tech";
   $tech_boost .= ' boost';
   echo $tech_boost;

   

   $calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
   ];
   echo $calendar_2018 ["December"];
   echo "\n";
  
   //PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろうの課題は以下からです
   
  //1
   $name = "mayumi";
   if ($name=="mami"){
    echo "私はあなたの名前です";
   }else{ 
     echo "あなたの名前ではありません";
   
   }
   echo "\n";
   
  //2
   $total = 0;
   for($i = 1; $i <=10000; $i++){
   $total += $i;
   }
   echo $total;
   echo "\n";
  
   
  //3
  
  $fruits =array("apple","orange","lemon","grapes","peach");
  foreach($fruits as $fruit){
   echo $fruit;
   echo "\n";
   
  }
  
  //4
  $start = 1;
  $end = 100;
  for($i = $start; $i <= $end; $i++){
   if($i % 5==0){
    echo $i;
    echo "\n";
   }
  }
  
 