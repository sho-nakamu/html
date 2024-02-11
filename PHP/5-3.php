<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?
  $list =array ["商品","価格","税込価格"];
  $pen  =["鉛筆",100,110];
  $gomu =["消しゴム",200,220];
  $sasi =["定規",300,330];
  foreach ($arr as $data){
    print ($data);
    print("&lt;br>");
  }
  ?>
</body>
</html>