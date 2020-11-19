
<?php
include_once "base.php";
if(isset($_GET['period'])){
    $period=$_GET['period'];
}else{
    $period=ceil(date("m")/2);
}

$sql="select * from `invoices` where period='$period' order by date desc ";
$rows=$pdo->query($sql)->fetchALL();

?>
<div class="row" style="list-style-type:none;">
    <li class="px-4"><a href="?do=invoice_list&period=1">1-2月</a></li>
    <li class="px-4"><a href="?do=invoice_list&period=2">3-4月</a></li>
    <li class="px-4"><a href="?do=invoice_list&period=3">5-6月</a></li>
    <li class="px-4"><a href="?do=invoice_list&period=4">7-8月</a></li>
    <li class="px-4"><a href="?do=invoice_list&period=5">9-10月</a></li>
    <li class="px-4"><a href="?do=invoice_list&period=6">11-12月</a></li>
</div>
<table class="table text-center">
<thead>
    <tr>
    <th>發票號碼</th>
    <th>消費日期</th>
    <th>消費金額</th>
    <th>操作</th>
    </tr>
</thead>
<?php
foreach($rows as $row){
?>
<tbody>
    <tr>
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
            <a href="?do=edit_invoice&id=<?=$row['id'];?>">
                <button class="btn btn-primary">修改</button>
            </a>
            <a href="?do=del_invoice&id=<?=$row['id'];?>">
                <button class="btn btn-danger">刪除</button>
            </a>
            <a href="?do=award&id=<?=$row['id'];?>">
                <button class="btn btn-success">對獎</button>
            </a>
        </td>
    </tr>
</tbody>

<?php
}
?>
</table>
