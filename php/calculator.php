<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <form action="calculator.php" method="get">

        <h1>
            Enter two numbers to add them together
        </h1>

        <hr>
        
        <p>
        First Number: <input type="number" name="num1">
        </p>

        <p>
        Operation:
        <select name="op">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        </p>


        <p>
        Second Number: <input type="number" name="num2">
        </p>
        <input type="submit">

    </form>

    <p>
    <?php
			$result = 0;

			if ($_GET["op"] == "add") {
					$result = $_GET["num1"] + $_GET["num2"];
			} elseif ($_GET["op"] == "sub") {
					$result = $_GET["num1"] - $_GET["num2"];
			} elseif ($_GET["op"] == "mul") {
					$result = $_GET["num1"] * $_GET["num2"];
			} elseif ($_GET["op"] == "div") {
					if ($_GET["num2"] == 0) {
					echo "Cannot Divide By Zero";
					return;
					} else {
					$result = $_GET["num1"] / $_GET["num2"];
					}
			}
			echo $result;
?>

    </p>
  </body>
</html>
