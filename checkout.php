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
                        <h3 class="breadcrumb-title">Checkout</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--black">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="search.php">Shop</a></li>
                                    <li class="active" aria-current="page">Checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Checkout Section:::... -->
    <div class="checkout-section">
        <div class="container">
            <div class="row">
                <!-- User Quick Action Form -->
                <div class="col-12">
                    <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="0">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login"
                                aria-expanded="true">Click here to login</a>
                        </h3>
                        <div id="checkout_login" class="collapse" data-parent="#checkout_login">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If
                                    you are a new customer please proceed to the Billing &amp; Shipping section.</p>
                                <form action="#">
                                    <div class="form_group default-form-box">
                                        <label>Email Address<span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group default-form-box">
                                        <label>Password<span>*</span></label>
                                        <input type="password">
                                    </div>
                                    <div class="form_group group_3 default-form-box">
                                        <button class="btn btn-md btn-black-default-hover" type="submit">Login</button>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Have a coupon?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon"
                                aria-expanded="true">Click here to enter your code</a>

                        </h3>
                        <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                            <div class="checkout_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">Apply
                                        coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Quick Action Form -->
            </div>
            <!-- Start User Details Checkout Form -->
            <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>First Name<span>*</span></label>
                                        <input placeholder="Insert your First Name Here" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>Last Name<span>*</span></label>
                                        <input placeholder="Insert your Last Name Here" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Billing Name<span>*</span></label>
                                        <input placeholder="Insert your Billing Name Here" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Billing Address<span>*</span></label>
                                        <input placeholder="Insert your Billing Address Here" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label> Email Address<span>*</span></label>
                                        <input placeholder="Insert your Email Address Here" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="checkbox-default" for="newAccount" data-bs-toggle="collapse"
                                        data-bs-target="#newAccountPassword">
                                        <input type="checkbox" id="newAccount">
                                        <span>Create an account?</span>
                                    </label>
                                    <div id="newAccountPassword" class="collapse mt-3"
                                        data-parent="#newAccountPassword">
                                        <div class="card-body1 default-form-box">
                                            <label>Password<span>*</span></label>
                                            <input placeholder="Insert your Password Here" type="password">
                                        </div>
                                        <div class="card-body1 default-form-box">
                                            <label>Repeat Password<span>*</span></label>
                                            <input placeholder="Re-type your Password Here" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="checkbox-default" for="newShipping" data-bs-toggle="collapse"
                                        data-bs-target="#anotherShipping">
                                        <input type="checkbox" id="newShipping">
                                        <span>Ship to a different address?</span>
                                    </label>

                                    <div id="anotherShipping" class="collapse mt-3" data-parent="#anotherShipping">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="default-form-box">
                                                    <label>Shipping Name<span>*</span></label>
                                                    <input placeholder="Insert your Shipping Name Here" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="default-form-box">
                                                    <label>Shipping Address<span>*</span></label>
                                                    <input placeholder="Insert your Shipping Address Here" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="order-notes">
                                        <label for="order_note">Order Notes</label>
                                        <textarea id="order_note"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>PRODUCT(S)</th>
                                            <th>PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require "config/connect.php";
                                            $sql = "SELECT * FROM products_table LIMIT 0,3";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?php echo $row['name']?><strong> × <?php echo $row['stock']?></strong></td>
                                                    <td>₱<?php echo $row['price']?></td>
                                                </tr>
                                        <?php                                               
                                                }
                                            } else {
                                                //throw empty cart
                                            }
                                            mysqli_close($conn);
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>₱215.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>₱5.00</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>₱220.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse"
                                        data-bs-target="#methodCod">
                                        <input type="checkbox" id="currencyCod">
                                        <span>Cash on Delivery</span>
                                    </label>

                                    <div id="methodCod" class="collapse" data-parent="#methodCod">
                                        <div class="card-body1">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State
                                                / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-default">
                                    <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                        data-bs-target="#methodPaypal">
                                        <input type="checkbox" id="currencyPaypal">
                                        <span>GCash</span>
                                    </label>
                                    <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">
                                        <div class="card-body1">
                                            <p>Pay via GCash; you can pay with your credit card if you don’t have a
                                                GCash account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button pt-3">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">Proceed to
                                        Payment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- Start User Details Checkout Form -->
        </div>
    </div><!-- ...:::: End Checkout Section:::... -->
   
   <?php
            require "common/footer.php";
            require "common/js.php";
    ?> 

</body>


</html>