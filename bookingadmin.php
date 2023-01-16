<?php


include('db-connect.php');
session_start();

if ($_SESSION['username'] != "admin") {
    Header("Location: logout.php");
    exit();
}
require_once('db-connect.php');
$sql = "SELECT * FROM schedule_list group by id DESC";
$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การจองห้องประชุม</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
</head>


<body>
    <font face="kanit">
        <?php include('menuadmin.php'); ?>

        <h1 class="text text-center">รายละเอียดการขอจองห้องประชุม</h1>
        </center>

        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>
                            <font size="4"><b>วาระการประชุม</b></font>
                        </td>

                        <td  align="center">
                            <font size="4"><b>แผนกที่ขอใช้</b></font>
                        </td>
                        <td width="10%" align="center">
                            <font size="4"><b>ห้องประชุม</b></font>
                        </td>
                        <td width="15%" align="center">
                            <font size="4"><b>เริ่มประชุม</b></font>
                        </td>
                        <td width="15%" align="center">
                            <font size="4"><b>สิ้นสุดการประชุม</b></font>
                        </td>
                        <td width="10%" align="center">
                            <font size="4"><b>สถานะ</b></font>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td class="name">
                                <font size="3"><?php echo $row['title']; ?></font>
                            </td>

                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['room']; ?></td>
                            <td><?php echo $row['start_datetime']; ?></td>
                            <td><?php echo $row['end_datetime']; ?></td>
                            <td><?php echo $row['status']; ?></td>

                            </td>
                        <tr>



                        </tr>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>


</body>

</html>