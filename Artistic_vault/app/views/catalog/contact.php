<?php $this->view("catalog/header", $data); ?>

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="<?= ASSETS ?>catalog/img/hero.jpg"></div>

<div class="container-fluid tm-mt-60">
    <div class="row tm-mb-50">
        <div class="col-lg-4 col-12 mb-5">
            <h2 class="tm-text-primary mb-5">Contact Page</h2>
            <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                <div class="form-group">
                    <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                </div>
                <div class="form-group">
                    <select class="form-control" id="contact-select" name="inquiry">
                        <option value="-">GOSSIP</option>
                        <option value="sales">Improvement &amp; Suggestion</option>
                        <option value="creative">Creative Design</option>
                        <option value="uiux">Contract</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message"
                        required=></textarea>
                </div>

                <div class="form-group tm-text-right">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-12 mb-5">
            <div class="tm-address-col">
                <h2 class="tm-text-primary mb-5">Our Address</h2>
                <p class="tm-mb-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, pariatur
                    voluptates perspiciatis neque recusandae eius! </p>
                <p class="tm-mb-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima ad a repellendus,
                    provident sequi ut?</p>
                <address class="tm-text-gray tm-mb-50">
                    plot no. 100 dev Nagar 3rd<br>
                    jaisingh pura khor,jaipur,rajasthan.
                </address>
                <ul class="tm-contacts">
                    <li>
                        <a href="#" class="tm-text-gray">
                            <i class="fas fa-envelope"></i>
                            Email: dhakedl640@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tm-text-gray">
                            <i class="fas fa-phone"></i>
                            Tel: +91 9521489666
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tm-text-gray">
                            <i class="fas fa-globe"></i>
                            URL: artistryvault.rf.gd
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <h2 class="tm-text-primary mb-5">Our Location</h2>
            <!-- Map -->
            <div class="mapouter mb-4">
                <div class="gmap-canvas">
                    <iframe width="100%" height="520" id="gmap-canvas"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6845.13308456709!2d75.8893536!3d26.93915639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1702137092875!5m2!1sen!2sin"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->view("catalog/footer"); ?>