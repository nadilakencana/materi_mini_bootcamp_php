
<?php
//membuat valiaber untuk mendeklarasi parameter conection database 

$server = "localhost";
$username = "root";
$password = "";
$database = "mini_bootcamp"; //sesuaikan dengan database yang kamu buat 

$connection = new mysqli($server , $username, $password, $database);

// check jika connection mengalami error makana munculkan pesan 
if ($connection->connect_error) {
    
    echo "Database connection error: " . $connection->connect_error;
} 

$data_karyawan = "SELECT data_karyawan. *, position.position FROM data_karyawan
                    INNER JOIN position on data_karyawan.id_position = position.id";

$data_position = "SELECT * FROM position";

?>