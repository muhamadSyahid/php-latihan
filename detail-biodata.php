<?php require 'koneksi-db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
        </tr>
    <?php
    $nim = $_GET["nim"]; 
    $row = mysqli_query($conn, "SELECT * FROM biodata WHERE nim LIKE '$nim'") ;
    foreach ($row as $key){
    ?>
    <tr>
        <td><?php echo $key['nim']?></td>
        <td><?php echo $key['nama_lengkap']?></td>
        <td><?php echo $key['tanggal_lahir']?></td>
    </tr>
    <?php
    }
    ?>
    <td><a href="list-biodata.php">back</a></td>
</table>
</body>