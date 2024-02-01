<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php
$message ="今日の日付:".date('Y/m/d');
define('TITLE','定数とは');

$a = array('田中','100','OK');
$b = TITLE ['中田','55','NG'];
?>

  <h1>  Hello PHP  world</h1>

  <p><?= echo $message ?></p>
  <p><?= TITLE; ?></p>
  <p>
    <?php print_r($a);?><br> 
  </p>

</body>
</html>