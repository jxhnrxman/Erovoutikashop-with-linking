<?php
   if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    require "../config/connect.php";
    $product_sql = "CALL QueryProduct($id)";
    $product_result = $conn->query($product_sql);
    $product_row = $product_result->fetch_array();
    mysqli_close($conn);
   }
?>

<!-- Start Modal Quick AddCart -->
<div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="text-uppercase"><?php echo $product_row['name'] ?></h4>
                        </div>
                        <div class="col text-end">
                            <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal-add-cart-product-img">
                                        <img class="img-fluid"
                                            src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_row['thumbnail']); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart
                                        successfully!</div>
                                    <div class="modal-add-cart-product-cart-buttons">
                                        <a href="cart.php">View Cart</a>
                                        <a href="checkout.php">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal-border">
                            <ul class="modal-add-cart-product-shipping-info">
                                <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</strong></li>
                                <li> <strong>Total Price: </strong> <span>₱187.00</span></li>
                                <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">Continue Shopping</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Quick AddCart -->

<!-- Start Modal Quick View cart -->
<div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-end">
                            <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_row['thumbnail']); ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-details-content-area">
                                <!-- Start  Product Details Text Area-->
                                <div class="product-details-text">
                                    <h4 class="title"><?php echo $product_row['name']; ?></h4>
                                    <div class="price">₱<?php echo $product_row['price']; ?></div>
                                </div> <!-- End  Product Details Text Area-->
                                <!-- Start Product Variable Area -->
                                <div class="product-details-variable"> 
                                    <!-- Product Variable Single Item -->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="variable-single-item ">
                                            <span>Quantity</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" max=<?php echo $product_row['stock']; ?> value="1" type="number">
                                            </div>
                                        </div>
                                        <div class="product-add-to-cart-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" data-bs-dismiss="modal" aria-label="Close">Add To Cart</a>
                                            <a href="product-details.php?id=<?php echo $product_row['id']; ?>">View Product Details</a>
                                        </div>
                                    </div>
                                </div> <!-- End Product Variable Area -->
                            </div>
                            <div class=" colmodal-product-about-text">
                                    <p><?php 
                                            if (empty($product_row['descriptionn'])) {
                                                echo "No product description available.";
                                            } else {
                                                echo substr($product_row['descriptionn'],0,300) . "...";
                                            }
                                        ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Quick View cart -->