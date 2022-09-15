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
                        <h3 class="breadcrumb-title">Shopping Cart</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--black">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="search.php">Shop</a></li>
                                    <li class="active" aria-current="page">Shopping Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove" style="border-bottom:3px solid #333">Delete</th>
                                            <th class="product_thumb" style="border-bottom:3px solid #333">Image</th>
                                            <th class="product_name" style="border-bottom:3px solid #333">Product</th>
                                            <th class="product-price" style="border-bottom:3px solid #333">Price</th>
                                            <th class="product_quantity" style="border-bottom:3px solid #333">Quantity</th>
                                            <th class="product_total" style="border-bottom:3px solid #333">Total</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <?php
                                            require "config/connect.php";
                                            $sql = "SELECT * FROM products_table LIMIT 0,3";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>

                                            <!-- Start Cart Single Item-->
                                            <tr>
                                                <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="product-details.php?id=<?php echo $row['id']?>"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['thumbnail']); ?>" alt=""></a></td>
                                                <td class="product_name"><a href="product-details.php?id=<?php echo $row['id']?>"><?php echo $row['name']?></a></td>
                                                <td class="product-price">₱<?php echo $row['price']?></td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                        max=<?php echo $row['stock']?> value="1" type="number"></td>
                                                <td class="product_total">₱<?php echo $row['price']?></td>
                                            </tr> <!-- End Cart Single Item-->

                                            <?php                                               
                                                }
                                            } else {
                                                //throw empty cart
                                            }
                                            mysqli_close($conn);
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button class="btn btn-xl btn-black-default-hover" type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input class="mb-2" placeholder="Coupon code" type="text">
                                <button type="submit" class="btn btn-xl btn-black-default-hover">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <h4 class="cart_subtotal">Subtotal</h4>
                                    <h4 class="cart_amount">₱215.00</h4>
                                </div>
                                <div class="cart_subtotal ">
                                    <h4 class="cart_subtotal">Shipping</h4>
                                    <h4 class="cart_amount">₱40.00</h4>
                                </div>
                                <a href="#">Change Shipping Address</a>
                                <div class="cart_total">
                                    <h4 class="cart_total">Total</h4>
                                    <h4 class="cart_amount" style="font-weight:600">₱255.00</h4>
                                </div>
                                <div class="checkout_btn">
                                    <a href="checkout.php" class="btn btn-xl btn-black-default-hover">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> <!-- ...:::: End Cart Section:::... -->

    <?php
            require "common/footer.php";
            require "common/js.php";
    ?> 

</body>


</html>