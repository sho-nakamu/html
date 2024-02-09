<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $a =mt_rand('春','夏','秋','冬');
  ?>
  <?
  if ($a ===1, 12) {
    $judeg ="$a 月はの季節です";
  } elseif($a >= 12){
    $judeg ="$a 月はの季節です"; 
  }elseif($a >= 5){
   $judeg ="$a 月はの季節です";
} else{
  $judeg =$a ."月はの季節です";
}
?>
</body>
</html>