<?php
include_once "base.php";
$login_table=$pdo->query("select * from login where acc='{$_SESSION['login']}'")->fetch();

$mem_table=$pdo->query("select * from member where login_id='{$login_table['id']}'")->fetch();

?>
<div>

  <div class="accTitle">帳戶資訊</div>
  <div class="line3"></div>
  
    <div class="accpart">
      <div>姓名：<?=$mem_table['name'];?></div>
      <div>帳號：<?=$login_table['acc'];?></div>
      <div>密碼：<?=$login_table['pw'];?></div>
      <div>生日：<?=$mem_table['birthday'];?></div>
      <div>信箱：<?=$login_table['email'];?></div>
      <div>本期中獎金額</div>
      <div>累計發票張數</div>
      <div>累計消費金額</div>
    </div>
  
</div>