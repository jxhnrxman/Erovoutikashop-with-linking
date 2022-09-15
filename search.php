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

        <div id="QuicksPlaceholder">
        </div>

        <!-- ...:::: Start Breadcrumb Section:::... -->
        <div class="breadcrumb-section breadcrumb-bg-color--white">
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="breadcrumb-title">EROVOUTIKA SHOP</h3>
                            <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--black">
                                <nav aria-label="breadcrumb">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="search.php">Shop</a></li>
                                        <li class="active" aria-current="page">All Products</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ...:::: End Breadcrumb Section:::... -->

        <!-- ...:::: Start Shop Section:::... -->
        <div class="shop-section">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row-reverse">
                    <div class="col-lg-3">
                        <!-- Start Sidebar Area -->
                        <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                            <!-- Start Single Sidebar Widget -->
                            <div class="sidebar-single-widget">
                                <h6 class="sidebar-title">CATEGORIES</h6>
                                <div class="sidebar-content">
                                    <ul class="sidebar-menu">
                                        <!-- Query Product Categories from Database (changed to php links)-->
                                        <li><a href="searchcat1.php"><p>Microcontrollers</p></a></li> 
                                                    <li><a href="searchcat2.php"><p>Modules</p></a></li> 
                                                    <li><a href="searchcat3.php"><p>Motors</p></a></li> 
                                                    <li><a href="searchcat4.php"><p>Sensors</p></a></li> 
                                                    <li><a href="searchcat5.php"><p>Other Products</p></a></li>   
                                    </ul>
                                </div>
                            </div> <!-- End Single Sidebar Widget -->

                            <!-- Start Single Sidebar Widget -->
                            <div class="sidebar-single-widget">
                                <h6 class="sidebar-title">FILTER BY PRICE</h6>
                                <div class="sidebar-content">
                                    <div id="slider-range"></div>
                                    <div class="filter-type-price">
                                        <label for="amount">Price range:</label>
                                        <input type="text" id="amount">
                                    </div>
                                </div>
                            </div> <!-- End Single Sidebar Widget -->

                            <!-- Start Single Sidebar Widget -->
                            <div class="sidebar-single-widget">
                                <h6 class="sidebar-title">MANUFACTURER</h6>
                                <div class="sidebar-content">
                                    <div class="filter-type-select">
                                        <style>
                                            .btn-manu{
                                                border: 2px solid lightgray; 
                                                border-radius: 20px;
                                                padding: 15px;
                                                margin: 3px;
                                            }
                                            .btn-manu:hover {
                                                border: 2px solid #0f3695;
                                                background-color: #0f3695;
                                                cursor: pointer;
                                                color: #f8f9fa;
                                            }
                                        </style>
                                            <ul>
                                                <li>
                                                    <label class="checkbox-default" for="brakeParts">
                                                        <a href="searcharduino.php">
                                                            <input type="button" class="btn-manu" value="Arduino"></input>
                                                        </a><br>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="checkbox-default" for="brakeParts">
                                                        <a href="searchraspberrypi.php">
                                                            <input type="button" class="btn-manu" value="Raspberry Pi"></input>
                                                        </a><br>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="checkbox-default" for="brakeParts">
                                                        <a href="searchubtech.php">
                                                            <input type="button" class="btn-manu" value="UBTech"></input>
                                                        </a><br>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="checkbox-default" for="brakeParts">
                                                        <a href="searchadafruit.php">
                                                            <input type="button" class="btn-manu" value="Adafruit"></input>
                                                        </a><br>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="checkbox-default" for="brakeParts">
                                                        <a href="searchhikvision.php">
                                                            <input type="button" class="btn-manu" value="Hikvision" ></input>
                                                        </a><br>
                                                    </label>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div> <!-- End Single Sidebar Widget -->

                          <!-- Start Single Sidebar Widget -->
                        <!-- End Single Sidebar Widget -->

                        </div> <!-- End Sidebar Area -->
                    </div>
                    <div class="col-lg-9">
                        <!-- Start Shop Product Sorting Section -->
                        <!-- Query Products Per Page -->
                        <?php
                            $data = array();
                            if (isset ($_GET['page']) ) {  
                                $page = $_GET['page'];  
                            } else {  
                                $page = 1;  
                            }
                            $start = ($page-1)*18;
                            require "config/connect.php";
                            $sql = "SELECT * FROM products_table limit $start,18";
                            $result = $conn->query($sql);
                            $count = $result->num_rows;
                        ?>
                        <div class="shop-sort-section">
                            <div class="container">
                                <div class="row">
                                    <!-- Start Sort Wrapper Box -->
                                    <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                        data-aos="fade-up" data-aos-delay="0">
                                        <!-- Start Sort tab Button -->
                                        <div class="sort-tablist d-flex align-items-center">
                                            <ul class="tablist nav sort-tab-btn">
                                                <li><a class="nav-link active" data-bs-toggle="tab"
                                                        href="#layout-3-grid"><img src="assets/images/icons/bkg_grid.png"
                                                            alt=""></a></li>
                                                <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                            src="assets/images/icons/bkg_list.png" alt=""></a></li>
                                            </ul>
                                            <!-- Start Page Amount -->
                                            <div class="page-amount ml-2">
                                            <?php
                                                require "config/connect.php";
                                                $sql2 = "SELECT * FROM products_table;";
                                                $result2 = $conn->query($sql2);
                                                $count2 =  "Showing $result2->num_rows results";
                                                echo $count2;
                                                ?>
                                            </div> <!-- End Page Amount -->
                                        </div> <!-- End Sort tab Button -->

                                        <!-- Start Sort Select Option -->
                                        <div class="sort-select-list d-flex align-items-center">
                                            <label class="mr-2">Sort By:</label>
                                            <form action="#">
                                                <fieldset>
                                                    <select name="speed" id="speed">
                                                        <option>↑ Price</option>
                                                        <option>↓ Price</option>
                                                        <option>Name (A-Z)</option>
                                                        <option>Name (Z-A)</option>
                                                    </select>
                                                </fieldset>
                                            </form>
                                        </div> <!-- End Sort Select Option -->
                                    </div> <!-- Start Sort Wrapper Box -->
                                </div>
                            </div>
                        </div> <!-- End Section Content -->

                        <!-- Start Tab Wrapper -->
                        <div class="sort-product-tab-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content tab-animate-zoom">
                                            <!-- Start Grid View Product -->
                                            <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                                <div class="row">
                                                    <?php
                                                        if ($count> 0) {  
                                                            $index = 1;                           
                                                            while($product_row = $result->fetch_assoc()) {
                                                                array_push($data,$product_row);
                                                                switch ($index%3) {
                                                                    case 0: 
                                                                        $column ="0";
                                                                        break;
                                                                    case 1:
                                                                        $column ="200";
                                                                        break;
                                                                    case 2:                                                                        
                                                                        $column ="400";
                                                                        break;
                                                                    default:
                                                                        $column ="0";
                                                                    }
                                                    ?>
                                                    <div class="col-xl-4 col-sm-6 col-12">
                                                        <!-- Start Product Default Single Item -->
                                                        <div class="product-default-single-item product-color--golden"
                                                            data-aos="fade-up" data-aos-delay=<?php echo $column?>>
                                                            <div class="image-box">
                                                                <a href="product-details.php?id=<?php echo $product_row['id']; ?>" class="image-link">
                                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_row['thumbnail']); ?>"
                                                                        alt="">
                                                                </a>
                                                                <div class="action-link">
                                                                    <div class="action-link-left">
                                                                        <a  data-type="quick" id= "cart-<?php echo $product_row['id']; ?>">Add to Cart</a>
                                                                    </div>
                                                                    <div class="action-link-right">
                                                                        <a href="product-details.php?id=<?php echo $product_row['id']; ?>"><i class="icon-magnifier"></i></a>
                                                                        <a href="wishlist.php"><i class="icon-heart"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="content-left">
                                                                    <h6 class="title"><a href="product-details.php?id=<?php echo $product_row['id']; ?>"><?php echo $product_row['name']?></a></h6>
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
                                                                <div class="content-right">
                                                                    <span class="price">₱<?php echo $product_row['price']?></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End Product Default Single Item -->
                                                    </div> 
                                                    <?php 
                                                        }
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                                            <ul> 
                                                <?php
                                                    include_once ('config/connect.php');
                                                    $sql1 = "SELECT * FROM products_table;";
                                                    $result1 = $conn1->query($sql1);
                                                    $count1 = $result1->num_rows;
                                                    $total_pages = ceil($count1/18);
                                                    for ($i=1; $i<=$total_pages; $i++)
                                                    {
                                                        echo "
                                                        <li><a href='search.php?page=".$i."'>".$i."</a></li>
                                                        ";
                                                    }
                                                ?>
                                            </ul>
                                            </div> <!-- End Grid View Product -->
                                            <!-- Start List View Product -->
                                            <div class="tab-pane sort-layout-single" id="layout-list">
                                                <div class="row">
                                                    <?php
                                                        if ($count> 0) {                            
                                                            foreach($data as $product_row) {  
                                                    ?>
                                                    <div class="col-12">
                                                        <!-- Start Product Defautlt Single -->
                                                        <div class="product-list-single product-color--golden">
                                                            <a href="product-details.php?id=<?php echo $product_row['id']; ?>"
                                                                class="product-list-img-link">
                                                                <img class="img-fixed200"
                                                                    src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_row['thumbnail']); ?>"
                                                                    alt="">
                                                            </a>
                                                            <div class="product-list-content">
                                                                <h5 class="product-list-link"><a href="product-details.php?id=<?php echo $product_row['id']; ?>"><?php echo $product_row['name']?></a></h5>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                                </ul>
                                                                <span class="product-list-price">₱<?php echo $product_row['price']?></span>
                                                                <p><?php 
                                                                    if (empty($product_row['descriptionn'])) {
                                                                        echo "No product description available.";
                                                                    } else {
                                                                        echo substr($product_row['descriptionn'],0,300) . "...";
                                                                    }
                                                                    ?></p>
                                                                <div class="product-action-icon-link-list">
                                                                    <a class="btn btn-lg btn-black-default-hover" data-type="quick" id= "cart-<?php echo $product_row['id']; ?>" >Add to cart</a>
                                                                    <a class="btn btn-lg btn-black-default-hover" href="product-details.php?id=<?php echo $product_row['id']; ?>"><i class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.php"
                                                                        class="btn btn-lg btn-black-default-hover"><i
                                                                            class="icon-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Product Defautlt Single -->
                                                    </div>
                                                    <?php 
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div> <!-- End List View Product -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Tab Wrapper -->

                        <!-- Start Pagination -->
                         <!-- End Pagination -->
                    </div>
                </div>
            </div>
        </div> <!-- ...:::: End Shop Section:::... -->

        <?php
            require "common/footer.php";
            require "common/js.php";
        ?> 

    </body>


</html>