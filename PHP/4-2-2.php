<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$randomMonth = mt_rand(1, 12);

if ($randomMonth >= 3 && $randomMonth <= 5) {
    echo "{$randomMonth}月は春です。";
} elseif ($randomMonth >= 6 && $randomMonth <= 8) {
    echo "{$randomMonth}月は夏です。";
} elseif ($randomMonth >= 9 && $randomMonth <= 11) {
    echo "{$randomMonth}月は秋です。";
} else {
    echo "{$randomMonth}月は冬です。";
}
?>
</body>
</html>