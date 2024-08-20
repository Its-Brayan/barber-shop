<?php
$servername="localhost";
$username="root";
$password="";
$database = "Training";
$socket = "/opt/lampp/var/mysql/mysql.sock";
$conn =new mysqli($servername, $username,$password, $database,null,$socket);

// Check connection
if (!$conn) {
    die(mysqli_error($conn));
}

?>