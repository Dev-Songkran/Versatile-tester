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
    <title>S.Thana Printing - ติดต่อเรา</title>
</head>
<body>
    <?php require_once('./Layouts/header.php') ?>
    <section style="background: #e9ecef">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="title text-center mb-5">
                <h3>ติดต่อเรา</h3>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-6">
                    <div class="border-bottom">
                        <h5>Address</h5>
                        <p>บริษัท ส.ธนา ปริ้นท์ติ้ง จำกัด 116/15 หมู่ 1 ต.บางสีทอง อ.บางกรวย จ.นนทบุรี 11130</p>
                        <p>
                            <span class="d-inline-block pr-2"><i class="fa fa-phone-alt text-secondary"></i> 02-446-7919-20, </span>
                            <span class="d-inline-block px-2"><i class="fa fa-fax text-secondary"></i> 02-446-7921, </span>
                            <span class="d-inline-block px-2"><i class="fa fa-envelope-open text-secondary"></i> info@sthana-printing.com</span>
                        </p>
                    </div>
                    <div class="py-3">
                        <p>เราบริการท่านด้วยใจ ความสำเร็จของท่านคืองานของเรา บริการดี มีคุณภาพ ตรงเวลา ราคาถูก</p>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6">
                    <form action="" class="bg-light p-4 mt-4 mt-lg-0 rounded">
                        <div class="form-group">
                            <label for="name">Name: <i class="text-danger">*</i></label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email: <i class="text-danger">*</i></label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tel">Telephone: <i class="text-danger">*</i></label>
                            <input type="text" id="tel" name="tel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment: <i class="text-danger">*</i></label>
                            <textarea name="comment" id="comment" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.2731096006514!2d100.47711331414379!3d13.822632199373881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDQ5JzIxLjUiTiAxMDDCsDI4JzQ1LjUiRQ!5e0!3m2!1sth!2sth!4v1566727775669!5m2!1sth!2sth" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <?php require_once('./Layouts/footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/slick/slick.min.js"></script>
</body>
</html>