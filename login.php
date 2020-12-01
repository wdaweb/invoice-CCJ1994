<?php
include_once "base.php";




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
      <h5 class="text-center py-3 border-bottom">會員登入</h5>
      <form action="api/check.php" class="mt-3 col-6 mx-auto" method="post">
        <p class="text-center">帳號：<input type="text" name="acc"></p>
        <p class="text-center">密碼：<input type="password" name="pw"></p>
        <p class="d-flex justify-content-around" style="font-size:0.87rem">
          <a href="forget_pw.php">忘記密碼?</a>
          <a href="register.php">註冊新帳號</a>
        </p>
        <p class="text-center"><input type="submit" value="登入"></p>
      </form>
      </div>
    </section>
    

</body>
</html>
<?php $_SESSION['err']=[];?>