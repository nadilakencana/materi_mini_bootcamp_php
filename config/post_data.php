<?php 
include 'database.php';

//mengambil data yang di kirim dari form input 
$name = $_POST['name'];
$nik = $_POST['nik'];
$job = $_POST['job'];

// proses untuk malkukan insert data ke tabel yang akan kita input
$post =  mysqli_query($connection, "insert into data_karyawan (`name`, `nik`, `job`) VALUES  ('$name', '$nik', '$job')");
if($post){
   header("Location: ../index.php");
    exit();
}
?>