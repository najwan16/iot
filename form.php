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
    <title>Formulir</title>
</head>
<body>
<h1> Form of Temperature & Humidity </h1>
       <p>Please fill this form</p>
       <form method="POST" action="submit.php">
            <label>Class : </label> 
            <input type="text" name="class" placeholder="fill with Class" required >
            <br><br>

            <label>Temperature: </label> 
            <input type="text" name="temperature" placeholder="fill with Temperature" required>
            <br><br>
            <label>Humidity : </label> 
            <input type="text" name="humidity" placeholder="fill with Humidity" required>
            <br><br>
            
            <button type="submit">Submit</button><br>
            <a href="dataform.php" class="btn">Show Data</a>
            
        </form>    
</body>
</html>
