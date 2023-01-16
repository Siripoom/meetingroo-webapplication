<?php require_once('db-connect.php') ?>

<?php
session_start();
if ($_SESSION['username'] != "admin") {
    Header("Location: logout.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    
</head>

<body class="bg-light">
    <font face="kanit">

        <?php include('menuadmin.php'); ?>

        <center>
            <div class="container">
                
        </center>
    </center>


        <div class="container py-5" id="page-container">
            <div class="row">
                <div class="col-md-9">
                    <div id="calendar"></div>
                </div>
                <div class="col-md-3">
                    <div class="cardt rounded-0 shadow">
                        <div class="card-header bg-gradient bg-primary text-light text-center">
                            <h5 class="card-title mt-3">จองห้องประชุม</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="save_schedule.php" method="post" id="schedule-form">
                                    <input type="hidden" name="id" value="">
                                    <div class="form-group mb-2">
                                        <label for="title" class="control-label">วาระการประชุม</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="department" class="control-label">แผนกที่ขอใช้</label>
                                        <select id="department" name="department">
                                            <option value="ฝายวิชาการสามัญ">ฝ่ายวิชาการสามัญ</option>
                                            <option value="การตลาด">การตลาด</option>
                                            <option value="การบัญชี">การบัญชี</option>
                                            <option value="การโรงแรม">การโรงแรม</option>
                                            <option value="การเลขานุการ">การเลขานุการ</option>
                                            <option value="ก่อสร้าง">ก่อสร้าง</option>
                                            <option value="เขียนแบบเครื่องกล">เขียนแบบเครื่องกล</option>
                                            <option value="เครื่องมือกล">เครื่องมือกล</option>
                                            <option value="คอมพิวเตอร์กราฟิก">คอมพิวเตอร์กราฟิก</option>
                                            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                                            <option value="คหกรรม">คหกรรม</option>
                                            <option value="ช่างยนต์">ช่างยนต์</option>
                                            <option value="เชื่อมโลหะ">เชื่อมโลหะ</option>
                                            <option value="ธุรกิจค้าปลีก">ธุรกิจค้าปลีก</option>
                                            <option value="ไฟฟ้ากำลัง">ไฟฟ้ากำลัง</option>
                                            <option value="วิจัตรศิลป์">วิจิตรศิลป์</option>
                                            <option value="ศิลปกรรมเซรามิก">ศิลปกรรมเซรามิก</option>
                                            <option value="สถาปัตยกรรม">สถาปัตยกรรม</option>
                                            <option value="อิเล็กทรอนิกส์">อิเล็กทรอนิกส์</option>
                                            <option value="อาหารและโภชนาการ">อาหารและโภชนาการ</option>
                                            <option value="ออกแบบ">ออกแบบ</option>
                                            <option value="ออกแบบเสื้อผ้า">ออกแบบเสื้อผ้า</option>
                                            <class="form-control" class="form-control-sm rounded-0" name="department" id="department" required>
                                        </select>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="Room" class="control-label">ห้องประชุม</label>
                                        <select id="room" name="room">
                                            <option value="ตึกทวารวดี">หอประชุมเล็ก(โดมเล็ก)</option>
                                            <option value="โดมเล็ก">อาคารจิตภักดี</option>
                                            <option value="โดมใหญ่">อาคารอเนกประสงค์ ชั้น 3</option>
                                            <option value="ห้องประชุม1">ห้องประชุมตะนาวศรี</option>
                                            <option value="ห้องประชุม2">ห้องโสตทัศนศึกษา</option>
                                            <class="form-control" class="form-control-sm rounded-0" name="room" id="room" required>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="start_datetime" class="control-label">เริ่มประชุม</label>
                                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="end_datetime" class="control-label">สิ้นสุดการประชุม</label>
                                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="status" class="control-label">สถานะ</label>
                                        <select id="status" name="status">
                                            <option value="รออนุมัติ">รออนุมัติ</option>
                                            <option value="อนุมัติ">
                                                <font color="green">อนุมัติ</font>
                                            </option>
                                            <option value="ไม่อนุมัติ">
                                                <font color="red">ไม่อนุมัติ</font>
                                            </option>
                                            <class="form-control" class="form-control-sm rounded-0" name="status" id="status" required>
                                        </select>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> บันทึก</button>
                                <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->
        <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title">รายละเอียดการประชุม</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container-fluid">
                            <dl>
                                <dt class="text-muted">วาระการประชุม</dt>
                                <dd id="title" class="fw-bold fs-4"></dd>
                                <dt class="text-muted">แผนกที่ขอใช้</dt>
                                <dd id="department" class=""></dd>
                                <dt class="text-muted">ห้องประชุม</dt>
                                <dd id="room" class=""></dd>
                                <dt class="text-muted">เริ่มประชุม</dt>
                                <dd id="start" class=""></dd>
                                <dt class="text-muted">สิ้นสุดการประชุม</dt>
                                <dd id="end" class=""></dd>
                                <dt class="text-muted">การอนุมัติห้องประชุม</dt>
                                <dd id="status" class=""></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="modal-footer rounded-0">
                        <div class="text-end">
                            <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">แก้ไข</button>
                            <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">ลบ</button>
                            <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->

        <?php
        $schedules = $conn->query("SELECT * FROM `schedule_list`");
        $sched_res = [];
        foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
            $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
            $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
            $sched_res[$row['id']] = $row;
        }
        ?>
        <?php
        if (isset($conn)) $conn->close();
        ?>

    </font>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>


</html>