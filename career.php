<?php require_once('./config/define.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="./vendor/slick/slick.css">
    <link rel="stylesheet" href="./assets/css/app.min.css">
    <title>S.Thana Printing - ร่วมงานกับเรา</title>
</head>
<body>
    <?php require_once('./Layouts/header.php') ?>
    <section style="background: #e9ecef">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ร่วมงานกับเรา</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="title text-center mb-5">
                <h3>ร่วมงานกับเรา</h3>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <img class="rounded" src="https://source.unsplash.com/Oalh2MojUuk/1200x500" width="100%">
                </div>
                <div class="col-12 col-lg-6">
                    <p> ด้วยกระบวนการผลิตที่พิถีพิถันทุกขั้นตอน จึงได้รับความไว้วางใจจากลูกค้าเสมอมา เรายึดถือและปฏิบัติด้วยความพึงพอใจสูงสุดของลูกค้า
                    "เราบริการด้วยใจ ความสำเร็จของท่านคืองานของเรา บริการดี มีคุณภาพ ตรงเวลา ราคาถูก"</p>
                    <p>สนใจสมัครงาน ส่งหลักฐานการสมัครงานได้ที่ info@sthana-printing.com
                    ติดต่อสอบถามได้ที่ 02-446-7919-20</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="title text-center mb-4 text-white">
                <h4>Latest jobs openings</h4>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card border-0">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link d-block text-left w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">พนักงานสโตร์ออฟฟิต</button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <img src="http://placehold.it/370" width="100%" alt="">
                                </div>
                                <div class="col-sm-12 col-md-8 mt-4 mt-md-0">
                                    <h6 class="card-title">คุณสมบัติ</h6>
                                    <p class="card-text">1. ช/ญ ไม่จำกัดอายุ</p>
                                    <p class="card-text">2. วุฒิ ม.6 / ปวช. ขึ้นไป</p>
                                    <p class="card-text">3. ใช้โปรแกรมคอมพิวเตอร์พื้นฐานได้</p>
                                    <p class="card-text">4. มีความรู้ในส่วนของอุปกรณ์ช่างพื้นฐาน</p>
                                    <p class="card-text">บริษัทมีสวัสดิการให้</p>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('./Layouts/footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/slick/slick.min.js"></script>
</body>
</html>