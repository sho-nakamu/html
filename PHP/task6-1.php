<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
function showString($value, $num) {
    for ($i = 0; $i < $num; $i++) {
        echo $value;
    }
}

showString("気合いだ！", 3);
?>
</body>
</html>