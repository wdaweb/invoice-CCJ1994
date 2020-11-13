<?php
include_once "base.php";
$sql="select * from `invoices`";

$rows=$pdo->query($sql)->fetchALL();

foreach($rows as $row){
    echo $row['code'].$row['number']."<br>";
}
?>