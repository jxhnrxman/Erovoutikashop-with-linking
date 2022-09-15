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
                        <h3 class="breadcrumb-title">Frequently Asked Questions</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--black">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active" aria-current="page">Frequently Asked Questions</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...::::Start About Us Center Section:::... -->
    <div class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faq-content" data-aos="fade-up" data-aos-delay="0">
                        <h5 class="title">Below are frequently asked questions, you may find the answer for yourself
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus
                            metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus
                            mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum
                            nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc
                            purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>
                    </div>
                </div>
            </div>
            <div class="faq-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="faq-accordian">
                            <div class="faq-accordian-single-item" data-aos="fade-up" data-aos-delay="0">
                                <input id="item-1" name="accordian-item" type="radio" checked="">
                                <label for="item-1">Frequently Asked Question #1</label>
                                <div class="item-content">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                            <div class="faq-accordian-single-item" data-aos="fade-up" data-aos-delay="200">
                                <input id="item-2" name="accordian-item" type="radio">
                                <label for="item-2">Frequently Asked Question #2</label>
                                <div class="item-content">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                            <div class="faq-accordian-single-item" data-aos="fade-up" data-aos-delay="400">
                                <input id="item-3" name="accordian-item" type="radio">
                                <label for="item-3">Frequently Asked Question #3</label>
                                <div class="item-content">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                            <div class="faq-accordian-single-item" data-aos="fade-up" data-aos-delay="600">
                                <input id="item-4" name="accordian-item" type="radio">
                                <label for="item-4">Frequently Asked Question #4</label>
                                <div class="item-content">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                            <div class="faq-accordian-single-item" data-aos="fade-up" data-aos-delay="800">
                                <input id="item-5" name="accordian-item" type="radio">
                                <label for="item-5">Frequently Asked Question #5</label>
                                <div class="item-content">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                            <div class="faq-accordian-single-item" data-aos="fade-up" data-aos-delay="1000">
                                <input id="item-6" name="accordian-item" type="radio">
                                <label for="item-6">Frequently Asked Question #6</label>
                                <div class="item-content">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...::::End  About Us Center Section:::... -->

    <?php
        require "common/footer.php";
        require "common/js.php";
    ?> 

    
</body>

</html>