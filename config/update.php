<?php 
include 'database.php';


$id = $_POST['id'];
$name = $_POST['name'];
$nik = $_POST['nik'];
$job = $_POST['job'];


$post =  mysqli_query($connection, "update data_karyawan set name='$name', nik= '$nik', job='$job' where id='$id'");
if($post){
   header("Location: ../index.php");
    exit();
}
?>