<?php
include_once "base.php";





$period_str=[
    1=>"1-2月",
    2=>"3-4月",
    3=>"5-6月",
    4=>"7-8月",
    5=>"9-10月",
    6=>"11-12月"
];

echo "<div class='allawdTitle'>本期為".$_GET['year']."年";
echo $period_str[$_GET['period']]."的發票</div>";
echo "<div class='line3'></div>";

// 撈出該期的所有發票

$sql="select * from invoices where left(date,4)='{$_GET['year']}' && period='{$_GET['period']}' order by date desc";
$invoices=$pdo->query($sql)->fetchALL();

echo "<div class='awnumpart'>";
echo "<div>發票記錄張數：".count($invoices)."張</div>";
// echo "<pre>";
// print_r($invoices);
// echo "</pre>";

// 撈出該期的開講獎號

$sql="select * from award_numbers where year='{$_GET['year']}' && period='{$_GET['period']}'";
$award_numbers=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);



$num=[];
$num1=[];
$num2=[];
$num3=[];
$num4=[];
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
                $bonus1=10000000;
                echo "<div>號碼：".$number;
                echo "中特別獎".$bonus1."元</div>";
                $all_res=1;
                $num[]=$number;
                $num1[]=$number;
                
            }
        break;
        case 2:
            if($award['number']==$number){
                $bonus2=2000000;
                echo "<div>號碼：".$number;
                echo "中特獎".$bonus2."元</div>";
                $all_res=1;
                    
                $sql="select `number` from `awards_record` where `user`='{$_SESSION['login']}'";
                $records=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
                
                $num[]=$number;
                $num2[]=$number;
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
                    $awardStr=['頭','二','三','四','五','六'];
                    $bonus3=[200000,40000,10000,4000,1000,200];

                    echo "<div>號碼：".$number;
                    echo "中{$awardStr[$res]}獎{$bonus3[$res]}元</div>";
                    $all_res=1;
                    $num[]=$number;
                    $num3[]=$number;
                }
        break;
        case 4:
            
            $bonus4=200;
                if($award['number']==mb_substr($number,5,3,'utf8')){
                    echo "<div>號碼：".$number;
                    echo "中增六獎".$bonus4."元</div>";
                    $all_res=1;
                    $num[]=$number;
                    $num4[]=$number;
                }
                
                
                
                
            break;
            }
    }
    }

    if(!empty($award_numbers)){
        if($all_res==-1){
            echo "<div>很可惜都沒中<div>";
        }
        }else{
          echo "<div>尚未開獎</div>";
        }
    
    
    echo "</div>";

    

//     print_r($num);
//     echo count($num1)."<br>";
// foreach($num1 as $n){
//     echo $n;
// }
// echo "<br>";
// foreach($num2 as $n){
//     echo $n;
// }
// echo "<br>";
// foreach($num3 as $n){
//     echo $n."<br>";
// }
    
    // echo count($num2)."<br>";
    // echo count($num3)."<br>";
    // echo count($num4)."<br>";
    
    // echo $num3[0]."<br>";
    // echo "<br>";
    // echo $num3[1]."<br>";
    // echo "<br>";
    // echo $num3[2]."<br>";
    // echo "<br>";
    // echo $num3[3]."<br>";
    // echo "<br>";
    // echo $num3[4]."<br>";
    // echo "<br>";
    // echo $num3[5]."<br>";
    // echo "<br>";
    // echo $num3[6]."<br>";
    // echo "<br>";
    

?>


