<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <?php
      $myData = array("john", "mark", "karen");
      $myData2 = array("john", "mark", "karen");
      echo $myData[0] = "Gav<br>";
      $myData[3] = "bill<br>";
      echo count($myData);
      
      echo $myData[3];
    ?>

  </body>
</html>