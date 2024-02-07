<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP演習</title>
</head>
<body>
  <?php
  $a = array('商品','価格','税込み価格');
  $pen= array('鉛筆',100,110);
  $kesi= array('消しゴム',200,220);
  $mono= array('定規',300,330);
  ?>
  
   <table>
  <tr>
    <th><?= $a[0]?></th>
    <th><?=$a[1]?></th>
    <th><?=$a[2]?></th>
   </tr> 
   <tr>
    <td><?=$pen[0]?></td>
    <td><?=$pen[1]?></td>
    <td><?=$pen[2]?></td>
   </tr>
   <tr>
    <td><?=$kesi[0]?></td>
    <td><?=$kesi[1]?></td>
    <td><?=$kesi[2]?></td>
   </tr>
   <tr>
    <td><?=$mono[0]?></td>
    <td><?=$mono[1]?></td>
    <td><?=$mono[2]?></td>
   </tr>
 
  </table>
</body>
</html>