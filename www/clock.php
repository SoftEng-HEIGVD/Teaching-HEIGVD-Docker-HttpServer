<!DOCTYPE html>
<html>

<head>
  <title>Clock @ HEIG-VD</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <h1>Tic Toc</h1>
  <p>This is an example of dynamic HTML content:</p>
  <p class="clock">
    <?php
      echo "It is now: " . date("H:i:s") . "(". date_default_timezone_get() . ")";
    ?>
  </p>
  <p>Go back to <a href="./index.html">RES home page</a>.</p>
</body>

</html>