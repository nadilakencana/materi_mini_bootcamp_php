<?php 
include 'database.php';


$id = $_POST['id'];
$name = $_POST['name'];
$nik = $_POST['nik'];
$id_position = $_POST['id_position'];


$post =  mysqli_query($connection, "update data_karyawan set name='$name', nik= '$nik', id_position='$id_position' where id='$id'");
if($post){
   header("Location: ../index.php");
    exit();
}
?>