<?php
include_once "base.php";

if(isset($_GET['period'])){
  $period=$_GET['period'];
}else{
  $period=ceil(date("m")/2);
}

if(isset($_SESSION['login'])){
  $sql_user="select `member`.`role`,`login`.`acc` from `member`,`login` where `member`.`login_id`=`login`.`id` && `acc`='{$_SESSION['login']}'";
  $user=$pdo->query($sql_user)->fetch(PDO::FETCH_ASSOC);
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
  <title>登錄發票</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/invoiceStyling.css">
</head>

<body>
  <div class="container1">
    <section class="leftPart">
      <div class="user_area">

      </div>
    </section>
    <section class="middlePart">
      <div class="list_area">
        <?php
        if(isset($_GET['do'])){
          $file=$_GET['do'].".php";
          include $file;
        }else{
          include ("invoice_list.php");
        }

        ?>
      </div>
    </section>

    <section class="rightPart">
      <div class="enter_area">
        <div class="btnPart">
          <a href="invoice.php"><div class="btn1"></div></a>
          <a href="?do=add_awards"><div class="btn2"></div></a>
          <a href="?do=award_numbers"><div class="btn3"></div></a>
          <a href="?do=account"><div class="btn4"></div></a>
        </div>
        <div class="enterPart">
          <form action="api/add_invoice.php" method="post">
          <input type="hidden" name="user_acc" value="<?=$_SESSION['login'];?>">
            <div class="date">
              <label for="date">日期</label>
              <input class="dateD hvr" id="date" name="date" type="date">
              <?php errFeedBack('date');?>
            </div>
            <div class="num">
              <div class="numCode">
                <label for="numC">發票字軌英文</label> 
                <input class="num1 hvr" id="numC" name="code" type="text" size="2">
                <?php errFeedBack('code');?>
              </div>
              <div class="numNum">
                <label for="numN">號碼</label> 
                <input class="num2 hvr" id="numN" name="number" type="number"> 
                <?php errFeedBack('number');?>
              </div>
            </div>
            <div class="pay">
              <label for="pay">金額</label>
              <input class="pay1 hvr" id="pay" name="payment" type="number" min="0">
            </div>
            <div class="item">
              <label for="item">品項</label>
              <input class="item1 hvr" id="item" name="item" type="text">
            </div>
            <div class="note">
              <label for="note">備註</label>
              <textarea class="note1 hvr" name="note" id="note"></textarea>
            </div>
            <div>
              <input class="btnSave" type="submit" value="">
            </div>
          </form>
        </div>
      </div>
    </section>

</body>
</html>
<?php $_SESSION['err']=[];?>