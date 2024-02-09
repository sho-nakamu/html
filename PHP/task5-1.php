<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  for($a = 1; $a <=9; $a++) {
    for($i = 1; $i <= 9; $i++) {
      $ans = $a * $i;
      echo $a,'x',$i,'=',$ans.'/';
    }
    echo'<br>';
  }
  ?>
</body>
</html>