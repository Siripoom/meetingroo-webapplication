<?php
// Create connection
$connect = new mysqli('localhost', 'root', '', 'project4');


// Check Connection

if ($connect->connect_error) {
    die("Something wrong.: " . $connect->connect_error);
}
session_start();

$sql = "SELECT * FROM schedule_list where department = '$_SESSION[department]'";
$result = $connect->query($sql);

?>

<?php require_once('db-connect.php') ?>

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
    <div class="container-fuied">
        <font face="kanit">
            <?php include('menuuser.php'); ?>

            <h1 class="text-center"> รายละเอียดการขอจองห้องประชุม</h1>

            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th  width="10%" align="center">
                                <font size="4"><b>วาระการประชุม</b></font>
                                </td>

                            <th width="10%" align="center">
                                <font size="4"><b>แผนกที่ขอใช้</b></font>
                            </th>
                            <th width="10%" align="center">
                                <font size="4"><b>ห้องประชุม</b></font>
                            </th>
                            <th width="15%" align="center">
                                <font size="4"><b>เริ่มประชุม</b></font>
                            </th>
                            <th width="15%" align="center">
                                <font size="4"><b>สิ้นสุดการประชุม</b></font>
                            </th>
                            <th width="10%" align="center">
                                <font size="4"><b>สถานะห้องประชุม</b></font>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td class="name">
                                    <font size="3"><?php echo $row['title']; ?></font>
                                </td>

                                <td><?php echo $row['department']; ?></td>
                                <td><?php echo $row['room']; ?></td>
                                <td><?php echo $row['start_datetime']; ?></td>
                                <td><?php echo $row['end_datetime']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>
        </font>
    </div>

</body>

</html>