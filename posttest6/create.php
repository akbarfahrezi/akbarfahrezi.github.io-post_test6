<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Rental Create</title>
    <link rel="stylesheet" href="mobil.css">
</head>
<body>
  
    <div class="container mt-5">    

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Pesanan
                            <a href="index6.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>Nama Pemesan</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Lama Sewa</label>
                                <input type="number" name="lama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Sewa</label>
                                <input type="datetime-local" name="tanggal" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Upload Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_rental" class="btn btn-primary">simpan </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>