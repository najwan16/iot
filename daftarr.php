<?php
include 'koneksi.php';
//require 'funtion.php';

    if(isset($_POST["register"])){
 
        if(registrasi($_POST)>0){
            echo "<script>
                alert('user baru berhasil ditambahkan');
                </script>";
                header("location:login.php");

        }else{
            echo mysqli_error($koneksi);
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stail.css">
    <title>Halaman Registrasi</title>
    <h1> Halaman Registrasi </h1>

    
</head>
<body>
<form method="POST" action="">
            <label>Username : </label> 
            <input type="text" name="username"  id="username" required >
            <br><br>

            <label>Email : </label> 
            <input type="email" name="email" id="email" required>
            <br><br>

            <label>Password : </label> 
            <input type="password" name="password" id="password" required>
            <br><br>

            <label>Konfirmasi Password : </label> 
            <input type="password" name="password2" id="password2" required>
            <br><br>
            
            <button type="submit" name="register">Register</button> 
        </form>    

        
</body>
</html> 