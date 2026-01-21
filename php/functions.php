<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

    

    <?php
      //basic function
      function hello($name){
        echo "Hello $name <br>";
      }  
      hello("Gav");

      //cube a number
      function cube($number) {
        return $number * $number * $number;
      }

      $myNum = cube(5);
      echo "your number cubed = $myNum";

    ?>
    <br><br>
    <?php
      //basic if - else statements
      $isMale = false;
      // use and && or || or !(NOT))
      if ($isMale) {
        echo "You are male";
      } else {
        echo "you are female";
      }

      //elseif can be used also
    ?>

    <br><br>

    <?php
      //camparison with a function
      function getMax($num1, $num2, $num3) {
        if ($num1 > $num2 && $num1 > $num3) {
            echo "$num1 is greater than $num2 and $num3";
            return $num1;
        } elseif ($num1 == $num2 && $num1 == $num3) {
            echo "All numbers are the same value";
        } elseif (($num3 > $num2 && $num3 > $num2)) {
            echo "$num3 is greater than $num2 and $num1";
        } else {
            echo "$num2 is greater than $num1 and $num3";
            return $num2;
        }
      }
      //function call
      getMax(101,101, 101);
    ?>
  </body>
</html>