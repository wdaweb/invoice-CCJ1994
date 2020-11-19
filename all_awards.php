<?php
include_once "base.php";

$period_str=[
    1=>"1,2月",
    2=>"3,4月",
    3=>"5,6月",
    4=>"7,8月",
    5=>"9,10月",
    6=>"11,12月"
];

echo "你要對的發票是".$_GET['year']."年的";
echo $period_str[$_GET['period']]."的發票";

// 撈出該期的所有發票

$sql="select * from invoices where left(date,4)='{$_GET['year']}' && period='{$_GET['period']}' order by date desc";
$invoices=$pdo->query($sql)->fetchALL();

echo "<br>".count($invoices)."筆<br>";
// echo "<pre>";
// print_r($invoices);
// echo "</pre>";

// 撈出該期的開講獎號

$sql="select * from award_numbers where year='{$_GET['year']}' && period='{$_GET['period']}'";
$award_numbers=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

if(!empty($award_numbers)){
  // echo "<pre>";
  // print_r($award_numbers);
  // echo "</pre>";
}else{
  echo "尚未開獎";
}


// 開始對獎





?>


