<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>เว็บไซต์จองห้องประชุมออนไลน์วิทยาลัยเทคนิคราชบุรี</title>
	<script src="./fontawesome-free-6.2.1-web/js/all.min.js"></script>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<style>
		body {
			background-color: DarkRed;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
	</style>

</head>

<body>
	<font face="kanit">
		<div class="container">

			<div class="row">

				<div class="col">

				</div>
				<div class="col col-6">
					<center><img class="mt-3" src="./img/logoreal.png" alt="" height="300"></center><br>
					<p class="h3 text-center mb-3">
						<font color="white">เข้าสู่ระบบ</font>
					</p>
					<p class="h3 text-center mb-3">
						<font color="white">เว็บไซต์จองห้องประชุมออนไลน์วิทยาลัยเทคนิคราชบุรี</font>
					</p>
					<form action="index_db.php" method="post">
						<div class="form-floating">
							<input type="text" name="username" class="form-control" required placeholder="username">
							<label for="floatingInput"><i class="fa-solid fa-user"></i> ชื่อผู้ใช้</label>
							<br/>
						</div>
						<div class="form-floating">
							<input type="password" name="password" class="form-control" required placeholder="password">
							<label for="floatingInput"><i class="fa-solid fa-lock"></i> รหัสผ่าน</label>
						</div>
						<br />

						

						<br>

						<center>
							<div class="forn-control">
								<a href="register.php" class="btn btn-outline-primary">ลงทะเบียน</a>
								<input type="submit" name="submit" class="btn btn-light my-2" value="เข้าสู่ระบบ">&nbsp;
							</div>
						</center>


					</form>
				</div>
				<div class="col ">

				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</font>
</body>

</html>