<?php 
require_once('db-connect.php');
session_start();
if(!isset($_GET['id'])){
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    $conn->close();
    exit;
}

$delete = $conn->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");



if($delete){
    if($_SESSION['username'] == 'admin' ){
        echo "<script> alert('Event has deleted successfully..'); location.replace('indexadmin.php') </script>";
    }else if ($_SESSION['username'] == 'allmember' ){
        echo "<script> alert('Event has deleted successfully..'); location.replace('indexuser.php') </script>";
    }
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}

$conn->close();
