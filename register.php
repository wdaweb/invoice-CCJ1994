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
      <h2>註冊帳號</h2>
    <form action="api/add_user.php" method="post" class="">
        <ul class="">
            <li class="">帳號：<input type="text" name="acc"><?php errFeedBack('acc');?></li>
            <li class="">密碼：<input type="password" name="pw"><?php errFeedBack('pw');?></li>
            <li class="">姓名：<input type="text" name="name"><?php errFeedBack('name');?></li>
            <li class="">生日：<input type="date" name="birthday"><?php errFeedBack('birthday');?></li>
            <li class="">email：<input type="text" name="email"><?php errFeedBack('email');?></li>
        </ul>
        <input class="" type="submit" value="確認新增">
        <input class="" type="reset" value="重填">
    </form>

      </div>
    </section>
    

</body>
</html>
<?php $_SESSION['err']=[];?>