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

        user
      </div>
    </section>
    <section class="middlePart">
      <div class="list_area">
        <div class="monthBar">
          <li><a href="?invoice_list&period=1">1-2月</a></li>
          <li><a href="?invoice_list&period=2">3-4月</a></li>
          <li><a href="?invoice_list&period=3">5-6月</a></li>
          <li><a href="?invoice_list&period=4">7-8月</a></li>
          <li><a href="?invoice_list&period=5">9-10月</a></li>
          <li><a href="?invoice_list&period=6">11-12月</a></li>
        </div>
        <table>
          <thead>
            <tr>
              <th>日期</th>
              <th>發票號碼</th>
              <th>金額</th>
              <th>品項</th>
              <th>修改</th>
            </tr>
          </thead>
          
          <tbody>
<?php
foreach($rows as $row){
?>
    <tr>
  <div class="tlist">
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
            <a href="?do=edit_invoice&id=<?=$row['id'];?>">
                <button class="btn btn-primary">修改</button>
            </a>
            <a href="?do=del_invoice&id=<?=$row['id'];?>">
                <button class="btn btn-danger">刪除</button>
            </a>
            <a href="?do=award&id=<?=$row['id'];?>">
                <button class="btn btn-success">對獎</button>
            </a>
        </td>
      </div>
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