<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="style2.css"/>
  <title>Document</title>
</head>
<body>
<div class="navbar">
    <h1>POSTTEST 4</h1>
</div>
<div class="inputForm">
            <form action="process.php" method="POST" accept-charset="utf-8">
                <br><p>Nama Pemesan</p>
                <input placeholder="Nama" id="nama" type="text" name="nama" required><br>
                <br><p>Lama Sewa</p>
                <input placeholder="Lama Sewa (Hari) " id="lama" type="number" name="lama" required><br>
                <br><p>Tanggal Sewa</p>
                <input placeholder="(DD-MM-YY)" id="tanggal" type="date" name="tanggal" required><br>S
                <br><p>Merk Mobil</p>
                <input type="radio" id="Avanza" name="merk" value="Avanza" required>
                <label for="Avanza">Avanza</label>
                <input type="radio" id="Innova" name="merk" value="Innova">
                <label for="Innova">Innova</label>
                <input type="radio" id="Fortuner" name="merk" value="Fortuner">
                <label for="Fortuner">Fortuner</label>
                

                <br><input type="submit" value="Submit">
            </form>

</body>
</html>
