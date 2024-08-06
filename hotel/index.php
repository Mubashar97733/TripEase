<?php include("function.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TripEase</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="img/apple-favicon.png" rel="apple-touch-icon">

    <!-- Vendor CSS File -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/slick/slick.css" rel="stylesheet">
    <link href="vendor/slick/slick-theme.css" rel="stylesheet">
    <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/hover-style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_REQUEST['hotel'])) {
    ?>
        <!-- Header Section Start -->
        <header id="header">
            <!-- <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a> -->
            <div class="phone"><i class="fa fa-phone text-white"></i>
                <?php
                foreach ($hotel as $number) {
                    ?>
                    <a href="http://wa.me/<?php echo $number['hotel_number']; ?>" target="_blank" style="color: #fff !important;" rel="noopener noreferrer"><?php echo $number['hotel_number']; ?></a>
                    <?php
                }
                ?>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Room Section Start -->
        <div id="rooms">
            <div class="container">
                <div class="section-header">
                        <?php
                            if($hotel){
                                foreach ($hotel as $number) {
                                    ?>
                                    <h2><?php echo $number['hotel_name']." (".$number['hotel_city'].")"; ?></h2>
                                    <p><?php echo $number['hotel_detail']; ?></p>
                                    <?php
                                }
                            }
                        ?>
                    
                    
                </div>
                <div class="row">
                    <?php
                    $no = 1;
                    if($hotel_detail){
                        foreach ($hotel_detail as $hotel) {
                            if ($no % 2 == 1) {
                                $no++;
                                ?>
                                <div class="col-md-12 room">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="room-img">
                                                <img src="img/room/<?php echo $hotel['hd_pic']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="room-des">
                                                <h3><?php echo $hotel['hd_name']; ?></h3>
                                                <h1><span>PKR: </span><?php echo $hotel['hd_price']; ?><span>/ Night</span></h1>
                                                <ul class="room-size">
                                                    <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                                    <li><i class="fa fa-arrow-right"></i>Beds: <?php echo $hotel['hd_beds']; ?> Single(s) </li>
                                                </ul>
                                                <ul class="room-icon">
                                                    <li class="icon-1"></li>
                                                    <li class="icon-2"></li>
                                                    <li class="icon-3"></li>
                                                    <li class="icon-4"></li>
                                                    <li class="icon-5"></li>
                                                    <li class="icon-6"></li>
                                                    <li class="icon-7"></li>
                                                    <li class="icon-8"></li>
                                                    <li class="icon-10"></li>
                                                </ul>
                                                <div class="room-link">
                                                    <!-- <a href="#" data-toggle="modal" data-target="#modal-id">Read More</a> -->
                                                    <a href="<?php echo $hotel['hd_id']; ?>">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                $no++;
                                ?>
                                    <div class="col-md-12 room">
                                        <div class="row">
                                            <div class="col-md-6 d-block d-md-none">
                                                <div class="room-img">
                                                    <img src="img/room/<?php echo $hotel['hd_pic']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="room-des">
                                                    <h3><?php echo $hotel['hd_name']; ?></h3>
                                                    <h1><span>PKR: </span><?php echo $hotel['hd_price']; ?><span>/ Night</span></h1>
                                                    <ul class="room-size">
                                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                                        <li><i class="fa fa-arrow-right"></i>Beds: <?php echo $hotel['hd_beds']; ?> Single(s) </li>
                                                    </ul>
                                                    <ul class="room-icon">
                                                        <li class="icon-1"></li>
                                                        <li class="icon-2"></li>
                                                        <li class="icon-3"></li>
                                                        <li class="icon-4"></li>
                                                        <li class="icon-5"></li>
                                                        <li class="icon-6"></li>
                                                        <li class="icon-7"></li>
                                                        <li class="icon-8"></li>
                                                        <li class="icon-10"></li>
                                                    </ul>
                                                    <div class="room-link">
                                                        <!-- <a href="#" data-toggle="modal" data-target="#modal-id">Read More</a> -->
                                                        <a href="../login.php?hr=h">Book Now</a>
                                                        <a href="<?php echo $hotel['hd_id']; ?>">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-none d-md-block">
                                                <div class="room-img">
                                                    <img src="img/room/<?php echo $hotel['hd_pic']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    } else{
                        ?>
                            <div class="col-12 w-100">
                                <div class="alert alert-danger text-center p-3">
                                    <strong>
                                        No Details Found!
                                    </strong>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Room Section End -->
    <?php
    }
    ?>

    <!-- Modal for Room Section Start -->
    <div id="modal-id" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="port-slider">
                                <div><img src="img/room-slider/room-1.jpg"></div>
                                <div><img src="img/room-slider/room-2.jpg"></div>
                                <div><img src="img/room-slider/room-3.jpg"></div>
                                <div><img src="img/room-slider/room-4.jpg"></div>
                                <div><img src="img/room-slider/room-5.jpg"></div>
                                <div><img src="img/room-slider/room-6.jpg"></div>
                            </div>
                            <div class="port-slider-nav">
                                <div><img src="img/room-slider/room-1.jpg"></div>
                                <div><img src="img/room-slider/room-2.jpg"></div>
                                <div><img src="img/room-slider/room-3.jpg"></div>
                                <div><img src="img/room-slider/room-4.jpg"></div>
                                <div><img src="img/room-slider/room-5.jpg"></div>
                                <div><img src="img/room-slider/room-6.jpg"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2>Lorem ipsum dolor</h2>
                            <p>
                                Lorem ipsum dolor viverra purus imperdiet rhoncus imperdiet. Suspendisse vulputate condimentum ligula sollicitudin hendrerit. Phasellus luctus, elit et ultrices interdum, neque mi pellentesque massorci. Nam in cursus ex, nec mattis lectus. Curabitur quis elementum nunc. Mauris iaculis, justo eu aliquam sagittis, arcu eros cursus libero, sit amet eleifend dolor odio at lacus.
                            </p>
                            <div class="modal-link">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Room Section End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JavaScript File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/jquery-migrate.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/easing/easing.min.js"></script>
    <script src="vendor/stickyjs/sticky.js"></script>
    <script src="vendor/superfish/hoverIntent.js"></script>
    <script src="vendor/superfish/superfish.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/tempusdominus/js/moment.min.js"></script>
    <script src="vendor/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Booking Javascript File -->
    <script src="js/booking.js"></script>
    <script src="js/jqBootstrapValidation.min.js"></script>

    <!-- Main Javascript File -->
    <script src="js/main.js"></script>
</body>

</html>