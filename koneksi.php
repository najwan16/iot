<?php 

$server = "localhost";//variabel
$user = "root";
$password = "";
$database = "iot";//yang dalam tanda petik nama database

$koneksi = mysqli_connect($server,$user,$password,$database);

// if ($koneksi == TRUE){
//     echo "okee";
//  } else{
//         echo "belumm";
    
// }

function registrasi($data){
    global $koneksi; 

    
    $username = strtolower( ($data["username"]));//mengubah string menjadi huruf kecil
    //$email = ( ($data["email"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);//mysqli_real.....  agar karakter tetap terbaca misalnya */@
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    if ($password !== $password2){
        echo "<script>
            alert('password salah');
            </script>";//javascript
        return false;    
    }

    $password = password_hash($password, PASSWORD_DEFAULT);//enkripsi password         
    //var_dump($password);die;
    mysqli_query ($koneksi, "INSERT INTO user (username, password) VALUES ('$username', '$password')");

     return mysqli_affected_rows($koneksi);

}  

?>
