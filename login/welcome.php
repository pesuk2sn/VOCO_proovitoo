<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tervitus</title>
    <link rel="stylesheet" href="styles.css">
</head>
  <body>
    <div class="login-container">
        <h1>Tere, <?php echo $_SESSION['username']; ?>!</h1>
</div>
</body>
</html>