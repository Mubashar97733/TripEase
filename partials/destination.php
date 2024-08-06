<div class="container-fluid packages py-5" id="locations">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Destinations</h5>
            <h1 class="mb-0">Let's Explore Together</h1>
        </div>
        <div class="packages-carousel owl-carousel">
            <?php
            if ($page == "index.php") {
                location("pakistan");
            } else {
                location($location);
            }
            ?>
        </div>
    </div>
</div>