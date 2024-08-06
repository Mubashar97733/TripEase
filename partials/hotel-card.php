<div class="container-fluid packages py-5" id="hotels">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Hotels</h5>
            <h1 class="mb-0">Book Your Own Choice</h1>
        </div>
        <div class="packages-carousel owl-carousel">
            <?php
            $condition = array(
                "hotel_city" => $location,
                "hotel_approve" => "1"
            );
            $hotel = display_where("hotels", $condition);
            if ($hotel) {
                foreach ($hotel as $hotel_card) {
            ?>
                    <div class="packages-item"> 
                        <div class="packages-img" style="height: 277px; max-height: 277px;">
                            <?php
                            if ($hotel_card['hotel_pic']) {
                            ?>
                                <img src="admin/assets/images/hotel/<?php echo $hotel_card['hotel_pic']; ?>" class="img-fluid w-100 rounded-top h-100" alt="Image">
                            <?php
                            } else {
                            ?>
                                <img src="admin/assets/images/nopic.png" class="img-fluid w-100 rounded-top h-100" style="border: 1px solid #f2f2f2;" alt="Image">
                            <?php
                            }
                            ?>
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?php echo $hotel_card['hotel_city']; ?></small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i><?php echo $hotel_card['hotel_days']; ?> days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i><?php echo $hotel_card['hotel_persons']; ?> Person</small>
                            </div>
                            <div class="packages-price py-2 px-4"><?php echo 'RS.' . $hotel_card['hotel_price']; ?></div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0"><?php echo $hotel_card['hotel_name']; ?></h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <?php
                                    for ($i = 1; $i <= $hotel_card['hotel_star']; $i++) {
                                        echo '<small class="fa fa-star text-primary"></small>';
                                    }
                                    ?>
                                </div>
                                <p class="mb-4"><?php echo $hotel_card['hotel_detail']; ?></p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-12 text-start px-0">
                                    <a href="hotel/index.php?hotel=<?php echo $hotel_card['hotel_id']; ?>" target="_blank" class="btn-hover btn text-white py-2 px-4">Check All Deals</a>
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
</div>