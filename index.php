<?php
//index.php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;
$error = '';
if(isset($_POST['login'])){
    $conn = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label >Email</label>
        <input type="email" name="email"/>
        <label>Password</label>
        <input type="password" name="password"/>
        <input type="submit" name="login" value="Login"/>

    </form>
    
</body>
</html>



