<?php
session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}
?>
<html>
    <head>
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
<center>
<div class="row" style="margin-top:150px;">
    <div class="col-md "></div>
    <div class="col-md  rounded bg-light" style="padding: 10px;px">
   
            
<form action="proseslogin.php" method="POST">
<h2 align="center">Welcome Back !</h2>
            <hr>
            <center><input type="text" name="username" class="input" placeholder="Username" ></center>
    
         <br>
            
            <center><input type="password" name="password" class="input" placeholder="Password"></center>
        <br>
           
            <input type="submit" value="LOG IN" name="login" class="login" >
        
        <hr>
            <center> <a class="small" href="login_siswa.php" class="btn btn-link">are you a student?</a></center>
                                  
                                 
  
</form>
    </div>
    <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
<br>
<?php include "footer.php" ?>
</html>