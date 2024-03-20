<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3 ">
        <h1 class="text-center mt-3 mb-3">Update Data Karyawan</h1>
        <div class="content  d-flex justify-content-center align-items-center">
            <div class="card p-3" style="width: 50%;">
            <?php 
                include 'config/database.php';
                $id = $_GET['id'];
                $data = mysqli_query($connection,"select * from data_karyawan where id='$id'");
                $row = mysqli_fetch_assoc($data);
            ?>
                <form class="row g-3" method="post" action="config/update.php">
                    <div class="col-md-12">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <label for="Nama" class="form-label">Full Name </label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" id="inputEmail4" placeholder="Fullname">
                    </div>
                    <div class="col-md-12">
                        <label for="Nama" class="form-label">NIK </label>
                        <input type="number" class="form-control" name="nik" value="<?php echo $row['nik'] ?>" id="inputEmail4" placeholder="nomer induk karyawan">
                    </div>
                    <div class="col-md-12">
                        <label for="Nama" class="form-label">Job </label>
                        <input type="text" class="form-control" name="job" value="<?php echo $row['job'] ?>" id="inputEmail4" placeholder="">
                    </div>
                    
                    
                    <div class="col-12 d-flex gap-3 justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="index.php" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>