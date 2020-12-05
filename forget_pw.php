<?php
include_once "base.php";

if(isset($_POST['email'])){
  
  $sql="select * from login where email='{$_POST['email']}'";
  // echo $sql;
  $chk=$pdo->query($sql)->fetch();
  // echo "<pre>";
  // print_r($chk);
  // echo "</pre>";
  if(!empty($chk)){
      $res=$chk['pw'];
  }else{
      $res="查無此人";
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>忘記密碼</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/loginstyling.css">
</head>

<body>
    <section class="leftPart">
      <form action="?" method="post">
        <div class="findpw">
          <div ><label for="fpw">查 詢 密 碼</label></div>
          <div class="fline"></div>
        <div class="findipt">
          <input class="spw" id="fpw" type="text" name="email" placeholder="請輸入信箱" require>
        <input class="findbtn" type="submit" value="">
      </div>
        <div class="hint">
        
      <?php
      if(isset($res)){
  
          echo "密碼：".$res;
          echo "<br><a href='index.php'>立即登入</a>";
      }
      ?>
      
      </div>
      </div>
      </form>
    </section>
    

</body>
</html>