<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

    <form action="madlibs.php" method="get">
			<p>
			color: <input type="text" name="color">
			</p>

			<p>
			plural: <input type="text" name="plural">
			</p>

			<p>
			celebrity: <input type="text" name="celebrity">
			</p>

			<input type="submit">
    </form>
		<br><br>

		<?php

			$color = $_GET["color"];
			$plural = $_GET["plural"];
			$celebrity = $_GET["celebrity"];

			echo "Roses are $color<br>";
			echo "$plural are blue<br>";
			echo "I love $celebrity<br>";
		?>
      


  </body>
</html>
