<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah data transaksi</title>
</head>
<body>
    <?php require("header.php"); ?>

    <div class="row" style="margin-top:100px;">
    <div class="col-md "></div>
    <div class="col-md  rounded bg-light" style="padding: 10px;px">
   
    <h3 align="center">Tambah data transaksi</h3>
    <form action="" method="POST">
      
            <hr>
                Petugas :
                <select name="petugas" class="form">
<?php
// Kita akan ambil Nama Petugas yang ada pada tabel Petugas
$petugas = mysqli_query($db, "SELECT * FROM petugas");
while($r = mysqli_fetch_assoc($petugas)){ ?>
                        <option value="<?= $r['id_petugas']; ?>"><?= $r['nama_petugas']; ?></option>
<?php } ?>          </select>
          
            <br></br>
                Nama siswa :
                <select name="siswa" class="form">
<?php
// Sekarang kita ambil NISN Siswa 
$siswa = mysqli_query($db, "SELECT * FROM siswa");
while($r = mysqli_fetch_assoc($siswa)){ ?>
                        <option value="<?= $r['nisn']; ?>"><?= $r['nama']; ?></option>
<?php } ?>          </select>
            <br></br>
                Tgl. / Bulan / Tahun bayar :
                <br>
                <input type="text" name="tgl" size="5" placeholder="Tanggal." class="form">
                    <input type="text" name="bulan" size="10" placeholder="Bulan." class="form">
                    <input type="text" name="tahun" size="5" placeholder="Tahun." class="form">            </tr>
            <br> </br>
               SPP / Nominal yang harus dibayar
                <select name="spp" class="form">
<?php
// Ambil juga data SPP
$spp = mysqli_query($db, "SELECT * FROM spp");
while($r = mysqli_fetch_assoc($spp)){ ?>
                        <option value="<?= $r['id_spp']; ?>">
                        <?= $r['bulan'] . " | " . $r['nominal']; ?></option>
<?php } ?>          </select>
            
            <br></br>
              Jumlah bayar
              <input type="text" name="jumlah" placeholder="nominal...." class="form">
           
            <br><br>
            <center><input type="submit" value="simpan" name="simpan" class="login" ></center>
      
<hr />
<?php include "footer.php" ?>
</div>
    <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
<br>
</html>
<?php
// Kita simpan proses simpan datanya disini
if(isset($_POST['simpan'])){
    $petugas = $_POST['petugas'];
    $nama = $_POST['siswa'];
    $tgl = $_POST['tgl']; $bulan = $_POST['bulan']; $tahun = $_POST['tahun'];
    $spp = $_POST['spp'];
    $cek = mysqli_query($db, "SELECT * FROM pembayaran");
    $ambil = mysqli_fetch_assoc($cek);
    $jumlah = $_POST['jumlah'];
    //if($spp == $ambil['id_spp']){
        //echo "<script>alert('Tahun spp tersebut sudah ada pada siswa');</script>";
    //}else{
    $s = mysqli_query($db,"INSERT INTO pembayaran VALUES
                (NULL, '$petugas', '$nama', '$tgl', '$bulan', '$tahun', '$spp', '$jumlah')");
    // Arahkan ke menu transaksi
    if($s){
    header("location: transaksi.php"); 
    }else{
        echo "<script>alert('gagal');</script>";
    }}
?>