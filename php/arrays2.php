<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <form action="arrays2.php" method="post">
        <input type="text" name="student">
        <input type="submit">

    </form>
    

    <?php
      $grades = array("jimmy"=>"A+", "john"=>"B-", "george"=>"C");
      echo "Students Grade: " . $grades[$_POST["student"]];
    ?>

  </body>
</html>