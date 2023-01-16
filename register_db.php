<?php
include('db-connect.php');
session_start();
echo '
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		';
if ($_POST['submit']) {

    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];
    $line = $_POST['idline'];
    $tell = $_POST['tell'];


    $query = "SELECT * FROM  tb_member WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

    if (empty($username) or empty($password1) or empty($email) or empty($firstname) or empty($lastname) or empty($lastname)) {
        echo '
       <script>
       setTimeout(function() {
       swal({
               title: "สมัครสมาชิกไม่สำเร็จ",
               text: "กรุณากรอกข้อมูลให้ครบถ้วน",
               type: "warning"
           }, function() {
           window.location = "register.php";
       });
       }, 1000);
   </script>
       ';
    }else if(mysqli_num_rows($result) == 1){
        
       
            echo '
        <script>
        setTimeout(function() {
        swal({
                title: "สมัครสมาชิกไม่สำเร็จ",
                text: "ชื่อผู้ใช้งานนี้มีเรียบร้อยแล้ว",
                type: "warning"
            }, function() {
            window.location = "register.php";
        });
        }, 1000);
    </script>
        ';
        
    } else if (strlen($password1) < 5) {
        echo '
        <script>
        setTimeout(function() {
        swal({
                title: "สมัครสมาชิกไม่สำเร็จ",
                text: "รหัสผ่านต้องมีความยาวมากกว่า 6 ตัวอักษรขึ้นไป",
                type: "warning"
            }, function() {
            window.location = "register.php";
        });
        }, 1000);
    </script>
    ';
    } 
    else if ($password1 != $password2) {
        echo '
        <script>
        setTimeout(function() {
        swal({
                title: "สมัครสมาชิกไม่สำเร็จ",
                text: "รหัสผ่านไม่ตรงกัน",
                type: "warning"
            }, function() {
            window.location = "register.php";
        });
        }, 1000);
    </script>
        ';
    } else {
        $sql = "INSERT INTO `tb_member`(`username`, `password`, `firstname`, `lastname`, `department`,`email`,`line`,`tell`) VALUES ('$username','$password1','$firstname','$lastname','$department','$email','$line','$tell')";
        $query = mysqli_query($conn, $sql);
        $session['username'] = '$username' ;
        if ($query) {
            echo '
        <script>
        setTimeout(function() {
        swal({
                title: "สมัครสมาชิกสำเร็จ",
                text: "",
                type: "success"
            }, function() {
            window.location = "index.php";
        });
        }, 1000);
    </script>
        ';

        $session['username'] = '$username' ;
        }
    }
}
