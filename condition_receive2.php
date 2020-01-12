<?php

require_once('function3.php');
require_once('text.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
  <title>中医学的体質診断</title>
</head>
<body>
  <h1>結果</h1>
  <h3>
    <?php
    if(isset($_POST['condition'])){
      $condition = $_POST['condition'];
      echo 'あなたは、<span style="color:red;">' .html_escape($condition). '体質</span>かもしれません。';
    }
    ?>
  </h3>
  <p><?php echo condition_text();?></p>
  <h3>アドバイス</h3>
  <p><?php echo advice_text();?></p>
  <p><small><?php echo $references;?></small></p>
</body>
</html>
