<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $weeks = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
  ?>

     <ul>
      <li>
      <?php
      $weeks([0]);
      ?> 
      </li>
     </ul>
     <ul>
      <li>
      <?php
      $weeks([1]);
      ?> 
      </li>
     </ul>
     <ul>
      <li>
      <?php
      $weeks([2]);
      ?>
      </li>
     </ul>
     <ul>
      <li>
      <?php
      $weeks([3]);
      ?>
      </li>
     </ul>
     <ul>
      <li>
      <?php
      $weeks([4]);
      ?>
      </li>
     </ul>
     <ul>
      <li>
      <?php
      $weeks([5]);
      ?>
      </li>
     </ul>
        <ul>
          <li>
          <?php
      $weeks([6]);
      ?>
          </li>
        </ul>
       <ul>
        <li>
        <?php
      $weeks([7]);
      ?>
        </li>
       </ul>
       

   
 
  
</body>
</html>