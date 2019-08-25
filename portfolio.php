<?php 
require_once('./config/define.php');
$type = 0;
if(!empty($_GET['type']))
{
    $type = $_GET['type'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/vendor/slick/slick.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/assets/css/app.min.css">
    <title>S.Thana Printing - ผลงานของเรา</title>
</head>
<body>
    <?php require_once('./Layouts/header.php') ?>
    <section style="background: #e9ecef">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ผลงานของเรา</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="title text-center mb-5">
                <h3>ผลงานของเรา</h3>
            </div>
            <div class="filter">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter="all" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==0 ? 'active': ''; ?>">All works</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-2" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==2 ? 'active': ''; ?>">Billboard</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-3" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==3 ? 'active': ''; ?>">Miniboard</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-4" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==4 ? 'active': ''; ?>">Car Wrap</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-5" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==5 ? 'active': ''; ?>">Tower Wrap</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-6" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==6 ? 'active': ''; ?>">Metal Letter (อักษรโลหะ)</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-7" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==7 ? 'active': ''; ?>">จอ LED</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-8" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==8 ? 'active': ''; ?>">Light Box</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-9" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==9 ? 'active': ''; ?>">GSB Project</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-10" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==10 ? 'active': ''; ?>">KTB Project</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-11" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==11 ? 'active': ''; ?>">Inkjet</a>
                    </li>
                    <li class="nav-item mr-3 mb-3">
                        <a data-filter=".type-12" data-toggle="pill" href="javascript:void(0)" class="nav-link border <?php echo $type==12 ? 'active': ''; ?>">Accessories</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="mix type-2 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-1.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-3 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-2.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-4 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-3.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-5 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-4.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-6 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-5.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-7 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-6.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-8 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-7.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-9 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-8.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-10 type-4 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-9.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-11 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-10.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-12 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-11.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                    <div class="mix type-12 col-lg-4 col-md-6 col-12">
                        <a href="<?php echo BASEURL; ?>portfolio-single" class="card border-0 mb-4">
                            <img src="<?php echo BASEURL;?>assets/images/portfolio/portfolio-12.jpg" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <div class="card-text">Morbi non lacus ac sapien molestie</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('./Layouts/footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASEURL;?>/vendor/slick/slick.min.js"></script>
    <script src="<?php echo BASEURL;?>/vendor/mixitup/mixitup.min.js"></script>
    <script>
        var mixer = mixitup('.filter');
        <?php if($type<>0):?>
        mixer.filter('.type-<?php echo $type; ?>');
        <?php endif; ?>
    </script>
</body>
</html>