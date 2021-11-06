<?php
// $user = 'nirappdev';
// $password = 'negrosisland';
// $db = 'NIR01';
// $host = '166.62.10.47:3306';

// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link, 
//    $host, 
//    $user, 
//    $password, 
//    $db
// );

$servername = "remotemysql.com";
$username = "ID0NrhjG7a";
$password = "4iwxRZ6ftN";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ID0NrhjG7a", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    // echo "Connection failed: " . $e->get/Message();
    }

?>
