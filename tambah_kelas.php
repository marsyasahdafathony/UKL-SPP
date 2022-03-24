<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kelas</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("header.php"); ?>
   
    <div class="row" style="margin-top:100px;">
    <div class="col-md "></div>
    <div class="col-md  rounded bg-light" style="padding: 10px;px">
   

    <h3 align="center">Tambah Kelas</h3>
    <form action="" method="POST">
            
          <hr>
               Nama Kelas :
               <center><input type="text" class="form-control" name="nama" placeholder="Nama...."></center>
            <br>
               Jurusan :
               <center><input type="text" class="form-control" name="kk" placeholder="Jurusan...."></center>
            <br>
               <center><input type="submit" value="simpan" name="simpan" class="login" ></center>
            <hr>
            <?php include "footer.php" ?>
      
</form>
    </div>
    <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
<br>
</html>
<?php
// Proses Simpan
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kk = $_POST['kk'];
    $simpan = mysqli_query($db, "INSERT INTO kelas VALUES(NULL, '$nama', '$kk')");
        if($simpan){
            header("location: kelas.php");
        }else{
            echo "<script>alert('Data sudah ada');</script>";
        }
}
?>