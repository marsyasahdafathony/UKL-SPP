<?php
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Panggil header -->
    <?php require_once("index.php"); ?>
    <!-- Konten -->
  
          <div class="row" style="margin-top:150px;">
         <div class="col-md "></div>
          <div class="col-md  rounded bg-light" style="padding: 19px">
   
              <h3 class="box-title" align="center"><b>History Pembayaran Siswa</b></h3>
              <hr>
                <form action="laporan.php" method="POST" autocomplete="off" align="center">
                   
                    <input type="text" name="nisn" class="input" placeholder="input NISN" >
                    <br>
                    <br>
                    <button type="submit" class="login" name="cari">Cari</button>
                    <hr>
                    <?php require_once("footer.php"); ?>
                </form>
                <!-- <a class="btn btn-default" href="?pembayaran=read" >Cancel</a> -->
                


</div>
<div class="col-md "></div>
</div>    
</body>
</html>