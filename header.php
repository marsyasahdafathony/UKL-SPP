
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
        body{
            background-color: #989898;
        }
    </style>

</head>
<body>


<?php
$panggil = mysqli_query($db, "SELECT * FROM petugas WHERE username='$username'");
$hasil = mysqli_fetch_assoc($panggil);
    if($hasil['level'] == "Administrator"){ ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">History pembayaran</a>
        </li>
         
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li> 

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tambah</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="siswa.php">Siswa</a></li>
            <li><a class="dropdown-item" href="petugas.php">Petugas</a></li>
            <li><a class="dropdown-item" href="kelas.php">Kelas</a></li>
            <li><a class="dropdown-item" href="spp.php">Spp</a></li>

            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php   
 }else{ ?>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">History pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li> 
        </ul>
    </div>
  </div>
</nav>

<?php } ?>
<center><div class="text">Selamat datang, <?= $username; ?></div></center>      
<div class="container-fluid mt-3"> 


</div>


            

</body>
     
</html>



