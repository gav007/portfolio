
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

    <?php
      echo "<h1>Hello World</h1>";
      echo "<h2>This is Gav's first PHP site</h2>";
    ?>

    <?php
      $characterName = "John";
      $characterAge = 55;

      echo "There once was a man named $characterName <br>";
      echo "He was $characterAge years old <br>";
      echo "He really liked the name $characterName <br>";
      echo "But didn't like being $characterAge <br>";
    ?>

    <?php
      $phrase = "MySayin, Hello GPT!";
      $age = 98;
      $grade = 2.1;
      $alive = true;
      $head = null;

      echo "$phrase $age $grade $alive $head <br>";
    ?>

    <?php
      $text = "<h1>This Is It</h1>";
    
      echo strtolower($text) . "<br>";
      echo strtoupper($text) . "<br>";
      echo strlen($text) . "<br>";
      echo $text[3] . "<br>";
      echo "Gav"[1] . "<br>";
      echo str_replace("This", "PANDA", $text) . "<br>";
      echo substr($text, 8, 6) . "<br>";
    ?>

    <?php
      $PI = 3.14;
      echo -40 . "<br>";
      echo 5 + 4.5 . "<br>"; 
      echo 10 % 3 . "<br>";
      echo 7*7+6 . "<br>";
      echo $PI + 1 . "<br>";
      echo abs(-100) . "<br>"; 
      echo pow(2, 4) . "<br>";
      echo sqrt(64) . "<br>";
      echo max(2, 10) . "<br>";
      echo min(2, 10) . "<br>";
      echo round(2.78676, 2) . "<br>";
      echo ceil(4.8) . "<br>";
      echo floor(4.8) . "<br>";
      echo 5 / 2 . "<br>";
      echo intdiv(5, 2) . "<br>";
      echo "5" + 2 . "<br>";
      
      
    ?>
    


  </body>
</html>


