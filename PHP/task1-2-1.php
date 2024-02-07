<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP演習</title>
</head>
<body>
<?php $money ='10%';?>
<?php $mone ='100円';?>
<?php $monee ='110円';?>
<?php $monn ='200円';?>
<?php $moom ='220円';?>
<?php define('TITLE','消費税') ?>


  
<?="現在、消費税は{$money}です";?><br>
<?="鉛筆が{$mone}で税込{$monee}です";?><br>
<?="消しゴムが{$monn}で税込{$moom}です";?>
</body>
</html>