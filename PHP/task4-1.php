<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$fortunes = array(
  '大吉',   // 20% の確率
  '中吉',   // 30% の確率
  '吉',   // 30% の確率
  '大凶',   // 5% の確率
  '凶'      // 15% の確率
);
$randomIndex = mt_rand(0, count($fortunes) - 1);
$selectedFortune = $fortunes[$randomIndex];
echo 'あなたの今日の運命は: ' . $selectedFortune;
?>
</body>
</html>