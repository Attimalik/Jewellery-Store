<?php

include 'config.php';

$category = $_GET['category'];





$sql_new = "SELECT * FROM products WHERE `category` = $category";
$result_new = $conn->query($sql_new);
// print_r($result);



?>



<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>DNX - Jewelry Store e-Commerce Bootstrap 4 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" />

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
 .products-wrapper {
    position: relative;
     /* overflow: hidden; */
} 

.new-products-carousel .owl-stage-outer {
    height: 100%;
}

/* .new-products-carousel .owl-stage {
    display: flex;
    flex-direction: column;
} */

.new-products-carousel .owl-item {
    /* display: flex;
    flex-direction: column; */
    justify-content: center;
    align-items: center;
    height: 300px; /*  this value as per your requirement */
}

.single-product-item {
    margin-bottom: 30px; /* Add space between items */
}

    </style>
</head>

<body>

    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="ruby-container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-3 col-lg-1 col-xl-2 m-auto">
                    <a href="" class="logo-area">
                        <img src="assets/img/logo.png" alt="Logo" class="img-fluid" />
                    </a>
                </div>
                <!-- Logo Area End -->

                <!-- Navigation Area Start -->
                <div class="col-3 col-lg-9 col-xl-8 m-auto">
                    <div class="main-menu-wrap">
                        <nav id="mainmenu">
                            <ul>
                                <li><a href="">Home</a>
                                    <!-- <ul class="dropdown-nav sub-dropdown">
                                    <li><a href="index.html">Home Layout 1</a></li>
                                  
                                </ul> -->
                                </li>

                                <li><a href="about.html">About Us</a></li>

                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Navigation Area End -->

                <!-- Header Right Meta Start -->
                <div class="col-6 col-lg-2 m-auto">
                    <div class="header-right-meta text-right">
                        <ul>
                            <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Right Meta End -->
            </div>
        </div>
    </header>
    <!--== Header Area End ==-->

    <!--== Search Box Area Start ==-->
    <div class="body-popup-modal-area">
        <span class="modal-close"><img src="assets/img/cancel.png" alt="Close" class="img-fluid" /></span>
        <div class="modal-container d-flex">
            <div class="search-box-area">
                <div class="search-box-form">
                    <form action="#" method="post">
                        <input type="search" placeholder="type keyword and hit enter" />
                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--== Search Box Area End ==-->

    <!--== New Products Area Start ==-->
    <section id="new-products-area" class="p-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>New Products</h2>
                        <p>Trending stunning Unique</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

<div class="row">
    <div class="col-lg-12">
        <div class="products-wrapper">
            <div class="new-products-carousel owl-carousel">
                <?php
                if ($result_new->num_rows > 0) {
                    while ($row = $result_new->fetch_assoc()) { ?>
                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.php?id=<?php echo $row['id']; ?>"><img src="<?php echo 'assets/img/' . $row['image']; ?>" alt="Products" class="img-fluid"></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$<?php echo $row['price']; ?></span>
                                <a href="single-product.php?id=<?php echo $row['id']; ?>" class="btn btn-add-to-cart"> Explore </a>
                                <span class="product-bedge">New</span>
                            </div>
                          
                        </div>
                <?php }
                }  else {
                    echo '<div> <p> No Products in this category </p> </div>';
                }  ?>
            </div>
        </div>
   
    </div>



</div>



    </section>
    <!--== New Products Area End ==-->

    
  <div style="padding-top: 100px;"></div>


    <!-- Footer Area Start -->
    <footer id="footer-area">
        <!-- Footer Call to Action Start -->


        <!-- Footer Follow Up Area Start -->
        <div class="footer-followup-area">
            <div class="ruby-container">
                <div class="followup-wrapper">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="follow-content-wrap">
                                <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="logo"  width="90px" height="90px"></a>
                              

                                <div class="footer-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-flickr"></i></a>
                                </div>

                                <div>
                                    <h5 style="color:white;">Copy right@ RUBY</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Follow Up Area End -->

      

    </footer>
  
    <!-- Include the Modal Structure -->
    <div class="modal fade" id="quickView" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="./assets/img/cancel.png" alt="Close" class="img-fluid" /></span>
                </button>
                <div class="modal-body">
                    <div class="quick-view-content single-product-page-content">
                        <div class="row">
                            <!-- Product Thumbnail Start -->
                            <div class="col-lg-5 col-md-6">
                                <div class="product-thumbnail-wrap">
                                    <div class="product-thumb-carousel owl-carousel" id="product-thumbnails">
                                        <!-- Thumbnails will be inserted here dynamically -->
                                    </div>
                                </div>
                            </div>
                            <!-- Product Thumbnail End -->

                            <!-- Product Details Start -->
                            <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                                <div class="product-details" id="product-details">
                                    <!-- Product details will be inserted here dynamically -->
                                </div>
                            </div>
                            <!-- Product Details End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        $(document).ready(function() {
    $(".new-products-carousel").owlCarousel({
        items: 1, // Number of items to display
        loop: false,
        margin: 10,
        nav: true,
        dots: true,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp',
        responsive: {
            0: {
                items: 1 // Number of items to display on small screens
            },
            600: {
                items: 1 // Number of items to display on medium screens
            },
            1000: {
                items: 3// Number of items to display on large screens
            }
        },
        vertical: true, // Enable vertical mode
        verticalHeight: 500, // Adjust height as needed
    });
});

    </script>

    <!--== Product Quick View Modal Area End ==-->
    <!-- End All Modal Content -->

    <!-- Scroll to Top Start -->
    <a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
    <!-- Scroll to Top End -->


    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--=== Plugins Min Js ===-->
    <script src="assets/js/plugins.js"></script>

    <!--=== Active Js ===-->
    <script src="assets/js/active.js"></script>
</body>

</html>
<!-- <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
<a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-tags"></i></a> -->