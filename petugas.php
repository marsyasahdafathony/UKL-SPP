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
    <h5>Petugas</h5>
    <hr/>
</div>
<br>
<div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:24px">
    <p><a href="tambah_petugas.php">Tambah Data</a></p>
    <table class="table table-bordered" >
    <thead >
        <tr>
            <td>No. </td>
            <td>Username</td>
            <td>Password</td>
            <td>Nama Petugas</td>
            <td>Level</td>
            <td>Aksi</td>
        </tr>
</thead>
</div>
<?php
// Kita buat konfigurasi pagging
$jmlhDataHal = 5;
$data = mysqli_query($db, "SELECT * FROM petugas");
$jmlhData = mysqli_num_rows($data);
$jmlhHal = ceil($jmlhData / $jmlhDataHal);
$halAktif = (isset($_GET['hal'])) ? $_GET['hal'] : 1;
$dataAwal = ($jmlhData * $halAktif) - $jmlhData;
// Konfigurasi Selesai
// Kita panggil tabel petugas
$sql = mysqli_query($db, "SELECT * FROM petugas LIMIT $dataAwal, $jmlhDataHal");
$no = 1;
while($r = mysqli_fetch_assoc($sql)){ ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $r['username']; ?></td>
            <td><?= $r['password']; ?></td>
            <td><?= $r['nama_petugas']; ?></td>
            <td><?= $r['level']; ?></td>
            <td><a href="?hapus&id=<?= $r['id_petugas']; ?>">Hapus</a> | 
                <a href="edit_petugas.php?id=<?= $r['id_petugas']; ?>">Edit</a</td>
        </tr>
<?php $no++; } ?>
    </table>
<!-- Sekarang kita buat tombol halamannya -->
<center><?php for($i=1; $i <= $jmlhHal; $i++): ?>
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
    $hapus = mysqli_query($db, "DELETE FROM petugas WHERE id_petugas='$id'");
    if($hapus){
        header("location: petugas.php");
    }else{
        echo "<script>alert('Maaf, data tersebut masih terhubung dengan data yang lain');
        </script>";
    }
}
?>