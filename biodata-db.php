<?php require 'koneksi-db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <form action="biodata-db.php" method="POST">
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
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"];
        $nl = $_POST["nl"];
        $jk = $_POST["jk"];
        $tl = $_POST["tl"];
        $check = mysqli_query($conn,"SELECT nim FROM biodata WHERE nim LIKE '$nim'");
        if (!$check){
            $res = mysqli_query($conn,"INSERT INTO biodata(nim,nama_lengkap,jenis_kelamin,tanggal_lahir) VALUE('$nim','$nl','$jk','$tl')");
            if ($res){
                echo "Data berhasil diinput";
                header("Refresh:1; url=biodata-db.php");
            } else {
                echo "Data gagal diinput";
                header("Refresh:1; url=biodata-db.php");
            }
        } else {
            echo "Sudah ada NIM yg sama";
            header("Refresh:1; url=biodata-db.php");
        }
    }?>

</body>
</html>