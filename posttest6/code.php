<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_rental']))
{
    $rental_id = mysqli_real_escape_string($con, $_POST['delete_rental']);

    $query = "DELETE FROM rental WHERE id='$rental_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "rental Deleted Successfully";
        header("Location: index6.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "rental Not Deleted";
        header("Location: index6.php");
        exit(0);
    }
}

if(isset($_POST['update_rental']))
{
    $rental_id = mysqli_real_escape_string($con, $_POST['rental_id']);

    $name = mysqli_real_escape_string($con, $_POST['nama']);
    $lama = mysqli_real_escape_string($con, $_POST['lama']);
    $tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);

    $query = "UPDATE rental SET name='$nama', lama='$lama', tanggal='$tanggal' WHERE id='$rental_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "rental Updated Successfully";
        header("Location: index6.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "rental Not Updated";
        header("Location: index6.php");
        exit(0);
    }

}

    function upload()
    {
      $namaFile = $_FILES['gambar']['name'];
      $ukuranFile = $_FILES['gambar']['size'];
      $error = $_FILES['gambar']['error'];
      // $tmpName = $_FILES['gambar']['tmp_name'];
      $tmp = $_FILES['gambar']['tmp_name'];

      if ($error == 4) {
          echo " <script>
                  alert('pilih gambar terlebih dahulu');
                  window.location=('create.php');
                </script> ";
          return false;
      }

      $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
      $ekstensiGambar = explode('.', $namaFile);
      $ekstensiGambar = strtolower(end($ekstensiGambar));

      if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
          echo " <script>
            alert('Yang Anda Upload Bukan Gambar');
            window.location=('index6.php');
          </script> ";
          return false;
      }

      if ( $ukuranFile > 1000000) {
            echo " <script>
                    alert('Ukuran Gambar Anda Terlalu Besar');
                    window.location=('index6.php');
                  </script> ";
            return false;
        # code...
      }

      //generate nama baru
      $namaFileBaru = uniqid();
      $namaFileBaru .= '.';
      $namaFileBaru .= $ekstensiGambar;
      // var_dump($namaFileBaru);

      move_uploaded_file($tmp, 'img/'.$namaFile);
  

      return $namaFile;
    }

if(isset($_POST['save_rental']))
{
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $lama = mysqli_real_escape_string($con, $_POST['lama']);
    $tanggal= mysqli_real_escape_string($con, $_POST['tanggal']);
    
    //upload gambar
    $gambar = mysqli_real_escape_string($con, upload());
    if( !$gambar){
      return false;
    }
    date_default_timezone_set("Asia/Makassar");
    $waktu = date("Y-m-d H:i:s");
    // $ekstensi_diperbolehkan	= array('PNG','JPG','JPEG','png','jpg','jpeg');
    //  // $tanggal = $_POST['tanggal];
   
    // $gambar = $_FILES['file']['name'];
    // $x = explode('.', $gambar);
    // $ekstensi = strtolower(end($x));
    
    // $ukuran	= $_FILES['file']['size'];
    // $file_tmp = $_FILES['file']['tmp_name'];	
    $query = "INSERT INTO rental (nama,lama,tanggal,gambar,waktu) VALUES ('$nama','$lama','$tanggal','$gambar','$waktu')";
    
    // $create = mysqli_query($con,"INSERT INTO rental VALUES(
    //     '".$nama."',
    //     '".$lama."',
    //     '".$tanggal."',
    //     '".$gambar."'
  
    //  )");

    if($query){
        echo "<script>
               alert('data berhasil ditambahkan');
               window.location=('index6.php');
             </script>";

     } else {
       //  echo "gagal" . mysqli_error($koneksi);
        echo "<script>
               alert('data gagal ditambahkan');
               window.location=('create.php');
             </script>";
     }

    // if(in_array($ekstensi, $ekstensi_diperbolehkan) === false){
    //     if($ukuran < 1044070){			
    //         move_uploaded_file($file_tmp, 'file/'.$gambar);
    //         $query = "INSERT INTO rental (nama,lama,tanggal,gambar,waktu) VALUES ('$nama','$lama','$tanggal','$gambar','$waktu')";

    //         $query_run = mysqli_query($con, $query);
    //             if($query_run)
    //             {
    //                 $_SESSION['message'] = "rental Created Successfully";
    //                 header("Location: create.php");
    //                 exit(0);
    //             }
    //             else
    //             {
    //                 $_SESSION['message'  ] = "rental Not Created";
    //                 header("Location: create.php");
    //                 exit(0);
    //             }
    //             }else{
    //         $_SESSION['message'] = 'UKURAN FILE TERLALU BESAR';
    //         header("Location: create.php");
    //         exit(0);
    //         }
    //     }else{
    //         $_SESSION['message'] = 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN ';
    //         header("Location: create.php");
    //         exit(0);
    //     }
}

    
?>