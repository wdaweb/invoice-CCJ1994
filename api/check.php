<?php
/******登入檢查******
 * 1. 連線資料庫
 * 2. 取得表單傳遞的帳密資料
 * 3. 比對會員資料表中是否有相符的資料
 * 4. 取得會員資料
 * 5. 檢查會員身份及權限
 * 6. 依據會員身份導向不同的頁面
 */

$dsn="mysql:host=localhost;dbname=invoiceHW;charset=utf8";
$pdo=new PDO($dsn,'root','');
$acc=$_POST['acc'];
$pw=$_POST['pw'];

$sql="select * from `login` where `acc`='$acc' && `pw`='$pw'";

$check=$pdo->query($sql)->fetch();

if(!empty($check)){
  echo "登入成功";

  $member_sql="select * from member where login_id='{$check['id']}'";
  $member=$pdo->query($member_sql)->fetch();
  $role=$member['role'];

  


    switch($role){
      case "會員" :
        header('location:../index.php');
      break;
      case "管理員" :
        header('location:../admin.php');
      break;
    }
}else{
  header("location:../login.php?meg=帳密不正確，請重新登入或註冊會員");
}





?>
