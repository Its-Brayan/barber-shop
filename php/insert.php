<?php
include 'connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

var_dump($_POST);
$firstname = $lastname = $phone = $email = $location = $city = $state = "";
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
    // Your code here}
{
    $firstname = $_POST['first'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $phone = $_POST['phonenumber'] ?? '';
    $email = $_POST['Email'] ?? '';
    $location = $_POST['location'] ?? '';
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
   


    $sql = "INSERT INTO `Applications`(first,lastname,phonenumber,Email,location,city,state) VALUES('$firstname','$lastname','$phone','$email','$location','$city','$state')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "data inserted successfully";
    } else {
        die(mysqli_error($conn));
    }



}



