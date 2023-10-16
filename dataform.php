<?php

// session_start();
// if(!isset($_SESSION["login"])){
//     header("location: login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Formulir</title>
</head>
<body>
<h1> Form of Temperature & Humidity </h1>
      
       <?php
       include('koneksi.php');

    $tampil = mysqli_query($koneksi, "SELECT * FROM data");
    $no = 0;
    ?>
    <table border="1">
        <tr>
            <th>No</th>    
            <th>Class</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Action</th>
        </tr>
    <?php
    while($baris = mysqli_fetch_array($tampil)){
        $no++;
        echo "<tr>";
        echo "<td>" .$no ."</td>";
        echo "<td>".$baris['Class'] ."</td>";
        echo "<td>".$baris['Temperature']."</br>" ;
        echo "<td>".$baris['Humidity']."</br>";

        echo "<td>";
        echo "<a href='edit.php?no=".$baris['no']."'>Edit</a> | ";
        echo "<a href='hapus.php?no=".$baris['no']."'>Delete</a>";
        echo "</td>";

        echo "</tr>";

        }
       ?> 
       
    </table>         
</body>

<br><br>
<button ><a href="form.php">Add Data</a></button>
</html>