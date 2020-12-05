<?php
include_once "base.php";

$sql="select * from invoices where id='{$_GET['id']}'";
$inv=$pdo->query($sql)->fetch();

?>

<form action="api/update_invoice.php" method="post">
<div class="editTitle">編輯發票</div>
<div class="editpart">
<input type="hidden" name="id" value="<?=$inv['id'];?>">
    <div>發票號碼:
        <input type="text" name="code" value="<?=$inv['code'];?>">
        <input type="number" name="number" value='<?=$inv['number'];?>'></div>
    <div>消費金額:<input type="text" name='payment' value="<?=$inv['payment'];?>"></div>
    <div>消費日期:<input type="date" name='date' value="<?=$inv['date'];?>"></div>
    <div>購買品項:<input type="text" name='item' value="<?=$inv['item'];?>"></div>
    <div>備註:<input type="text" name='note' value="<?=$inv['note'];?>"></div>
    <div>
        <input type="submit" value="修改">
        <input type="reset" value="重置">
    </div>
    </div>
</form>