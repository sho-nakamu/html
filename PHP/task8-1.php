<?php
  session_start();
  $_SESSION["date"]="TEST中";
  echo "セッションID:" . session_id() ."<br>";
  echo "状況: {$_SESSION["date"]}<br><br>";
?>
<a href="contact/index.html">お問合せページ</a>