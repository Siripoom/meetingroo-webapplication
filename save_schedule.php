<?php 
    require_once('db-connect.php');
    session_start();
    if($_SERVER['REQUEST_METHOD'] !='POST'){
        echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
        $conn->close();
        exit;
    }

    extract($_POST);
    $allday = isset($allday);

    if(empty($id)){
        $sql = "INSERT INTO `schedule_list` (`title`,`department`,`room`,`start_datetime`,`end_datetime`) VALUES ('$title','$department','$room','$start_datetime','$end_datetime')";
    }else{
        $sql = "UPDATE `schedule_list` set `title` = '{$title}',`room` = '{$room}',`department` = '{$department}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}', `status` = '{$status}' where `id` = '{$id}'";
    }

    $save = $conn->query($sql);

    if($save){
        if($_SESSION['username'] == 'admin' ){

            echo "<script> alert('Schedule Successfully Saved.'); location.replace('indexadmin.php') </script>";
        }else{
            echo "<script> alert('Schedule Successfully Saved.'); location.replace('indexuser.php') </script>";
        }
    }else{
        echo "<pre>";
        echo "An Error occured.<br>";
        echo "Error: ".$conn->error."<br>";
        echo "SQL: ".$sql."<br>";
        echo "</pre>";
    }
    
    $conn->close();
?>