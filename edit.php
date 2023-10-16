<?php
    include('koneksi.php');

    //untuk menampilkan satu data
    $no = $_GET['no'];
    $data = mysqli_query($koneksi, "SELECT * FROM data WHERE no='$no' ");
    $baris = mysqli_fetch_array($data);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
</h1> Form Edit Data </h1>
       <p> Silahkan edit data di bawah ini</p>
       <form method="POST" action="update.php">
            <label>Class : </label> 
            <input value="<?php echo $baris['Class'];?>" type="text" name="class" placeholder="Isi dengan Class" required >
            <input name="no" value="<?php echo $no ;?>" hidden>
            <br><br>
            
            <label>Temperature : </label> 
            <input value="<?php echo $baris['Temperature'];?>" type="Temperature" name="temperature" placeholder="Isi dengan Temperature" required>
            <br><br>
            <label>Humidity : </label> 
            <input value="<?php echo $baris['Humidity'];?>"type="text" name="humidity" placeholder="Isi dengan Humidity" required>
            <br><br>
            
            <button type="submit">Update</button> 
        </form>    
</body>
</html>