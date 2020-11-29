<?php
include_once "base.php";

if(isset($_GET['period'])){
  $period=$_GET['period'];
}else{
  $period=ceil(date("m")/2);
}


// $sql="select * from `invoices` where period='$period' order by date desc ";
// $rows=$pdo->query($sql)->fetchALL();

$rows=all('invoices',['period'=>$period],' order by date desc ');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/liststyling.css">
</head>

<body>
  <div class="container1">
    <section class="leftPart">
      <div class="user_area">

      </div>
    </section>
    <section class="middlePart">
      <div class="list_area">
        <div class="monthBar">
          <li><a href="?invoice_list&period=1"><div class="monthH">1-2月</div></a></li>
          <li><a href="?invoice_list&period=2"><div class="monthH">3-4月</div></a></li>
          <li><a href="?invoice_list&period=3"><div class="monthH">5-6月</div></a></li>
          <li><a href="?invoice_list&period=4"><div class="monthH">7-8月</div></a></li>
          <li><a href="?invoice_list&period=5"><div class="monthH">9-10月</div></a></li>
          <li><a href="?invoice_list&period=6"><div class="monthH">11-12月</div></a></li>
        </div>
        <table class="listT">
          <thead>
            <tr>
              <th>日期</th>
              <th>發票號碼</th>
              <th>金額</th>
              <th>品項</th>
              <th>備註</th>
              <th>修改</th>
            </tr>
          </thead>
          <tbody>
<?php
foreach($rows as $row){
?>
    <tr>
        <td><?=$row['date'];?></td>
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['payment'];?></td>
        <td><?=$row['item'];?></td>
        <td><?=$row['note'];?></td>
        <td>
            <a href="?do=edit_invoice&id=<?=$row['id'];?>">
                <img class="iconED" src="./img/edit-01.svg" alt="">
            </a>
            <a href="?do=del_invoice&id=<?=$row['id'];?>">
              <img class="iconED" src="./img/del-01.svg" alt="">
            </a>
        </td>
    </tr>
<?php
}
?>
          </tbody>
        </table>
      </div>
    </section>
    <section class="rightPart">
      <?php
        include "main.php";
      ?>
    </section>

</body>

</html>