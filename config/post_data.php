<?php 
include 'database.php';

//mengambil data yang di kirim dari form input 
$name = $_POST['name'];
$nik = $_POST['nik'];
$id_position = $_POST['id_position'];

// proses untuk malkukan insert data ke tabel yang akan kita input
$post =  mysqli_query($connection, "insert into data_karyawan (`name`, `nik`, `id_position`) VALUES  ('$name', '$nik', '$id_position')");
if($post){
   header("Location: ../index.php");
    exit();
}
?>