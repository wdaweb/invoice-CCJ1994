<?php
include_once "base.php";

if(isset($_GET['del'])){
  
  $pdo->exec("delete from invoices where id='{$_GET['id']}'");
  header("location:index.php?do=invoice_list");
}else{

  $inv=$pdo->query("select * from invoices where id='{$_GET['id']}'")->fetch();
  ?>
<div class="col-md-6 text-center border p-4 mx-auto">
  <div>確認要刪除以下資料嗎?
    <ul>
      <li class="list-group-item"><?=$inv['code'].$inv['number'];?></li>
      <li class="list-group-item"><?=$inv['date'];?></li>
      <li class="list-group-item"><?=$inv['payment'];?></li>
    </ul>
    <div>
      <a href="?do=del_invoice&del=1&id=<?=$_GET['id'];?>">
        <button class="btn-danger">確認</button>
      </a>
      <a href="?do=invoice_list">
        <button class="btn-warning">取消</button>
      </a>
    </div>
  </div>


</div>



  <?php

}



?>
