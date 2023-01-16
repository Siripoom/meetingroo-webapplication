<?php
    include('db-connect.php');
    session_start();
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';  
    $errors = array();

    if($_POST['submit']){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // $select = "SELECT * FROM tb_member WHERE username = '$username' AND password = '$password' AND role = 'user'";
        // $query = mysqli_query($connn,$select);

       

    if (count($errors) == 0) {
        $query = "SELECT * FROM  tb_member WHERE username = '$username' AND password = '$password' AND role = 'admin'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            echo '
       <script>
       setTimeout(function() {
       swal({
               title: "เข้าสู่ระบบสำเร็จ",
               text: "",
               type: "success"
           }, function() {
           window.location = "indexadmin.php";
       });
       }, 1000);
   </script>
       ';
        }else {
            $query = "SELECT * FROM  tb_member WHERE username = '$username' AND password = '$password' AND role = 'user'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                echo '
       <script>
       setTimeout(function() {
       swal({
               title: "เข้าสู่ระบบสำเร็จ",
               text: "",
               type: "success"
           }, function() {
           window.location = "indexuser.php";
       });
       }, 1000);
   </script>
       ';
            } else {
                echo '
       <script>
       setTimeout(function() {
       swal({
               title: "เข้าสู่ระบบไม่สำเร็จ",
               text: "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง",
               type: "warning"
           }, function() {
           window.location = "index.php";
       });
       }, 1000);
    </script>
       ';
            }
            
        }
    }else{
        echo '
       <script>
       setTimeout(function() {
       swal({
               title: "เข้าสู่ระบบไม่สำเร็จ",
               text: "กรุณากรอกชื่อผู้ใช้และรหัสผ่าน",
               type: "warning"
           }, function() {
           window.location = "index.php";
       });
       }, 1000);
    </script>
       ';
   }



    }
