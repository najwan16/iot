<?php
include ('koneksi.php');

$no = $_POST['no'];
$class = $_POST['class']; 
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];

$update = mysqli_query($koneksi, "UPDATE data SET Class='$class', Temperature='$temperature', Humidity='$humidity' WHERE no='$no'"); 
if($update == TRUE){
    echo "Data Berhasil diupdate";
    header ("location: dataform.php");
}else{
    echo "Data tdk terupdate"; 
    
}

?>  
<br><br>
<button type="submit" action="dataform.php">Submit</button>

