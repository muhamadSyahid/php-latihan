<?php
    echo "Hello World";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<form action="helloworld.php" method="POST">
    <input type="date" name="tanggal_lahir">
    <input type="submit">
</form>
<p><?php echo 'Kamu lahir tanggal: '. $_POST["tanggal_lahir"];?></p>
</body>
</html>

