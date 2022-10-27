<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="AboutMe.php">
   <script src="javascript.js"></script>
    
    <title>website rental mobil</title>
</head>
<body>
   <nav>
      <input id="nav-toggle" type="checkbox">
      <div class="logo">Rental Mobil</div>
      <ul class="links">
         <li><a class="darkmode"><input type="checkbox" onclick="ubahMode()"></a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="AboutMe.php">About</a></li>
        <li><a href="index6.php">Pesan</a></li>
      </ul>
      <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </label>
    </nav>
    
  <div class="gambar">
    <img src="rental_mobil1.jpg">
      </div>
  
    <label class="teks"> Rental Mobil dengan driver dan lepas kunci. </label>

  <div class="container">
    <div class="card" id="kartu"onclick="changebackground()">
       <div class="img">
          <img src="3-avanza-black-metallic-600x356-1.png">
       </div>
       <div class="top-text">
          <div class="name">
             New Avanza
          </div>
          <p>
             Toyota
          </p>
       </div>
       <div class="bottom-text">
          <div class="text">
            Kapasitas 7 Seat dengan muatan barang sebanyak 6 buah.
            RP. 350 RIBU/12 JAM (NON DRIVER)
          </div>
          <div class="btn">
             <a href="index6.php">Pesan</a>
          </div>
       </div>
    </div>
    <div class="card" id="kartu"onclick="changebackground()">
       <div class="img">
          <img src="5_super-white-2-min.png">
       </div>
       <div class="top-text">
          <div class="name">
             Innova Reborn
          </div>
          <p>
             Toyota
          </p>
       </div>
       <div class="bottom-text">
          <div class="text">
            Kapasitas 7 Seat dengan muatan barang sebanyak 6 buah.
            RP. 350 RIBU/12 JAM (NON DRIVER)
          </div>
          <div class="btn">
             <a href="index6.php">Pesan</a>
          </div>
       </div>
    </div>
    <div class="card" id="kartu"onclick="changebackground()">
       <div class="img">
          <img src="4-attitude-black_2.png">
       </div>
       <div class="top-text">
          <div class="name">
             Fortuner
          </div>
          <p>
             Toyota
          </p>
       </div>
       <div class="bottom-text">
          <div class="text">
             Kapasitas 7 Seat dengan muatan barang sebanyak 6 buah.
            Rp. 1.000.000/12 jam (NON DRIVER)
          </div>
          <div class="btn">
             <a href="index6.php">Pesan</a>
          </div>
       </div>
    </div>
</div>
    <footer>
      <div class="footer-content">
         <h3>Akbar</h3>
         <p>Merupakan Mahasiswa Universitas Mulawarman Jurusan Informatika Angkatan 2021</p>
          <button onclick="rep()">pencet</button>
          <button onclick="changebackground()">ganti</button>
      </div>
      <div class="footer-bottom">
          <p>Muhammad Akbar Fahrezi - <a>copyright 2022</a>  </p>
      </div>
      
   </footer>
</body>
</html>