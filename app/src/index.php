<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    phpinfo();
    require_once 'db_connect.php';

    dbConnect();
  ?>
</body>
</html>