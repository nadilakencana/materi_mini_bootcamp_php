<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3 ">
        <h1 class="text-center mt-3 mb-3">Input Data Karyawan</h1>
        <div class="content  d-flex justify-content-center align-items-center">
            <div class="card p-3" style="width: 50%;">
                <form class="row g-3" method="post" action="config/post_data.php">
                    <div class="col-md-12">
                        <label for="Nama" class="form-label">Full Name </label>
                        <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Fullname">
                    </div>
                    <div class="col-md-12">
                        <label for="Nama" class="form-label">NIK </label>
                        <input type="number" class="form-control" name="nik" id="inputEmail4" placeholder="nomer induk karyawan">
                    </div>
                    <div class="col-md-12">
                        <label for="Nama" class="form-label">Job </label>
                        <input type="text" class="form-control" name="job" id="inputEmail4" placeholder="">
                    </div>
                    
                    
                    <div class="col-12 d-flex gap-3 justify-content-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="index.php" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>