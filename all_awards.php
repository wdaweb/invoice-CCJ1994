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
$all_res=-1;
foreach($invoices as $inv){
  
  //對獎程式
  $number=$inv['number'];

// echo "<pre>";
// print_r($invoice);
// echo "<pre>";

// 找出獎號
// 1.確認期別->目前發票的日期作分析
// 2.得捯期別資料後->撈出該期的開獎號碼

$date=$inv['date'];
// explode('-',$date)取得日期資料，陣列的第二個元素就是月份
// 月份就可以推算期數，有了期數及年份就可以找到開獎的號碼
// $arry=explode('-',$date)
// $month=$arry[1]
// $period=ceil($month/2)
$year=explode('-',$date)[0];
$period=ceil(explode('-',$date)[1]/2);


foreach($award_numbers as $award){
    switch($award['type']){
        case 1:
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                echo "中了特別獎";
                $all_res=1;
            }
        break;
        case 2:
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                echo "中了特獎";
                $all_res=1;
            }
        break;
        case 3:
            $res=-1;
            for($i=5;$i>=0;$i--){
                $target=mb_substr($award['number'],$i,(8-$i),'utf8');
                $mynumber=mb_substr($number,$i,(8-$i),'utf8');

                if($target==$mynumber){
                    
                    $res=$i;
                }else{
                break;
                }
            }
            if($res!=-1){

                echo "<br>號碼=".$number."<br>";
                echo "中了{$awardStr[$res]}獎";
                $all_res=1;
            }
        break;
        case 4:
            if($award['number']==mb_substr($number,5,3,'utf8')){
                echo "<br>號碼=".$number."<br>";
                echo "中了增六獎";
                $all_res=1;
            }
        break;
    }
}
}
  if($all_res==-1){
    echo "很可惜都沒中";
  }





?>


