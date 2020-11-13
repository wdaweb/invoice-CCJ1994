<?php
include_once "base.php";
$sql="select * from `invoices` order by date desc";

$rows=$pdo->query($sql)->fetchALL();



?>
<table class="table text-center">
    <tr>
        <td>發票號碼</td>
        <td>消費日期</td>
        <td>消費金額</td>
        <td>操作</td>
    </tr>
    <?php
        foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
            <a href="?do=edit_invoice&id=<?=$row['id'];?>">
                <button class="btn btn-info">編輯</button>
            </a>
    
                <button class="btn btn-danger">刪除</button>
        </td>
    </tr>
    <?php
}

    ?>
</table>