<?php
include_once "../base.php";

// $sql="update 
//           invoices 
//       set 
//         `code`='{$_POST['code']}',
//         `number`='{$_POST['number']}',
//         `date`='{$_POST['date']}',
//         `payment`='{$_POST['payment']}'
//       where
//         `id`='{$_POST['id']}'";

$row=find('invoices',$_POST['id']);
$row['code']=$_POST['code'];
$row['number']=$_POST['number'];
$row['date']=$_POST['date'];
$row['payment']=$_POST['payment'];
$row['item']=$_POST['item'];
$row['note']=$_POST['note'];
save('invoices',$row);

// $pdo->exec($sql);

// header("location:../index.php?do=invoice_list");
to("../invoice.php?do=invoice_list");

?>