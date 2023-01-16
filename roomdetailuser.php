<?php require_once('db-connect.php') ?>

<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ข้อมูลห้องประชุม</title>
</head>

<body>
    <?php include('menuuser.php'); ?>

    <div class="container">
        
        <div class="row">
            <div class="col">
                <div class="card" >
                    <img src="imgroom/domlek.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">หอประชุมเล็ก(โดมเล็ก)</h5>
                        <p class="card-text">อุปกรณ์ภายในห้องประชุม:เก้าอี้</p>
                        <p class="card-text">สามารถรองรับคนได้ 100-200 คน</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="imgroom/dom.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">อาคารจิตภักดี</h5>
                        <p class="card-text">อุปกรณ์ภายในห้องประชุม:ไมค์โครโฟน, เก้าอี้</p>
                        <p class="card-text">สามารถรองรับคนได้ 200 ขึ้นไป</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="card" >
                    <img src="imgroom/tanow.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">ห้องประชุมตะนาวศรี</h5>
                        <p class="card-text">อุปกรณ์ภายในห้องประชุม:ไมค์โครโฟน, เก้าอี้, โปรเจ็กเตอร์,</p>
                        <p class="card-text">สามารถรองรับคนได้ 80-150 คน</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <img src="imgroom/sod.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">ห้องโสตทัศนศึกษา</h5>
                        <p class="card-text">อุปกรณ์ภายในห้องประชุม:ไมค์โครโฟน, เก้าอี้, โปรเจ็กเตอร์</p>
                        <p class="card-text">สามารถรองรับคนได้ 80-150 คน</p>
                    </div>
                </div>
            </div>
           
            
        </div>
        <div class="row mt-4">
        <div class="col col-6">
                <div class="card" >
                    <img src="imgroom/song.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">อาคารอเนกประสงค์</h5>
                        <p class="card-text">อุปกรณ์ภายในห้องประชุม:ไมค์โครโฟน, เก้าอี้, โปรเจ็กเตอร์, TV</p>
                        <p class="card-text">สามารถรองรับคนได้ 100-200 คน</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>