<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='project4';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}
?>


