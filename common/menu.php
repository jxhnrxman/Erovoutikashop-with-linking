<!--  Start Offcanvas Mobile Menu Section -->
<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-end">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
        <!-- Start Mobile Menu  -->
        <div class="mobile-menu-bottom">
            <!-- Start Mobile Menu Nav -->
            <div class="offcanvas-menu">
                <ul>
                    <li>
                        <a href="#"><span>Shop</span></a>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Products</a>
                                <ul class="mobile-sub-menu">
                                    <!-- Query Product Categories from Database -->
                                    <?php
                                        require "config/connect.php";
                                        $sql = "CALL QueryCategories";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                echo '<li><a href="search.php">' . $row["name"] . '</a></li>';                            
                                            }
                                        }
                                        mysqli_close($conn);
                                    ?> 
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="faqs.php">FAQs</a></li>                                           
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </div> <!-- End Mobile Menu Nav -->
        </div> <!-- End Mobile Menu -->

        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <address class="address">
                <span>Erovoutika Robotics and Automation Solutions</span>
                <span>PARC HOUSE II, Unit 703</span>
                <span>Epifanio de los Santos Avenue, Makati City</span>
                <span>1212 Metro Manila</span>
                <br></br>
                <span>Mobile: +63 965 354 6415</span>
                <span>Email: sales@erovoutika.ph</span>
            </address>

            <ul class="social-link">
                <li><a href="https://web.facebook.com/erovoutika"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://web.facebook.com/erovoutika"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/erovoutika/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/erovoutika/"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="user-link">
                <li><a href="wishlist.php">Wishlist</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->

    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
</div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

<!-- Start Offcanvas  Menu Section -->
<div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-end">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
        <!-- Start Mobile Menu  -->
        <div class="mobile-menu-bottom">
            <!-- Start Mobile Menu Nav -->
            <div class="offcanvas-menu">
                <ul>
                    <li>
                        <a href="#"><span>Shop</span></a>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Products</a>
                                <ul class="mobile-sub-menu">
                                    <!-- Query Product Categories from Database -->
                                    <li><a href="searchcat1.php">Microcontrollers</a></li> 
                                    <li><a href="searchcat2.php">Modules</a></li> 
                                    <li><a href="searchcat3.php">Motors</a></li> 
                                    <li><a href="searchcat4.php">Sensors</a></li> 
                                    <li><a href="searchcat5.php">Other Products</a></li>    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="faqs.php">FAQs</a></li>                                           
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </div> <!-- End Mobile Menu Nav -->
        </div> <!-- End Mobile Menu -->

        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">

            <address class="address">
                <span>Erovoutika Robotics and Automation Solutions</span>
                <span>PARC HOUSE II, Unit 703</span>
                <span>Epifanio de los Santos Avenue, Makati City</span>
                <span>1212 Metro Manila</span>
                <br></br>
                <span>Mobile: +63 965 354 6415</span>
                <span>Email: sales@erovoutika.ph</span>
            </address>

            <ul class="social-link">
                <li><a href="https://web.facebook.com/erovoutika"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://web.facebook.com/erovoutika"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/erovoutika/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/erovoutika/"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="user-link">
                <li><a href="cart.php">Cart</a></li>
                <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->

    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
</div> <!-- ...:::: End Offcanvas  Menu Section:::... -->

<!-- Start Offcanvas Addcart Section -- NOT YET EDITED -->
<div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-end">
    <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper container">
        <h4 class="offcanvas-title"><strong>SHOPPING CART</strong></h4>
        <ul class="offcanvas-cart">
            <?php
                require "config/connect.php";
                $sql = "SELECT * FROM products_table LIMIT 0,3";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                        <li class="offcanvas-cart-item-single row">
                            <div class="offcanvas-cart-item-block col-11">
                                <a href="" class="offcanvas-cart-item-image-link col-4">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['thumbnail']); ?>" alt=""
                                        class="offcanvas-cart-image">
                                </a>
                                <div class="offcanvas-cart-item-content col-7">
                                    <a href="" class="offcanvas-cart-item-link"><?php echo $row['name']?></a>
                                    <div class="offcanvas-cart-item-details">
                                        <span class="offcanvas-cart-item-details-quantity"><?php echo $row['stock']?> × </span>
                                        <span class="offcanvas-cart-item-details-price">₱<?php echo $row['price']?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="offcanvas-cart-item-delete text-end col-1">
                                <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </li> 
                <?php                                               
                    }
                } else {
                    //throw empty cart
                }
                mysqli_close($conn);
            ?> 
        </ul>
        <div class="offcanvas-cart-total-price">
            <span class="offcanvas-cart-total-price-text">Subtotal:</span>
            <span class="offcanvas-cart-total-price-value">₱170.00</span>
        </div>
        <ul class="offcanvas-cart-action-button row">
            <li><a href="cart.php" class="btn btn-xl btn-black-default-hover col-12">View Cart</a></li>
            <li><a href="checkout.php" class=" btn btn-xl btn-black-default-hover mt-5 col-12">Checkout</a></li>
        </ul>
    </div> <!-- End  Offcanvas Addcart Wrapper -->

</div> <!-- End  Offcanvas Addcart Section -->

<!-- Start Offcanvas Wishlist Section -- NOT YET EDITED -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-end">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- ENd Offcanvas Header -->

    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-wishlist-wrapper container">
        <h4 class="offcanvas-title"><strong>WISHLIST</strong></h4>
        <ul class="offcanvas-wishlist">
            <?php
                require "config/connect.php";
                $sql = "SELECT * FROM products_table LIMIT 0,3";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
            <li class="offcanvas-wishlist-item-single row">
                <div class="offcanvas-wishlist-item-block col-11">
                    <a href="" class="offcanvas-wishlist-item-image-link col-4">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['thumbnail']); ?>"  alt=""
                            class="offcanvas-wishlist-image">
                    </a>
                    <div class="offcanvas-wishlist-item-content col-7">
                        <a href="" class="offcanvas-wishlist-item-link"><?php echo $row['name']?></a>
                        <div class="offcanvas-wishlist-item-details">
                            <span class="offcanvas-wishlist-item-details-quantity"><?php echo $row['stock']?> × </span>
                            <span class="offcanvas-wishlist-item-details-price">₱<?php echo $row['price']?></span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-wishlist-item-delete text-end col-1">
                    <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                </div>
            </li>
            <?php                                               
                    }
                } else {
                    //throw empty cart
                }
                mysqli_close($conn);
            ?> 
        </ul>
        <ul class="offcanvas-wishlist-action-button">
            <li><a href="wishlist.php" class="btn btn btn-xl btn-black-default-hover col-12">View wishlist</a></li>
        </ul>
    </div> <!-- End Offcanvas Mobile Menu Wrapper -->

</div> <!-- End Offcanvas Wishlist Section -->

<!-- Start Offcanvas Search Bar Section -->
<div id="search" class="search-modal">
    <button type="button" class="close">×</button>
    <form action="searchproduct.php" method="post">
        <input type="search" name="searchbar" placeholder="search product(s) here" />
        <button type="submit" class="btn btn-lg btn-primary" name="submitsearch">Search</button>
    </form>

</div>
<!-- End Offcanvas Search Bar Section -->

<!-- Offcanvas Overlay -->
<div class="offcanvas-overlay"></div>