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
      <h2>註冊會員</h2>
    <form action="api/add_user.php" method="post" class="">
        <ul class="list-group">
            <li class="list-group-item">帳號：<input type="text" name="acc"></li>
            <li class="list-group-item">密碼：<input type="password" name="pw"></li>
            <li class="list-group-item">姓名：<input type="text" name="name"></li>
            <li class="list-group-item">生日：<input type="date" name="birthday"></li>
            <li class="list-group-item">email：<input type="text" name="email"></li>
        </ul>
        <input class="btn btn-primary my-3" type="submit" value="確認新增">
        <input class="btn btn-light my-3" type="reset" value="重填">
    </form>

      </div>
    </section>
    

</body>
</html>
<?php $_SESSION['err']=[];?>