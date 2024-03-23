<?php
include 'config/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="header text-center mt-5">
            Data Karyawan
        </h1>
        <div class="header m-2">
            <a href="form_input.php" class="btn btn-primary">Add Data</a>
        </div>
        <div class="container">
            <div class="card">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Job</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $result = $connection->query($data_karyawan);

                        if ($result->num_rows > 0) {
                            foreach ($result as $data) {
                        ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['nik']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['position']; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a href="form_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit Data</a>
                                            <a href="config/delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus Data</a>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr> Data kosong </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>