<?php
include_once "base.php";


//取得單一資料的自訂函式
function find($table,$id){
    global $pdo;
    $sql="select * from $table where ";
    if(is_array($id)){
        foreach($id as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
            //$tmp[]="`".$key."`='".$value."'";
        }
        $sql=$sql.implode(' && ',$tmp);
    }else{
        $sql=$sql . " id='$id' ";
    }
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function all($table,...$arg){
  global $pdo;
  
  // echo gettype($arg);

  $sql="select * from $table";
if(isset($arg[0])){
  if(is_array($arg[0])){
    //製作會在where後面的句子字串(陣列格式)
    
    foreach($arg[0] as $key => $value){
      $tmp[]=sprintf("`%s`='%s'",$key,$value);
      // $tmp[]="`".$key."`='".$value."'";
    }
    $sql=$sql." where ".implode(" && ",$tmp);

    
  }else{

    //製作非陣列的語句接在$sql後面
      $sql=$sql.$arg[0];  
  }
}
  if(isset($arg[1])){
    //製作接在最後面的句子字串
    $sql=$sql.$arg[1];
  
  }
  // echo $sql."<br>";
  return $pdo->query($sql)->fetchAll();
}

// print_r(all('invoices'));
// echo "<hr>";
// print_r(all('invoices',['code'=>"GD",'period'=>6]));
// echo "<hr>";
// print_r(all('invoices',['code'=>"FF",'period'=>1])," order by date desc");
// echo "<hr>";
// print_r(all('invoices'," limit 5"));

function del($table,$id){
  global $pdo;
  $sql="delete from $table where ";
  if(is_array($id)){
    foreach($id as $key => $value){
      $tmp[]=sprintf("`%s`='%s'",$key,$value);
      // $tmp[]="`".$key."`='".$value."'";
    }
    $sql=$sql.implode(' && ',$tmp);
  }else{
    $sql=$sql . " id='$id' ";
  }
  $row=$pdo->exec($sql);
  return $row;
}

// $def=['code'=>'FF'];
// echo del('invoices',$def);

$row=find('invoices',22);
echo"<pre>";
print_r($row);
echo"</pre>";
// update invoices set `code`='AA',`payment`='1' where `id`='22';
$row['code']='AA';
$row['payment']=1;
update('invoices',$row);

function update($table,$array){
  global $pdo;
  $sql="update $table set";
  foreach($array as $key => $value){
    if($key!='id'){
      $tmp[]=sprintf("`%s`='%s'",$key,$value);
      // $tmp[]="`".$key."`='".$value."'";
    }
  }
  $sql=$sql.implode(",",$tmp)." where `id`='{$array['id']}'";
  echo $sql;
  $pdo->exec($sql);
  
}

function insert($table,$array){
  global $pdo;
  $sql="insert into $table(`" .implode("`,`",arry_keys($array)). "`) values('".impolde("','").$array."')";

  $pdo->exec($sql);
}

function save($table,$array){
  if(isset($array['id'])){
    //update
    update($table,$array);
  }else{
    //insert
    insert($table,$array);
  }
}


?>