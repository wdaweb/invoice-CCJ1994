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
        <form action="api/add_user.php" method="post" class="">
        <div class="regpart">
          <div>註 冊 帳 號</div>
          <div class="fline"></div>
          <div>
            <label for="acc1">帳號 </label>
            <input class="info" id="acc1" type="text" name="acc">
            <span><?php errFeedBack('acc');?></span>
        </div>
          <div>
            <label for="pw1">密碼 </label>
            <input class="info" id="pw1" type="password" name="pw">
            <span><?php errFeedBack('pw');?></span>
          </div>         
          <div>
            <label for="name1">姓名 </label>
            <input class="info" id="name1" type="text" name="name">
            <span><?php errFeedBack('name');?></span>
          </div>
          <div>
            <label for="bir1">生日 </label>
            <input class="info" id="bir1" type="date" name="birthday">
            <span><?php errFeedBack('birthday');?></span>
          </div>
          <div>
            <label for="email1">信箱 </label>
            <input class="info" id="email1" type="text" name="email">
            <span><?php errFeedBack('email');?></span>
          </div>
          <div>
            <input class="add" type="submit" value="註冊">
            <input class="add" type="reset" value="重填">
          </div> 
        </div>   
    </form>

      </div>
    </section>
    

</body>
</html>
<?php $_SESSION['err']=[];?>