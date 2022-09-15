<?php
require "config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
require "common/metadata.php";
?>

<head>
    <title>All Products</title>
    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!--    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css">
-->
</head>
</body>

<?php
require "common/header.php";
require "common/menu.php";
require "common/quicks.php";
?>



<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">FEATURED PRODUCTS</h3>
                            <p>Feel Free To View Our Products!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Product Default Single Item -->
                                <?php
                                // Get data from database 
                                $result = $conn->query("SELECT * FROM products_table ORDER BY id ASC");
                                ?>
                                <?php if ($result->num_rows > 0) { ?>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <img style="width: 250px; height: 250px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['thumbnail']); ?>" />
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="#"><?php echo ($row['name']); ?></a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price"><?php echo "₱" . ($row['price']); ?></span>
                                                </div>

                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <p class="status error">Image(s) not found...</p>
                                <?php } ?>
                                <!-- End Product Default Single Item -->
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->

<div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content-gap">
                    <div class="secton-content">
                        <h3 class="section-title">ALL PRODUCTS</h3>
                        <p>Products and Its Description.</p>
                        <?php
                        // Get data from database 
                        $result = $conn->query("SELECT * FROM products_table ORDER BY id ASC");
                        ?>

                        <?php if ($result->num_rows > 0) { ?>
                            <div>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <h2><?php echo ($row['name']); ?><span style="color: blue;"><?php echo "&nbsp;&nbsp;&nbsp;₱" . ($row['price']); ?></span></h2>
                                    <img style="width: 300px; height: 300px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['thumbnail']); ?>" />
                                    <p><?php echo ($row['description']); ?></p>
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <p class="status error">Image(s) not found...</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "common/footer.php";
require "common/js.php";
?>

</body>

</html>