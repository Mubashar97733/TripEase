<div class="container-fluid packages py-5" id="restorant">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Restorants</h5>
            <h1 class="mb-0">Check Menu Of Restorant's Located Near</h1>
        </div>
        <div class="packages-carousel owl-carousel">
            <?php
            $condition = array(
                "rest_city" => $location,
                "rest_approve" => "1"
            );
            $rest = display_where("restorant", $condition);
            if ($rest) {
                foreach ($rest as $rest_card) {
            ?>
                    <div class="packages-item">
                        <div class="packages-img" style="height: 277px; max-height: 277px;">
                            <?php
                            if ($rest_card['rest_pic']) {
                            ?>
                                <img src="admin/assets/images/restorant/<?php echo $rest_card['rest_pic']; ?>" class="img-fluid w-100 rounded-top h-100" alt="Image">
                            <?php
                            } else {
                            ?>
                                <img src="admin/assets/images/nopic.png" class="img-fluid w-100 rounded-top h-100" style="border: 1px solid #f2f2f2;" alt="Image">
                            <?php
                            }
                            ?>
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?php echo $rest_card['rest_city']; ?></small>
                            </div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0"><?php echo $rest_card['rest_name']; ?></h5>
                                <small class="text-uppercase">Restorant Menu</small>
                                <div class="mb-3">
                                    <?php
                                    for ($i = 1; $i <= $rest_card['rest_star']; $i++) {
                                        echo '<small class="fa fa-star text-primary"></small>';
                                    }
                                    ?>
                                </div>
                                <p class="mb-4"><?php echo $rest_card['rest_detail']; ?></p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-12 text-start px-0">
                                    <a href="restorant.php?rest=<?php echo $rest_card['rest_id']; ?>" target="_blank" class="btn-hover btn text-white py-2 px-4">Check Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- <div class="container pb-5 text-center justify-content-center">
        <a href="all-restorant.php" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">View All Restorant</a>
    </div> -->
</div>
