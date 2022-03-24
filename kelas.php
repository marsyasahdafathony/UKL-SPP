<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Data Kelas</title>
</head>
<body>
    <!-- Panggil script header -->
    <?php require_once("header.php"); ?>
    <!-- Isi Konten -->
    <br>
    <div class="container mt-3">
    <div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:19px; ">
    <h5>Kelas</h5>
    <hr/>
    </div>
    <br>
    <div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:24px">
    <p><a href="tambah_kelas.php">Tambah Data</a></p>
    <table class="table table-bordered" >
    <thead >
        <tr>
            <td>No. </td>
            <td>Nama Kelas</td>
            <td>Kompetensi Keahlian</td>
            <td>Aksi</td>
        </tr>
</thead>
</div>
<?php
// Kita Konfigurasi Pagging disini
$totalDataHalaman = 5;
$data = mysqli_query($db, "SELECT * FROM kelas");
$hitung = mysqli_num_rows($data);
$totalHalaman = ceil($hitung / $totalDataHalaman);
$halAktif = (isset($_GET['hal'])) ? $_GET['hal'] : 1;
$dataAwal = ($totalDataHalaman * $halAktif) - $totalDataHalaman;
// Konfigurasi Selesai
// Kita panggil tabel kelas
$sql = mysqli_query($db, "SELECT * FROM kelas ORDER BY nama_kelas LIMIT $dataAwal, $totalDataHalaman");
$no = 1;
while($r = mysqli_fetch_assoc($sql)){ ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $r['nama_kelas']; ?></td>
            <td><?= $r['kompetensi_keahlian']; ?></t0 d>
            <td><a href="?hapus&id=<?= $r['id_kelas']; ?>">Hapus</a> | 
                <a href="edit_kelas.php?id=<?= $r['id_kelas']; ?>">Edit</a</td>
        </tr>
<?php $no++; } ?>
    </table>
<!-- Tampilkan tombol halaman -->
<center><?php for($i=1; $i <= $totalHalaman; $i++): ?>
        <a href="?hal=<?= $i; ?>"><?= $i; ?></a>
<?php endfor; ?>
</center>
<!-- Selesai -->
    <hr />
    <?php require_once("footer.php"); ?>
</body>
</html>
<?php
// Tombol Hapus ditekan
if(isset($_GET['hapus'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM kelas WHERE id_kelas='$id'");
    if($hapus){
        header("location: kelas.php");
    }else{
        echo "<script>alert('Maaf, data tersebut masih terhubung dengan data yang lain');
        </script>";
    }
}
?>