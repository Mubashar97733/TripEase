<?php

include("admin/functions/main-function.php");


function location($location)
{
    $condition = array(
        "location_parent" => $location,
    );
    $data = display_where("location", $condition);
    if ($data) {
        foreach ($data as $getdata) {
?>
            <div class="packages-item h-100">
                <div class="packages-img" style="max-height: 277px; height: 277px;">
                    <?php
                    if ($getdata['location_card_pic'] == NULL) {
                    ?>
                        <img src="admin/assets/images/nopic.png" class="img-fluid w-100 rounded-top h-100" alt="Image" style="border: 1px solid #f2f2f2; border-bottom: 0cm;">
                    <?php
                    } else {
                    ?>
                        <img src="admin/assets/images/locations/<?php echo $getdata["location_card_pic"]; ?>" class="img-fluid w-100 rounded-top h-100" alt="Image">
                    <?php
                    }
                    ?>
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?php echo $getdata["location_name"].", ".$getdata['location_parent']; ?></small>
                    </div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0"><?php echo $getdata["location_name"]; ?></h5>
                        <div class="mb-3">
                            <?php
                            for ($i = 1; $i <= $getdata["location_card_star"]; $i++) {
                                echo '<small class="fa fa-star text-primary"></small>';
                            }
                            ?>
                        </div>
                        <p class="mb-4"><?php echo substr($getdata["location_paragraph"], 0, 115) . "..."; ?></p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0 ">
                        <div class="col-12 text-start px-0">
                            <a href="location.php?location=<?php echo $getdata["location_name"]; ?>" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
}


