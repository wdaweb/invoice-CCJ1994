<?php
include_once "base.php";

if(isset($_SESSION['login'])){
  $sql_user="select `member`.`role`,`login`.`acc` from `member`,`login` where `member`.`login_id`=`login`.`id` && `acc`='{$_SESSION['login']}'";
    $user=$pdo->query($sql_user)->fetch(PDO::FETCH_ASSOC);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/loginstyling.css">
</head>

<body>
    <section class="leftPart">
      <div class="user_area">
      <div class="usericon"></div>
      <h4 class="meg"> 
        <?php
      if(isset($_GET['meg'])){
        echo $_GET['meg'];
      }
      ?>
      </h4>
      <form action="api/check.php" method="post">
      <div class="loginarea">

        <div class="acc">
          <label for="acc">帳號</label>
          <input class="accipt" id="acc" type="text" name="acc" required>
        </div>
        <div class="pw">
          <label for="pw">密碼</label>
          <input class="pwipt" id="pw" type="password" name="pw" required>
        </div>
        <div class="forget" >
          <a href="forget_pw.php">忘記密碼?</a>
          <a href="register.php">註冊新帳號</a>
        </div>
        <input class="loginbtn" type="submit" value="登入"></div>
        
      </div>
      </form>
    </section>
    

</body>
</html>
<?php $_SESSION['err']=[];?>
