<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

    <form action="site2.php" method="post">
      <p>
        Name: <input type="text" name="name">
      </p>

      <p>
        Age: <input type="number" name="age">
      </p>

      <p>
        Password: <input type="password" name="password">
      </p>

      <input type="submit" value="Submit">
    </form>

    <p>Your name is <?php echo $_GET["name"]; ?></p>
    <p>Your age is <?php echo $_GET["age"]; ?></p>
    <p>Your password is <?php echo $_POST["password"]; ?></p>

  </body>
</html>
