<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="tesk.css">
  <title>PHP演習</title>
</head>
<body>

<?php 
  define('TAX','10%');
  $mone ='100円';
  $monee ='110円';
  $monn ='200円';
  $moom ='220円';
?>

  
<?="現在、消費税は10%です";?><br>
<?="鉛筆が{$mone}で税込{$monee}です";?><br>
<?="消しゴムが{$monn}で税込{$moom}です";?>
</body>
</html>