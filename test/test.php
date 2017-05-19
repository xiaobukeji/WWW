<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>表单输出</title>
  </head>
  <body>
    <form action="test.php" method="post">
    名字：<input type="text" name="fname" />
    年龄：<input type="text" name="age" />
    <input type="submit" />
    </form>
  </body>
</html>
<?php

echo "welcome ".$_POST["fname"]."!<br>";
echo "you ".$_POST["age"]."years old.";

?>
