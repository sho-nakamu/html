<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $a =mt_rand('大凶','凶','吉','中吉','大吉');
  if ($a === 5) {
    $judeg ="$a 今日の運勢はです";
  } elseif($a >= "中吉"){
    $judeg ="$a 今日の運勢はです"; 
  }elseif($a >= "吉"){
   $judeg ="$a 今日の運勢はです";
} else{
  $judeg =$a ."今日の運勢はです";
}
?>
</body>
</html>