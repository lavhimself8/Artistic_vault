<?php $this->view("catalog/header", $data); ?>

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="img/hero.jpg">
    <form class="d-flex tm-search-form">
        <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success tm-search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">
            <?= $data['image']->title ?>
        </h2>
    </div>
    <div class="row tm-mb-90">
        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
            <?php
            // Option 3: Check for Special Characters in Image Filename
            $imageName = str_replace(' ', '_', $data['image']->image);
            $imagePath = ROOT . $imageName;
            list($width, $height) = getimagesize($imagePath);

            // Get image format
            $imageFormat = pathinfo($imagePath, PATHINFO_EXTENSION);

            ?>
            <img src="<?= ROOT . $data['image']->image ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
            <div class="tm-bg-gray tm-video-details">
                <!-- <p class="mb-4">
                        Please support us by making <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a PayPal donation</a>. Nam ex nibh, efficitur eget libero ut, placerat aliquet justo. Cras nec varius leo.
                    </p> -->
                <div class="text-center mb-5">
                    <a href="<?= ROOT . $data['image']->image ?>" class="btn btn-primary tm-btn-big"
                        download>Download</a>
                </div>
                <div class="mb-4 d-flex flex-wrap">
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">Dimension: </span>
                        <span class="tm-text-primary">
                            <?= $width ?>x
                            <?= $height ?>
                        </span>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">Format: </span>
                        <span class="tm-text-primary">
                            <?= strtoupper($imageFormat) ?>
                        </span>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="tm-text-gray-dark mb-3">License</h3>
                    <p>Free for both personal and commercial use. No need to pay anything. No need to make any
                        attribution.</p>
                </div>
                <div>
                    <h3 class="tm-text-gray-dark mb-3">Tags</h3>
                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Cloud</a>
                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Bluesky</a>
                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Nature</a>
                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Background</a>
                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Timelapse</a>
                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Night</a>
                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Real Estate</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">
            Related Photos
        </h2>
    </div>
    <div class="row mb-3 tm-gallery">
        <?php
        if (is_array($data['random_images'])) {

            foreach ($data['random_images'] as $row) {
                # code...
                $this->view("catalog/single_image", $row);
            }
        }
        ?>
    </div> <!-- row -->
</div> <!-- container-fluid, tm-container-content -->

<?php $this->view("catalog/footer", $data); ?>