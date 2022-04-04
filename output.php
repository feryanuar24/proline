<?php
// Memanggil variabel
$tanggal = $_POST['tanggal'];
$nama_maskapai = $_POST['nama_maskapai'];
$bandara_asal = $_POST['bandara_asal'];
$bandara_tujuan = $_POST['bandara_tujuan'];
$harga_tiket = $_POST['harga_tiket'];

// Membuat pajak asal
if ($bandara_asal == "Soekarno Hatta"){
    $asal = "Soekarno Hatta";
    $pajak_asal = 65000;
}
elseif ($bandara_asal == "Husein Sastranegara"){
    $asal = "Husein Sastranegara";
    $pajak_asal = 50000;
}
elseif ($bandara_asal == "Abdul Rachman Saleh"){
    $asal = "Abdul Rachman Saleh";
    $pajak_asal = 40000;
}
else{
    $asal = "Juanda";
    $pajak_asal = 30000;
}

// Membuat pajak tujuan
if ($bandara_tujuan == "Ngurah Rai"){
    $tujuan = "Ngurah Rai";
    $pajak_tujuan = 85000;
}
elseif ($bandara_asal == "Hasanuddin"){
    $tujuan = "Hasanuddin";
    $pajak_tujuan = 70000;
}
elseif ($bandara_asal == "Inanwatan"){
    $tujuan = "Inanwatan";
    $pajak_tujuan = 90000;
}
else{
    $tujuan = "Sultan Iskandar Muda";
    $pajak_tujuan = 60000;
}

// Membuat total pajak
$pajak = $pajak_asal + $pajak_tujuan;

// Membuat total harga tiket
$total_harga_tiket = $harga_tiket + $pajak;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proline | Output Pesanan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-image: url(img/bg.jpg); background-size: 100%;">

  <!-- Navbar -->
  <section>
  <nav class="navbar navbar-light ms-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <strong class="text-light">ProLine</strong>
      </a>
    </div>
  </nav>
  </section>
  <!-- Akhir Navbar -->

  <!-- Heading -->
  <section class="container my-5" style="padding-left: 45%;">
    <h1 style="color: #31c490;">
      <strong>Waktunya jalan-jalan!</strong>
    </h1>
  </section>
  <!-- Akhir Heading -->

  <!-- List -->
  <section class="container rounded py-3" style="padding-left: 45%;">
    <div class="bg-light p-3 rounded">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Tanggal :</strong><?php echo "&nbsp;".$tanggal ?></li>
        <li class="list-group-item"><strong>Nama Maskapai :</strong><?php echo "&nbsp;".$nama_maskapai ?></li>
        <li class="list-group-item"><strong>Asal Penerbangan :</strong><?php echo "&nbsp;".$asal ?></li>
        <li class="list-group-item"><strong>Tujuan Penerbangan :</strong><?php echo "&nbsp;".$tujuan ?></li>
        <li class="list-group-item"><strong>Harga Tiket :</strong><?php echo " Rp ".number_format($harga_tiket) ?></li>
        <li class="list-group-item"><strong>Pajak :</strong><?php echo " Rp ".number_format($pajak) ?></li>
        <li class="list-group-item"><strong>Total Harga Tiket :</strong><?php echo " Rp ".number_format($total_harga_tiket) ?></li>
      </ul>
    </div>
  </section>
  <!-- Akhir List -->

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>