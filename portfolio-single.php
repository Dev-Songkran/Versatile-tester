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
    <title>S.Thana Printing - เกี่ยวกับเรา</title>
</head>
<body>
    <?php require_once('./Layouts/header.php') ?>
    <section style="background: #e9ecef">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="./portfolio">ผลงานของเรา</a></li>
                    <li class="breadcrumb-item"><a href="./portfolio/Billboard">Billboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Morbi non lacus ac sapien molestie</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="title text-center mb-5">
                <h2>Morbi non lacus ac sapien molestie</h2>
            </div>
            <figure class="figure">
                <img src="./assets/images/portfolio/portfolio-detail-1.jpg" class="figure-img img-fluid rounded" alt="...">
            </figure>
            <div class="row">
                <div class="col-12 col-md-3 col-lg-4 mb-3 mb-md-0">
                    <div class="bg-light rounded p-3">
                        <p><i class="fa fa-tags text-secondary"></i> Billboard</p>
                        <p><i class="fa fa-user text-secondary"></i> John Example</p>
                        <p class="mb-0"><i class="fa fa-clock text-secondary"></i> March 2015</p>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-8">
                    <h5>รายละเอียด</h5>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto accusantium sapiente quam beatae earum voluptates illo magnam asperiores temporibus eligendi fugiat corrupti ipsa perspiciatis magni optio recusandae quos! Hic quos laborum maiores quia non doloribus aspernatur architecto qui esse saepe expedita possimus excepturi nobis ex cumque ipsam eum animi sequi ratione vero sint ipsum officia voluptas earum voluptatum! Sunt maiores libero odio in totam illum esse laudantium voluptates asperiores voluptatem perferendis</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="title mb-4">
                <h4>More Portfolio</h4>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                        <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-9.jpg" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-text">Morbi non lacus ac sapien molestie</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                        <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-10.jpg" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-text">Morbi non lacus ac sapien molestie</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                        <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-11.jpg" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-text">Morbi non lacus ac sapien molestie</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                        <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-12.jpg" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-text">Morbi non lacus ac sapien molestie</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('./Layouts/footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/slick/slick.min.js"></script>
    <script>$('.about-slider').slick({})</script>
</body>
</html>