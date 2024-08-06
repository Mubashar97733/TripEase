<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(
            <?php
            if ($check_child) {
                foreach ($check_child as $child_value) {
                    if ($child_value['location_slider_pic']) {
                        echo 'admin/assets/images/head/' . $child_value['location_slider_pic'];
                    } else {
                        echo 'admin/assets/images/head/breadcrumb-bg.jpg';
                    }
                }
            }
            ?>  
        );
        height: 50vh;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        /* padding: 150px 0 50px 0; */
        display: flex;
        align-items: center;
    }
</style>

<div class="container-fluid position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0">TripEase</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link">Home</a>
                <!-- <a href="#gallery" class="nav-item nav-link">Gallery</a> -->
                <?php
                if ($check_child) {
                    foreach ($check_child as $child_value) {
                        if (!$child_value['location_child']) {
                ?>
                            <a href="#hotels" class="nav-item nav-link">Hotels</a>
                            <a href="#restorant" class="nav-item nav-link">Restorant</a>
                        <?php
                        } else {
                        ?>
                            <a href="#locations" class="nav-item nav-link">Locations</a>
                <?php
                        }
                    }
                }
                ?>
            </div>
            <a href="#feedback" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Feedback</a>
        </div>
    </nav>
</div>

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <?php
        echo '<h3 class="text-white display-3 mb-4">' . $location . '</h1>';
        ?>
        <ol class="breadcrumb justify-content-center mb-0 text-white">
            <?php
            if ($check_child) {
                foreach ($check_child as $child_value) {
                    if (!$child_value['location_child']) {
                        ?>
                        <li class="breadcrumb-item text-white"><a href="index.php">Pakistan</a></li>
                        <li class="breadcrumb-item text-white"><a href="location.php?location=<?php echo $child_value['location_parent']; ?>"><?php echo $child_value['location_parent']; ?></a></li>
                        <li class="breadcrumb-item text-white"><a href="#home"><?php echo $child_value['location_name']; ?></a></li>
                        <?php
                    } else {
                        ?>
                        <li class="breadcrumb-item text-white"><a href="index.php">Pakistan</a></li>
                        <li class="breadcrumb-item text-white"><a href="#home"><?php echo $child_value['location_name']; ?></a></li>
                        <?php
                    }
                }
            }
            ?>
        </ol>
    </div>
</div>