<?php
include_once "base.php";

$inv=$pdo->query("select * from invoices where id='{$_GET['id']}'")->fetch();

?>
<div class="col-md-6 text-center border p-4 mx-auto">
    <div class="text-center">確認要刪除以下發票資料嗎?</div>
    <ul class="list-group">
        <li class="list-group-item"><?=$inv['code'].$inv['number'];?></li>
        <li class="list-group-item"><?=$inv['date'];?></li>
        <li class="list-group-item"><?=$inv['payment'];?></li>
    </ul>
    <div class="text-center mt-4">
        <a href="?do=invoice_list">
          <button class="btn btn-warning">取消</button>
        </a>
        <a href="api/del.php?id=<?=$_GET['id'];?>">
          <button class="btn btn-danger">確定刪除</button>
        </a>


    </div>
</div>