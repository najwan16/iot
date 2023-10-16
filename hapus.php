<?php

include("koneksi.php");

$no = $_GET['no'];
echo $no;

$hapus = mysqli_query($koneksi, "DELETE FROM data WHERE no='$no' ");
if($hapus == TRUE){
    echo "Data Berhasil terhapus";
    header("location: dataform.php");
}else{ 
    echo "Data tdk terhapus"; 
    
}

?>