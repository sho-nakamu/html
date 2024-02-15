<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="task.css">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $list = ["商品","鉛筆","消しゴム","定規"];;
  foreach ($list as $list){
    echo $list,"<br>";
  }

  $a = ["価格",100,200,300];;
  foreach ($a as $a){
    echo $a,"<br>";
  }

  ?>
</body>
</html>