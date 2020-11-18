<?php
// 亂數函式rand(x,y)

$rand=[];


while(count($rand)<9){
  $t=str_pad(mt_rand(0, 99999999), 8, "0", STR_PAD_LEFT);
  if(count($rand)>=6){
    $t=str_pad(mt_rand(0, 999), 3, "0", STR_PAD_LEFT);
  }
  if(!in_array($t,$rand)){
    $rand[]=$t;
  }
}
echo "<pre>";
print_r($rand);
echo "</pre>";



?>
