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
switch ($randomMonth) {
    case 1:
    case 2:
    case 12:
        echo "{$randomMonth}月は冬です。";
        break;
    case 3:
    case 4:
    case 5:
        echo "{$randomMonth}月は春です。";
        break;
    case 6:
    case 7:
    case 8:
        echo "{$randomMonth}月は夏です。";
        break;
    case 9:
    case 10:
    case 11:
        echo "{$randomMonth}月は秋です。";
        break;
    default:
        echo "無効な月が生成されました。";
}
?>
</body>
</html>