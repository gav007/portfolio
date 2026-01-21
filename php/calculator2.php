<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculator two</title>
    </head>

    <body>
        <form action="calculator2.php" method="post">
            First Number: <input type="number" step="0.1" name="num1"><br>
            Operator: <input type="text" name="OP"><br>
            Second Number: <input type="number" step="0.1" name="num2"><br>
            <input type="submit">
        </form>


        <?php

            // variables

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $OP = $_POST["OP"];

            // functions 

            function add($num1, $num2) {
                return $num1 + $num2;
            }

            function sub($num1, $num2) {
                return $num1 - $num2;
            }

            function mul($num1, $num2) {
                return $num1 * $num2;
            }

            function div($num1, $num2) {
                if ($num2 == 0){
                    return "Cannot divide by zero";
                } else {
                    return $num1 / $num2;
                }
                
            }

            // if block

            if ($OP == "+") {
                echo add($num1, $num2);
            } 
            elseif ($OP == "-") {
                echo sub($num1, $num2);
            }
            elseif ($OP == "*") {
                echo mul($num1, $num2);
            }
            elseif ($OP == "/") {
                echo div($num1, $num2);
            } else {
                echo "Invalid Operator";
            }

        ?>
    </body>

    

</html>