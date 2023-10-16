<?php
include ('koneksi.php');//setiap akan berinteraksi dengan database
$class = $_POST['class']; 
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];

//langkah awal
// echo $nama. "</br>";
// echo $email . "</br>";
// echo $hp. "</br>";
 
$submit = mysqli_query($koneksi, "INSERT INTO data (Class, Temperature, Humidity) VALUES ('$class', '$temperature', '$humidity') "); 
if($submit == TRUE){
    echo "Data Berhasil disimpan";
    
}else{
    echo "Data tdk tersimpan"; 
    
}

?>  
<br><br>
<button><a href="dataform.php">Lihat Data</button>

