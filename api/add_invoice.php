<?php
//撰寫新增消費發票的程式碼
//將發票的號碼及相關資訊寫入資料庫


include_once "../base.php";

// foreach($_POST as $key => $value){
//   // echo "欄位".$key."==值".$value."<br>";
//   $tmp[]=$key;
// }
// foreach($_POST as $key => $value){
//   // echo "欄位".$key."==值".$value."<br>";
//   $tmp2[]=$value;
// }
echo "<pre>";
print_r(array_keys($_POST));
echo "</pre>";

// echo "<br>";
// echo "insert into invoice (`".implode("`,`",array_keys($_POST))."`)";
// echo "values(`".implode("`,`",$_POST)."`)";

//最原始寫法 $sql="insert into invoice () values('{$_POST['code']}'),'{}','{}'";
$sql="insert into invoices (`".implode("`,`",array_keys($_POST))."`) values('".implode("','",$_POST)."')";
echo $sql;
$pdo->exec($sql);

echo "新增完成";
header("location:../index.php");
?>