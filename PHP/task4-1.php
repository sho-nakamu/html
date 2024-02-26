<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php $probability = mt_rand( 1, 100 );?>
<?php if ($probability <= 5):?>
<p>今日の運勢は"大凶"です</p>
<?php elseif ($probability <= 20):?>
<p>今日の運勢は"凶"です</p>
<?php elseif ($probability  <= 50):?>
<p>今日の運勢は"吉"です</p>
<?php elseif ($probability  <= 80):?>
<p>今日の運勢は"中吉"です</p>
<?php else:?>
<p>今日の運勢は"大吉"です</p>
<?php endif;?>
<?=$probability?>

</body>
</html>