<!-- single_image.php -->

<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 tm-mb-90">
    <figure class="effect-ming tm-video-item">
        <img src="<?= $row->image; ?>" alt="Image" class="img-fluid">
        <figcaption class="d-flex align-items-center justify-content-center">
            <h2>
                <?= $row->title; ?>
            </h2>
            <a href="<?= $row->url_address; ?>">View more</a>
        </figcaption>
    </figure>
</div><div class="row mb-3 tm-gallery">
    <?php
    if (is_array($data['random_images'])) {

        foreach ($data['random_images'] as $row) {
            # code...
            $this->view("catalog/single_image", $row);
        }
    }
    ?>
</div>