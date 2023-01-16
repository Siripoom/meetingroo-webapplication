<?php
    include('db-connect.php');

    $sql = "SELECT * FROM tb_member where username = '$_SESSION[username]'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    $_SESSION['department'] = $row['department'];
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>

</head>

<body>
    <font face="font-family-sans-serif">
        <!-- <center>
        <img src="./img/header.jpg" width="100%"></center>
       <a href="indexuser.php"><button class="tablink">หน้าหลัก</button></a>
        <a href="roomderailuser.php"><button class="tablink">ข้อมูลห้องประชุม</button></a>
        <a href="bookinguser.php"><button class="tablink">ข้อมูลการใช้ห้องประชุม</button></a>
        <a href="https://forms.gle/Zrk7HjrqdSJctREZA" target="_blank"><button class="tablink" >แบบหนังสือราชการ</button></a>
        <a href=""><button class="tablink">คู่มือการใช้</button></a>
        <a href="logout.php"><button class="tablink1">ออกจากระบบ</button></a>
<center> -->
        <img src="./img/headerf.png" width="100%">
        </center>
        <nav class="navbar navbar-expand-lg" style="background-color: #8C0C08 ">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="indexuser.php" style="color:white;">RCTmeeting</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="indexuser.php" style=" color:white; ">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a href="roomdetailuser.php" class="nav-link" style="color:white;">ข้อมูลห้องประชุม</a>
                        </li>
                        <li class="nav-item">
                            <a href="bookinguser.php" class="nav-link" style="color:white;">ข้อมูลการใช้ห้องประชุม</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfKiD9av1lUCl4HzyYK0-GN2GnMGBi2dV-0PT-dM_z4xdSc1Q/viewform" target="_blank" class="nav-link" style="color:white;">แบบหนังสือราชการ</a>
                        </li>
                        <li class="nav-item">
                            <a href="img\คู่มือการใช้งานเว็บไซต์ RTC.pdf" target="_blank" class="nav-link" style="color:white;">คู่มือการใช้</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
                    </span>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
            <p class="h5 mt-4 text-center">ผู้ใช้งาน: <?php echo $_SESSION['username']; ?> | คุณ<?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?> | แผนก <?php echo $row['department']; ?> | ไอดีไลน์ <?php echo $row['line']; ?> | เบอร์โทรศัพท์ <?php echo $row['tell']; ?></p>
                <hr>
            </div>
        </div>
    </font>
    </body>

</html>