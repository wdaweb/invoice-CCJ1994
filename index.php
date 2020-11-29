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
  <link rel="stylesheet" href="./css/indexstyling.css">
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
        
      </div>
    </section>

    <section class="rightPart">
      <?php
        include "main.php";
      ?>
    </section>

</body>
</html>
<?php $_SESSION['err']=[];?>