<?php
include_once "base.php";

// function find2($table,$def){
//   global $pdo;
//   $sql="select * from $table where $def";
//   $row=$pdo->query($sql)->fetch();

//   return $row;
// }

echo implode(" && ",['欄位1'=>'值1','欄位2'=>'值2','id'=>'9']);
echo "<br>";
echo "欄位1=>'值1' && 欄位2='值2' && id='9'";
echo "<br>";
$array=['欄位1'=>'值1','欄位2'=>'值2','id'=>'9'];
//利用一個暫時的陣列來存放語句的片段
foreach($array as $key => $value){
  $tmp[]=sprintf("`%s`='%s'",$key,$value);
  // $tmp[]="`".$key."`='".$value."'";
}
print_r($tmp);
echo "<br>";
echo implode(" && ",$tmp);

echo "<hr>";
// function find($table,$id){
//   global $pdo;

//   if(is_numeric($id)){

//     $sql="select * from $table where id='$id'";
//   }else{
//     $sql="select * from $table where $id";
//   }
//   $row=$pdo->query($sql)->fetch();

//   return $row;
// }

//取得單一資料的自訂函式
function find($table,$id){
  global $pdo;
  $sql="select * from $table where ";
  if(is_array($id)){
    foreach($id as $key => $value){
      $tmp[]=sprintf("`%s`='%s'",$key,$value);
      // $tmp[]="`".$key."`='".$value."'";
    }
    $sql=$sql.implode(" && ",$tmp);
  }else{
    $sql=$sql." id='$id' ";
  }
  $row=$pdo->query($sql)->fetch();

  return $row;
}

$row=find('invoices',11);
echo $row['code'].$row['number']."<br>";

$row=find('invoices',['code'=>'FF','number'=>'74339983']);
echo $row['code'].$row['number']."<br>";




?>