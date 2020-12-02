<?php
include_once "../base.php";
$_SESSION['err']=[];
accept('acc','此欄位必填');
accept('name','此欄位必填');
accept('birthday','此欄位必填');
accept('email','此欄位必填');
length('pw',3,9,"密碼需要在4~8碼之間");

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];

$insert_to_login="insert into `login`(`acc`,`pw`,`email`) values('$acc','$pw','$email')";
echo $insert_to_login ;

$pdo->exec($insert_to_login);
$select_login_user="select * from `login` where `acc`='$acc' && `pw`='$pw'";
$login_user=$pdo->query($select_login_user)->fetch();
$login_id=$login_user['id'];
echo "<br>註冊使用者ID";
echo $login_id;

$insert_to_member="insert into `member`(`name`,`birthday`,`role`,`login_id`) values('$name','$birthday','會員','$login_id')";

$result=$pdo->exec($insert_to_member);
echo $result;
print_r($result);
if($result && empty($_SESSION['err'])){
  header("location:../index.php?meg=新增成功");
}else{
  header("location:../register.php?meg=新增失敗");
}

?>
