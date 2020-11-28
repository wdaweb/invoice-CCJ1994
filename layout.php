<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styling.css">
</head>
<body>
<?php 
            $month=[
                1=>"1,2月",
                2=>"3,4月",
                3=>"5,6月",
                4=>"7,8月",
                5=>"9,10月",
                6=>"11,12月",
            ];
            $m=ceil(date('m')/2);

            ?>
  <div class="container1 ">
    <div class="leftPart">
    <form action="api/add_invoice.php" method="post">
        <div class="date">
          <div class="date1">
            期&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;別
            <select class="dateP hvr" name="period" id="">
              <option value="1">1-2月</option>
              <option value="2">3-4月</option>
              <option value="3">5-6月</option>
              <option value="4">7-8月</option>
              <option value="5">9-10月</option>
              <option value="6">11-12月</option>
            </select>
          </div>
          <div class="date2">
            日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期
            <input class="dateD hvr" type="date">
          </div>
        </div>
        <div class="num"><span>發票號碼</span>
          <input class="num1 hvr" type="text">
          <input class="num2" type="number">
        </div>
        <div class="pay">消費金額
          <input class="pay1 hvr" type="number">
        </div>
        <div class="item">
          品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;項
          <input class="item1 hvr" type="text">
          
        </div>
        <div class="note">
          備&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;註
          <input class="note1 hvr" type="text">
        </div>
        <div >
          <input class="btnSave" type="submit" value="儲存">
        </div>
</form>
    </div> 
    <div class="rightPart">
      <a href="index.php">
        <div class="btn1">

        </div>
      </a>
      <a href="?do=invoice_list">
          <div class="btn2">
          </div>
      </a>
      <a href="?do=add_awards">
        <div class="btn3">
          
        </div>
      </a>
      <a href="?do=award_numbers">
        <div class="btn4">
          
        </div>
      </a>
    </div>
  </div>
  </body>
</html>