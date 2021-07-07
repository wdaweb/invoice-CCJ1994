<?php
include_once "base.php";

$inv=$pdo->query("select * from invoices where id='{$_GET['id']}'")->fetch();

?>
<div class="">
    <div class="editTitle">確認要刪除以下發票嗎?</div>
    <div class="line2"></div>
    <div class="delpart">
        <div>發票號碼:&emsp;<?=$inv['code'].$inv['number'];?></div>
        <div>發票日期:&emsp;<?=$inv['date'];?></div>
        <div>消費金額:&emsp;<?=$inv['payment'];?></div>
        <div>消費品項:&emsp;<?=$inv['item'];?></div>
        <div>品&emsp;&emsp;項:&emsp;<?=$inv['note'];?></div>
        <div>
          <a href="?do=invoice_list">
            <button class="canbtn">取消</button>
          </a>
          <a href="api/del.php?id=<?=$_GET['id'];?>">
          <button class="conbtn">確定刪除</button>
        </a>
      </div>


    </div>
</div>