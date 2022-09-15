<!DOCTYPE html>
<html lang="en">

    <?php
        require "common/metadata.php";
        require "common/head.php";
    ?> 

<body>
    <?php
        require "common/header.php";
        require "common/menu.php";
    ?> 

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--white">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Contact Us</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--blue breadcrumb-nav-hover-color--blue">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...::::Start Contact Section:::... -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Start Contact Details -->
                    <div class="contact-details-wrapper" data-aos="fade-up" data-aos-delay="0">
                        <div class="contact-details">
                            <!-- Start Contact Details Single Item -->
                            <div class="contact-details-single-item">
                                <div class="contact-details-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-details-content contact-phone">
                                    <a href="mob:+09653546415">09653546415</a>
                                </div>
                            </div> <!-- End Contact Details Single Item -->
                            <!-- Start Contact Details Single Item -->
                            <div class="contact-details-single-item">
                                <div class="contact-details-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="contact-details-content contact-phone">
                                    <a href="mailto:sales@erovoutika.ph">sales@erovoutika.ph</a>
                                    <a href="http://erovoutika.ph">erovoutika.ph</a>
                                </div>
                            </div> <!-- End Contact Details Single Item -->
                            <!-- Start Contact Details Single Item -->
                            <div class="contact-details-single-item">
                                <div class="contact-details-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-details-content contact-phone">
                                    <address class="address">
                                        <span>Erovoutika Robotics and Automation Solutions</span>
                                        <span>PARC HOUSE II, Unit 703</span>
                                        <span>Epifanio de los Santos Avenue, Makati City</span>
                                        <span>1212 Metro Manila</span>
                                    </address>
                                </div>
                            </div> <!-- End Contact Details Single Item -->
                        </div>
                        <!-- Start Contact Social Link -->
                        <div class="contact-social">
                            <h4>FOLLOW US</h4>
                            <ul>
                                <li><a href="https://web.facebook.com/erovoutika"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://web.facebook.com/erovoutika"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/erovoutika/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/erovoutika/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- End Contact Social Link -->
                    </div> <!-- End Contact Details -->
                </div>
                <div class="col-lg-7">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="200">
                        <h3>Get In Touch</h3>
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-name">Name</label>
                                        <input name="name" type="text" id="contact-name" placeholder="Insert your Name Here">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-email">Email</label>
                                        <input name="email" type="email" id="contact-email" placeholder="Insert your Email Address Here">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-subject">Subject</label>
                                        <input name="subject" type="text" id="contact-subject" placeholder="Insert Subject Here">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="default-form-box mb-20">
                                        <label for="contact-message">Your Message</label>
                                        <textarea name="message" id="contact-message" cols="30" rows="10" placeholder="Type your Message Here"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">SEND</button>
                                </div>
                                <p class="form-messege"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::::ENd Contact Section:::... -->

    <!-- ...::::Start Map Section:::... -->
    <div class="map-section aos-init aos-animate section-top-gap-100" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6138136987465!2d121.04288441477014!3d14.564063281875686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c859e1e12fcf%3A0xcf2b24a540bf8ad5!2sParc%20House!5e0!3m2!1sen!2sph!4v1647828287181!5m2!1sen!2sph" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::::End  Map Section:::... -->


            <?php
            require "common/footer.php";
            require "common/js.php";
    ?> 

  
</body>


</html>