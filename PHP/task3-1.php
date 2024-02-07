<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $moku= array('商品','価格','税込価格','1Dzの価格');
  $pen=  array('鉛筆');
  $gomu= array('消しゴム');
  $num1= 100;
  $num2=110;
  $num=12;
  $num3=200;
  $num4=220;
  ?>
  <table>
    <tr>
      <th><?=$moku[0]?></th>
      <th><?=$moku[1]?></th>
      <th><?=$moku[2]?></th>
      <th><?=$moku[3]?></th>
    </tr>
    <tr>
    <td><?=$pen[0]?></td>
    <td><?=$num1?></td>
    <td><?=$num2?></td>
    <td><?=$num2*$num?></td>
    </tr>
    <tr>
      <td><?=$gomu[0]?></td>
      <td><?=$num3?></td>
      <td><?=$num4?></td>
      <td><?=$num4*$num?></td>
    </tr>

  </table>
</body>
</html>