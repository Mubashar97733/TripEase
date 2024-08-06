<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonial</h5>
            <h1 class="mb-0">Our Clients Say!!!</h1>
        </div>
        <div class="testimonial-carousel owl-carousel">

            <?php
            $condition = array(
                "test_approve" => "1"
            );
            $data = display_where("testimonials", $condition);
            if ($data) {
                foreach ($data as $getdata) {
                    ?>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">
                                <?php echo $getdata['test_review']; ?>
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <?php
                            if($getdata['test_pic']==NULL){
                                ?>
                                <img src="admin/assets/images/noman.png" class="img-fluid rounded-circle" alt="Image">
                                <?php
                            }else{
                                ?>
                                <img src="admin/assets/images/test/<?php echo $getdata['test_pic']; ?>" class="img-fluid rounded-circle" alt="Image">
                                <?php
                            }
                            ?>
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0"><?php echo $getdata['test_name']; ?></h5>
                            <p class="mb-0"><?php echo $getdata['test_city'] . ", Pakistan"; ?></p>
                            <div class="d-flex justify-content-center">
                                <?php
                                for($i=1; $i<=$getdata['test_star']; $i++){
                                    echo '<i class="fas fa-star text-primary"></i>';
                                }
                                ?>
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