<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"];
        $nl = $_POST["nl"];
        $jk = $_POST["jk"];
        $tl = $_POST["tl"];
        ?>
    <p>NIM : <?php echo $nim;?></p>
    <p>Nama Lengkap : <?php echo $nl;?></p>
    <p>Jenis Kelamin : <?php echo $jk == 'L' ? "Laki - Laki" : "Perempuan";?></p>
    <p>Tanggal Lahir : <?php echo $tl;?></p>
        <?php } else { ?>
    <form action="biodata.php" method="POST">
        <label for="nim">NIM:</label>
        <input type="text" name="nim"><br>
        <label for="nl">Nama Lengkap:</label>
        <input type="text" name="nl"><br>
        <label for="jk">Jenis Kelamin:</label>
        <!-- <input type="file"> <br> -->
        <input type="radio" name="jk" value="L">Laki-Laki
        <input type="radio" name="jk" value="P">Perempuan <br>
        <label for="tl">Tanggal Lahir:</label>
        <input type="date" name="tl"><br>
            <input type="submit">
    </form>
    <?php }?> 
</body>
</html>