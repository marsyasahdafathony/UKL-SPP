<?php
session_start();
require_once("koneksi.php");
if(isset($_SESSION['nisn'])){
    header("location: index_siswa.php");
}
?>
<html>
    <<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>LOG IN</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
body {
    background: linear-gradient(to bottom, #444444 0%, #989898 100%);
}

</style>

    </head>
    
<body>

<div class="row" style="margin-top:150px;">
    <div class="col-md "></div>
    <div class="col-md  rounded bg-light" style="padding: 10px;px">
   
<form action="" method="POST">
    
<?php
// Kita akan membuat proses login nya disini
if(isset($_POST['login'])){
    $nisn = $_POST['nisn'];
    $cari = mysqli_query($db, "SELECT * FROM siswa WHERE nisn='$nisn'");
    $hasil = mysqli_fetch_assoc($cari);
        // Jika data yang dicari kosong
        if(mysqli_num_rows($cari) == 0){
            echo "<td colspan='2'><center>NISN belum terdaftar!</center></td>";
        }else{
        // Jika nisn siswa sesuai dengan database maka akan redirect ke halaman utama dan akan dibuatkan sesi
            $_SESSION['nisn'] = $_POST['nisn'];
            header("location: index_siswa.php");
        }
}
?>
<h2 align="center">Welcome Back !</h2>
        
      <hr>     
      <center><input type="text" name="nisn" class="input" placeholder="Nisn"></center>
        <br>
           
        <center><input type="submit" value="LOG IN" name="login" class="login" ></center>
        
        <hr>
            <center> <a class="small" href="login.php" class="btn btn-link">are you a staff?</a></center>
            </form>
    </div>
    <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
<br>
<?php require_once("footer.php"); ?>
</html>