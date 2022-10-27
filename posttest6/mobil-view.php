<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Lihat Data Rental</title>
    <link rel="stylesheet" href="mobil.css">
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Rental View Details 
                            <a href="index6.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $rental_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM rental WHERE id='$rental_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $mobil = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Nama Pemesan</label>
                                        <p class="form-control">
                                            <?=$mobil['nama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Lama Sewa</label>
                                        <p class="form-control">
                                            <?=$mobil['lama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tanggal</label>
                                        <p class="form-control">
                                            <?=$mobil['tanggal'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>