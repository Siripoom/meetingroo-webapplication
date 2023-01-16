<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fontawesome-free-6.2.1-web/js/all.min.js"></script>
    <title>ลงทะเบียน</title>
</head>
<style>
    body {
        background-color: DarkRed;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>

<body>
    <font face="kanit">
        <div class="container-fluid ">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 text-white">
                    <div class="text-center">
                        <img class="mt-5  rounded " src="./img/logoreal.png" height="280"><br>
                    </div>
                    <p class="h2 bm-2 text-white text-center">ลงทะเบียน</p>
                    <form action="register_db.php" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" aria-label="Username" aria-describedby="basic-addon1" name="username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="text" class="form-control" placeholder="รหัสผ่าน" aria-label="Password" aria-describedby="basic-addon1" name="password1">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="text" class="form-control" placeholder="ยืนยันรหัสผ่าน" aria-label="Password" aria-describedby="basic-addon1" name="password2">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="ชื่อจริง" aria-label="Firstname" aria-describedby="basic-addon1" name="firstname">&nbsp;
                            <input type="text" class="form-control" placeholder="นามสกุล" aria-label="Lastname" aria-describedby="basic-addon1" name="lastname">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">แผนก</label>
                            <select class="form-select" id="inputGroupSelect01" name="department">
                                <option selected>เลือกแผนก</option>
                                <option value="ช่างยนต์">ช่างยนต์</option>
                                <option value="เครื่องมือกล">เครื่องมือกล</option>
                                <option value="เขียนแบบเครื่องกล">เขียนแบบเครื่องกล</option>
                                <option value="เชื่อมโลหะ">เชื่อมโลหะ</option>
                                <option value="ไฟฟ้ากำลัง">ไฟฟ้ากำลัง</option>
                                <option value="อิเล็กทรอนิกส์">อิเล็กทรอนิกส์</option>
                                <option value="ก่อสร้าง">ก่อสร้าง</option>
                                <option value="สถาปัตยกรรม">สถาปัตยกรรม</option>
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="การเลขานุการ">การเลขานุการ</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                                <option value="ธุรกิจค้าปลีก">ธุรกิจค้าปลีก</option>
                                <option value="วิจิตรศิลป์">วิจิตรศิลป์</option>
                                <option value="ออกแบบ">ออกแบบ</option>
                                <option value="ศิลปกรรมเซรามิก">ศิลปกรรมเซรามิก</option>
                                <option value="คอมพิวเตอร์กราฟิก">คอมพิวเตอร์กราฟิก</option>
                                <option value="ออกแบบเสื้อผ้า">ออกแบบเสื้อผ้า</option>
                                <option value="อาหารและโภชนาการ">อาหารและโภชนาการ</option>
                                <option value="คหกรรม">คหกรรม</option>
                                <option value="การโรงแรม">การโรงแรม</option>
                                <option value="วิชาสามัญ">วิชาสามัญ</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="อีเมลล์" aria-label="Email" aria-describedby="basic-addon1" name="email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="ไอดีไลน์" aria-label="lineid" aria-describedby="basic-addon1" name="idline">&nbsp;
                            <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" aria-label="tell" aria-describedby="basic-addon1" name="tell">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="otp" id="otp" placeholder="OTP*" class="form-control fs-4" aria-describedby="basic-addon1" required>
                            <button type="button" class="btn btn-dark " onclick="document.getElementById('otp').value = getOTP();">ขอ OTP</button>
                        </div>
                        <center><input type="submit" name="submit" class="btn btn-outline-primary" value="ลงทะเบียน"></center>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <script>
            function getOTP() {
                var a = 0;
                while (a > 999999 || a < 100000) {
                    a = Math.floor(Math.random() * 999999 - 100000) + 100000;
                }
                return a;
            }
        </script>
    </font>
</body>

</html>