<?php
// Array Bandara Asal
$bandara_asal = [
  "Soekarno Hatta",
  "Husein Sastranegara",
  "Abdul Rachman Saleh",
  "Juanda"
];

// Array Bandara Tujuan
$bandara_tujuan = [
  "Ngurah Rai",
  "Hasanuddin",
  "Inanwatan",
  "Sultan Iskandar Muda"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProLine | Input Pesanan</title>
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
  <!-- Akhir Heading-->

  <!-- Form -->
  <section class="container rounded py-3" style="padding-left: 45%;">
    <form class="bg-light p-3 rounded" action="output.php" method="post">
      <div>
        <input type="hidden" name="tanggal" id="tanggal" value="<?php echo date("d-m-y"); ?>">
      </div>
      <div class="mb-3">
        <label for="nama_maskapai" class="form-label" style="color: #31c490;">
          <strong>Nama Maskapai</strong>
        </label>
        <input type="text" class="form-control" name="nama_maskapai" id="nama_maskapai" placeholder="Ketik nama maskapai...">
      </div>
      <div class="my-3">
        <label for="bandara_asal" class="form-label" style="color: #31c490;">
          <strong>Bandara Asal</strong>
        </label>
        <input class="form-control" list="datalistOptions1" name="bandara_asal" id="bandara_asal" placeholder="Ketik untuk mencari...">
        <datalist id="datalistOptions1">
          <?php foreach ($bandara_asal as $asal) { ?>
            <option value="<?php echo $asal; ?>">
              <?php echo $asal; ?>
            </option>
          <?php } ?>
        </datalist>
      </div>
      <div class="my-3">
        <label for="bandara_tujuan" class="form-label" style="color: #31c490;">
          <strong>Bandara Tujuan</strong>
        </label>
        <input class="form-control" list="datalistOptions2" name="bandara_tujuan" id="bandara_tujuan" placeholder="Ketik untuk mencari...">
        <datalist id="datalistOptions2">
            <?php foreach ($bandara_tujuan as $tujuan) { ?>
              <option value="<?php echo $tujuan; ?>">
                <?php echo $tujuan; ?>
              </option>
            <?php } ?>
        </datalist>
      </div>
      <div>
        <div>
          <label for="Harga Tiket" class="form-label" style="color: #31c490;">
            <strong>Harga Tiket</strong>
          </label>
        </div>
        <div class="row g-2">
          <div class="col-auto">
              <input type="number" class="form-control" name="harga_tiket" id="harga_tiket" placeholder="Ketik harga tiket...">
          </div>
          <div class="col-auto">
              <button type="submit" class="btn mb-3" style="background-color: #ba5eef; color: white"><strong>Pesan</strong></button>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- Akhir Form -->

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>