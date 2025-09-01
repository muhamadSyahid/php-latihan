<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mahasiswa';

$conn = mysqli_connect($host,$user,$pass,$db);

if ($conn){
    // echo 'Database Terhubung';
} else {
    echo 'Database Terputus';
}
?>