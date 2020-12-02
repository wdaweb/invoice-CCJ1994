<?php
include_once "base.php";

// // 亂數函式rand(x,y)
$codeBase=["AB","FF","GD","AE","EF","TR"];
$accBase=["Tim","Amy","Joy","Jenny","Alex","Admin"];
$itemBase=["飲料","交通","零食","午餐","衣服","鞋子"];
$noteBase=["","固定支出","心情好","就是想花錢","額外支出","不重要"];


echo "資料產生中....";
echo date("Y-m-d H:i:s");

for($i=0;$i<10000;$i++){
  $code=$codeBase[rand(0,5)];
  $acc=$accBase[rand(0,5)];
  $item=$itemBase[rand(0,5)];
  $note=$noteBase[rand(0,5)];
  $number=sprintf("%08d",rand(0,99999999));
  // $number=rand(0,99999999);
  // echo str_pad($number, 8, "0", STR_PAD_LEFT)."<br>";
  // echo $number."<br>";
  $payment=rand(1,20000);
  // echo $payment."<br>";
  

  $start=strtotime("2020-01-01");
  $end=strtotime("2020-12-31");
  
  $date=date("Y-m-d",rand($start,$end));
  // echo $date."<br>";
  $period=ceil(explode("-",$date)[1]/2);

  $hope=[
    'code'=>$code,
    'number'=>$number,
    'payment'=>$payment,
    'date'=>$date,
    'period'=>$period,
    'item'=>$item,
    'note'=>$note,
    'user_acc'=>$acc
  ];

  
  $sql="insert into invoices (`".implode("`,`",array_keys($hope))."`) 
      values ('".implode("','",$hope)."')";
  $pdo->exec($sql);

}
echo "<hr>";
echo "資料新增完成....";
echo date("Y-m-d H:i:s");





?>
