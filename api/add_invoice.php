<?php
//撰寫新增消費發票的程式碼
//將發票的號碼及相關資訊寫入資料庫

include_once "../base.php";
$_SESSION['err']=[];

echo "<pre>";
print_r(array_keys($_POST));
echo "</pre>";


accept('date','此欄位必填');
accept('code','此欄位必填');
length('number',7,9,"發票號碼為8碼");

//期別直接從日期欄位值取出
$_POST['period']=ceil(explode("-",$_POST['date'])[1]/2);

$_POST['user_acc']=$_SESSION['login'];

// $sql="insert into invoices (`".implode("`,`",array_keys($_POST))."`) 
//       values ('".implode("','",$_POST)."')";
// echo $sql;
// $pdo->exec($sql);
save('invoices',$_POST);

echo "新增完成";
if(empty($_SESSION['err'])){
  $pdo->exec($sql);
  // header("location:../index.php?do=invoice_list");
  to("../index.php?do=invoice_list");
}else{
  // header("location:../index.php");
  to("../index.php");
}



?>