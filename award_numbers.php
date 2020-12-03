<?php
include_once "base.php";

if(empty($_GET['pd'])){
?>
  <h1>沒有任何獎號紀錄，請先<a href="?do=add_awards">輸入獎號</a></h1>

<?php
}else{


if(isset($_GET['pd'])){
    $year=explode("-",$_GET['pd'])[0];
    $period=explode("-",$_GET['pd'])[1];
}else{
  $get_news=$pdo->query("select * 
                          from `award_numbers`
                          order by `year` desc,
                                  `period` desc
                          limit 1")->fetch();
  $year=$get_news['year'];
  $period=$get_news['period'];                                 
}

$awards=$pdo->query("select * from award_numbers where year='$year' && period='$period'")->fetchAll();
$special="";
$grand="";
$first=[];
$six=[];



foreach($awards as $aw){
  switch($aw['type']){
      case 1:
          $special=$aw['number'];
      break;
      case 2:
          $grand=$aw['number'];
      break;
      case 3:
          $first[]=$aw['number'];
      break;
      case 4:
          $six[]=$aw['number'];
      break;
  }
}

?>
<div class="monthBar">
  <li><a href="?do=award_numbers&pd=<?=$year;?>-1"><div class="monthH">1-2月</div></a></li>
  <li><a href="?do=award_numbers&pd=<?=$year;?>-2"><div class="monthH">3-4月</div></a></li>
  <li><a href="?do=award_numbers&pd=<?=$year;?>-3"><div class="monthH">5-6月</div></a></li>
  <li><a href="?do=award_numbers&pd=<?=$year;?>-4"><div class="monthH">7-8月</div></a></li>
  <li><a href="?do=award_numbers&pd=<?=$year;?>-5"><div class="monthH">9-10月</div></a></li>
  <li><a href="?do=award_numbers&pd=<?=$year;?>-6"><div class="monthH">11-12月</div></a></li>
</div>
  <h3 class="newAwardTitle">
    <?=$year;?>年
        <?php
            $month=[
                1=>"01 ~ 02",
                2=>"03 ~ 04",
                3=>"05 ~ 06",
                4=>"07 ~ 08",
                5=>"09 ~ 10",
                6=>"11 ~ 12"
            ];
            echo $month[$period];
        ?>月
  </h3>
<div class="line"></div>
<table class="awardnumT">
  <tr>
    <td>特別獎</td>
    <td class="awardNum"><?=$special;?></td>
    <td>$10,000,000</td>
  </tr>
  <tr>
    <td>特&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td class="awardNum"><?=$grand;?></td>
    <td>$2,000,000</td>
  </tr>
  <tr>
    <td>頭&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td class="awardNum">
    <?php
            foreach($first as $f){
                echo $f."&nbsp;&nbsp;";
            }

        ?>
    </td>
    <td>$200,000</td>
  </tr>
  <tr>
    <td>增六獎</td>
    <td class="awardNum">
      <?php
            foreach($six as $s){
              echo $s."&nbsp;&nbsp;";
            }
            ?>
    </td>
    <td>$200</td>
  </tr>
  <tr>
    <td>二&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末7位數號碼與頭獎中獎號碼末7位相同</small></td>
    <td>$40,000</td>
  </tr>
  <tr>
    <td>三&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末6位數號碼與頭獎中獎號碼末6位相同</small></td>
    <td>$10,000</td>
  </tr>
  <tr>
    <td>四&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末5位數號碼與頭獎中獎號碼末5位相同</small></td>
    <td>$4,000</td>
  </tr>
  <tr>
    <td>五&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末4位數號碼與頭獎中獎號碼末4位相同</small></td>
    <td>$1,000</td>
  </tr>
  <tr>
    <td>六&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末3位數號碼與頭獎中獎號碼末3位相同</small></td>
    <td>$200</td>
  </tr>
  
</table>

<a href="?do=all_awards&year=<?=$year;?>&period=<?=$period;?>">
  <button class="awardbtn"></button>
</a>
<?php
}
?>