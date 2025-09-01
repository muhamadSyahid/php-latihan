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
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    <?php $row = mysqli_query($conn, "SELECT * FROM biodata") ;
    $i = 1;
    foreach ($row as $key){
    ?>
    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $key['nim']?></td>
        <td><?php echo $key['nama_lengkap']?></td>
        <td><a href="<?php echo 'detail-biodata.php?nim='.$key['nim']; ?>">Detail</a></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>