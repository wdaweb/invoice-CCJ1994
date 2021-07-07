<?php
include_once "base.php";
$login_table=$pdo->query("select * from login where acc='{$_SESSION['login']}'")->fetch();

$mem_table=$pdo->query("select * from member where login_id='{$login_table['id']}'")->fetch();

$invoice_amount=$pdo->query("select count(*) from invoices where user_acc='{$_SESSION['login']}'")->fetch();
$invoice_payment=$pdo->query("select sum(payment) from invoices where user_acc='{$_SESSION['login']}'")->fetch();

?>
<div>

  <div class="accTitle">帳戶資訊</div>
  <div class="line3"></div>
  
    <div class="accpart">
      <div class="detail">姓名：<?=$mem_table['name'];?></div>
      <div class="detail">帳號：<?=$login_table['acc'];?></div>
      <div class="detail">密碼：<?=$login_table['pw'];?></div>
      <div class="detail">生日：<?=$mem_table['birthday'];?></div>
      <div class="detail">信箱：<?=$login_table['email'];?></div>
      <div class="detail">累計發票張數：<?php echo $invoice_amount[0];?>張</div>
      <div class="detail">累計消費金額：<?php echo $invoice_payment[0];?>元</div>
    </div>
  
</div>