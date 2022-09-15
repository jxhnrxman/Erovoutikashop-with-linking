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
                        <h3 class="breadcrumb-title">Login</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--blue breadcrumb-nav-hover-color--blue">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active" aria-current="page">Login</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer-login">
        <div class="container">
            <div class="row">
                <div class="col col lg-2"></div>
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                        <form action="#" method="POST">
                            <div class="default-form-box">
                                <label>Email Address: <span>*</span></label>
                                <input type="text" name="email-name" placeholder="Insert your Email Address Here">
                            </div>
                            <div class="default-form-box">
                                <label>Password: <span>*</span></label>
                                <input type="password" name="user-password" placeholder="Insert your Password Here">
                            </div>
                            <div class="login_submit">
                                <div class="login_button mt-3 mb-3">
                                    <a href = "admin.php" button class="btn btn-md btn-black-default-hover" type="submit">Login</a></button>
                                </div>
                                <br>
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->
                <div class="col col lg-2"></div>
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->

    <?php
            require "common/footer.php";
            require "common/js.php";
    ?> 


</body>


</html>