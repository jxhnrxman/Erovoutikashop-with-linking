<!DOCTYPE html>
<html lang="en">

    <?php
            require "common/metadata.php";
            require "common/head.php";   
            if (!isset ($_GET['id']) ) {  
                header("Location: error.php", TRUE, 301);
            } else {  
                $id = (int)$_GET['id'];  
                require "config/connect.php";
                $product_sql = "CALL QueryProduct($id)";
                $product_result = $conn->query($product_sql);
                $product_row = $product_result->fetch_array();
                mysqli_close($conn);
    
                require "config/connect.php";
                $category_sql = "CALL QueryProductCategory($id)";
                $category_result = $conn->query($category_sql);
                $category_row = $category_result->fetch_array();
                mysqli_close($conn);
            }      
    ?> 

<body>
        <?php
            require "common/header.php";
            require "common/menu.php";  
        ?> 
        
        <div id="QuicksPlaceholder">
        </div>
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--white">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Product Details</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--black">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="search.php">Shop</a></li>
                                    <li><?php echo $category_row['name'] ?></li>
                                    <li class="active" aria-current="page"><?php echo $product_row['name'] ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start Product Details Section -->
    <div class="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <!-- Start Large Image -->
                        <div class="product-large-image product-large-image-horaizontal">
                                <div class="product-image-large-image img-responsive">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_row['thumbnail']); ?>" alt="">
                                </div>
                        </div>
                        <!-- End Large Image -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title"><?php echo $product_row['name']; ?></h4>
                            <div class="d-flex align-items-center">
                                <ul class="review-star">
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="empty"><i class="ion-android-star"></i></li>
                                </ul>
                                <a href="#" class="customer-review ml-2"> 20 Customer Reviews</a>
                            </div>
                            <div class="price">₱<?php echo $product_row['price']; ?></div>
                            <p><?php echo $product_row['descriptionn']; ?></p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            <h4 class="title">Available Options</h4>
                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                                <div class="product-stock"> <span class="product-stock-in"><i
                                            class="ion-checkmark-circled"></i></span> <?php echo $product_row['stock']; ?> IN STOCK</div>
                            </div>

                            <!-- Product Variable Single Item NOT YET USED,  PLANNED -->
<!--                             <div class="variable-single-item">
                                <span>Type</span>
                                <select class="product-variable-size">
                                    <option selected value="1"> size in option</option>
                                    <option value="2">s</option>
                                    <option value="3">m</option>
                                    <option value="4">l</option>
                                    <option value="5">xl</option>
                                    <option value="6">xxl</option>
                                </select>
                            </div> -->

                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center ">
                                <div class="variable-single-item ">
                                    <span>Quantity</span>
                                    <div class="product-variable-quantity">
                                        <input min="1" max=<?php echo $product_row['stock']; ?> value="1" type="number">
                                    </div>
                                </div>

                                <div class="product-add-to-cart-btn">
                                    <a data-type="quick" id= "cart-<?php echo $product_row['id']; ?>">+ Add To Cart</a>
                                </div>
                            </div>
                            <!-- Start  Product Details Meta Area-->
                            <div class="product-details-meta mb-20">
                                <a href="wishlist.php" class="icon-space-right"><i class="icon-heart"></i>Add to
                                    Wishlist</a>
                            </div> <!-- End  Product Details Meta Area-->
                        </div> <!-- End Product Variable Area -->

                        <!-- Start  Product Details Catagories Area-->
                        <div class="product-details-catagory mb-2">
                            <span class="title">Category:</span>
                            <ul>
                                <li><?php echo $category_row['name'] ?></li>
                            </ul>
                        </div> <!-- End  Product Details Catagories Area-->


                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

    <!-- Start Product Content Tab Section -->
    <div class="product-details-content-tab-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Product Details Tab Button -->
                        <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                            <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                    Reviews
                                </a></li>
                        </ul> <!-- End Product Details Tab Button -->

                        <!-- Start Product Details Tab Content -->
                        <div class="product-details-content-tab">
                            <div class="tab-content">
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="review">
                                    <div class="single-tab-content-item">
                                        <!-- Start - Review Comment -->
                                        <ul class="comment">
                                            <!-- Start - Review Comment list-->
                                            <li class="comment-list">
                                                <div class="comment-wrapper">
                                                    <div class="comment-img">
                                                        <img src="assets/images/user/image-1.png" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-content-top">
                                                            <div class="comment-content-left">
                                                                <h6 class="comment-name">Kaedyn Fraser</h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-content-right">
                                                                <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>

                                                        <div class="para-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Tempora inventore dolorem a unde modi iste odio amet,
                                                                fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                provident modi alias culpa, inventore deserunt
                                                                accusantium amet earum soluta consequatur quasi eum eius
                                                                laboriosam, maiores praesentium explicabo enim dolores
                                                                quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                officia, saepe repellat. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start - Review Comment Reply-->
                                                <ul class="comment-reply">
                                                    <li class="comment-reply-list">
                                                        <div class="comment-wrapper">
                                                            <div class="comment-img">
                                                                <img src="assets/images/user/image-2.png" alt="">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-content-top">
                                                                    <div class="comment-content-left">
                                                                        <h6 class="comment-name">Oaklee Odom</h6>
                                                                    </div>
                                                                    <div class="comment-content-right">
                                                                        <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                    </div>
                                                                </div>

                                                                <div class="para-content">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipisicing elit. Tempora inventore dolorem a
                                                                        unde modi iste odio amet, fugit fuga aliquam,
                                                                        voluptatem maiores animi dolor nulla magnam ea!
                                                                        Dignissimos aspernatur cumque nam quod sint
                                                                        provident modi alias culpa, inventore deserunt
                                                                        accusantium amet earum soluta consequatur quasi
                                                                        eum eius laboriosam, maiores praesentium
                                                                        explicabo enim dolores quaerat! Voluptas ad
                                                                        ullam quia odio sint sunt. Ipsam officia, saepe
                                                                        repellat. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> <!-- End - Review Comment Reply-->
                                            </li> <!-- End - Review Comment list-->
                                            <!-- Start - Review Comment list-->
                                            <li class="comment-list">
                                                <div class="comment-wrapper">
                                                    <div class="comment-img">
                                                        <img src="assets/images/user/image-3.png" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-content-top">
                                                            <div class="comment-content-left">
                                                                <h6 class="comment-name">Jaydin Jones</h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-content-right">
                                                                <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>

                                                        <div class="para-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Tempora inventore dolorem a unde modi iste odio amet,
                                                                fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                provident modi alias culpa, inventore deserunt
                                                                accusantium amet earum soluta consequatur quasi eum eius
                                                                laboriosam, maiores praesentium explicabo enim dolores
                                                                quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                officia, saepe repellat. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> <!-- End - Review Comment list-->
                                        </ul> <!-- End - Review Comment -->
                                        <div class="review-form">
                                            <div class="review-form-text-top">
                                                <h5>ADD A REVIEW</h5>
                                                <p>Your email address will not be published. Required fields are marked
                                                    *</p>
                                            </div>

                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="default-form-box">
                                                            <label for="comment-name">Your name <span>*</span></label>
                                                            <input id="comment-name" type="text"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="default-form-box">
                                                            <label for="comment-email">Your Email <span>*</span></label>
                                                            <input id="comment-email" type="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label for="comment-review-text">Your review
                                                                <span>*</span></label>
                                                            <textarea id="comment-review-text"
                                                                placeholder="Write a review" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-md btn-black-default-hover"
                                                            type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                            </div>
                        </div> <!-- End Product Details Tab Content -->

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Content Tab Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">RELATED PRODUCTS</h3>
                                <p>Add our best sellers to your shopping list.</p>
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
                                    <!-- Query random products to display -->
                                    <!-- Start Product Default Single Item -->
                                    <?php
                                        require "config/connect.php";
                                        $sql = "SELECT * FROM products_table ORDER BY RAND () LIMIT 8;";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while($product_row = $result->fetch_assoc()) { ?>
                                                <div class="product-default-single-item product-color--golden swiper-slide">
                                                    <div class="image-box">
                                                        <a href="product-details.php?id=<?php echo $product_row['id']; ?>" class="image-link">
                                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_row['thumbnail']); ?>"alt="">
                                                        </a>
                                                        <div class="action-link">
                                                            <div class="action-link-left">
                                                                <a  data-type="quick" id= "cart-<?php echo $product_row['id']; ?>">Add to Cart</a>
                                                            </div>
                                                            <div class="action-link-right">
                                                                <a data-type="quick" id= "view-<?php echo $product_row['id']; ?>"><i class="icon-magnifier"></i></a>
                                                                <a href="wishlist.php"><i class="icon-heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-left">
                                                        <h6 class="title"><a href="product-details.php?id=<?php echo $product_row['id']; ?>"><?php echo $product_row['name']?></a></h6>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="content-right">
                                                            <span class="price">₱<?php echo $product_row['price']?></span>
                                                        </div>
                                                    </div>
                                                </div>                                                    
                                            <?php
                                                }
                                            } 
                                            mysqli_close($conn);
                                            ?>   
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

    <?php
            require "common/footer.php";
            require "common/js.php";
    ?> 
    
</body>



</html>