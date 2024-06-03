<?php

include 'config.php';


if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO subscription_emails (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    // Execute the query
    if ($stmt->execute()) {
        echo ' <div class="alert alert-success" role="alert" style="text-align:center;">
        You Are Subscribed Successfully!
      </div>';
    } else {
        echo ' <div class="alert alert-warning" role="alert" style="text-align:center;">
        Failed to Subscribed!
      </div>';
    }

    // Close statement and connection
    $stmt->close();
}


$sql = "SELECT * FROM products";
$result = $conn->query($sql);



$sql_new = "SELECT * FROM products";
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
    <style>
       
    </style>


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

                                <li><a href="about.php">About Us</a></li>

                                <li><a href="contact.php">Contact Us</a></li>
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
                           
                            </li>
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
                    <form action="search_bar.php" method="GET">
                        <input type="search" placeholder="type keyword and hit enter" name='query' />
                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--== Search Box Area End ==-->

    <!--== Banner // Slider Area Start ==-->
    <section id="banner-area">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="banner-carousel" class="owl-carousel">
                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-1">
                            <div class="banner-caption text-center text-lg-left">
                                <h4>Rubby Store</h4>
                                <h2>Ring Solitaire Princess</h2>
                                <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <a href="selecteded_category.php?category=rings" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->

                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-2">
                            <div class="banner-caption text-center text-lg-left">
                                <h4>New Collection 2017</h4>
                                <h2>Beautiful Earrings</h2>
                                <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <a href="selecteded_category.php?category=necklace" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Banner Slider End ==-->


    <!--== New Collection Area Start ==-->
    <section id="new-collection-area" class="p-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>New Collection Products</h2>
                        <p>Best produc sale.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="new-collection-tabs">

                        <!-- Tab Menu Area Start -->
                        <ul class="nav tab-menu-wrap" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="feature-products-tab" data-toggle="tab" href="#feature-products" role="tab" aria-controls="feature-products-tab" aria-selected="true">Feature Products</a>
                            </li>
                            <li class="nav-item">
                                <a id="new-products-tab" data-toggle="tab" href="#new-products" role="tab" aria-controls="new-products" aria-selected="false">New Products</a>
                            </li>
                            <li class="nav-item">
                                <a id="onsale-tab" data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">Onsale</a>
                            </li>
                        </ul>
                        <!-- Tab Menu Area End -->

                        <!-- Tab Content Area Start -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="feature-products" role="tabpanel" aria-labelledby="feature-products-tab">
                                <div class="products-wrapper">
                                    <div class="products-carousel owl-carousel">
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="single-product.php?id=<?php echo $row['id']; ?>"><img src="<?php echo './assets/img/' . $row['image']; ?>" alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="single-product.php?id=<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <span class="price"><?php echo '$' . $row['price']; ?></span>
                                                        <a href="single-product.php?id=<?php echo $row['id']; ?>" class="btn btn-add-to-cart"> Explore </a>
                                                        <span class="product-bedge">New</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" class="quick-view-button" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } ?>
                                       

                                </div>
                            </div>



                        </div>

                        <!-- Tab Content Area End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== New Collection Area End ==-->

    <!--== Products by Category Area Start ==-->
    <div id="product-categories-area">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="large-size-cate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="selecteded_category.php?category='shopforwomen'"><img src="assets/img/women-cat.jpg" alt="Women Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="selecteded_category.php?category='shopforwomen'">Shop For Women</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="selecteded_category.php?category='shopformen'"><img src="assets/img/men-cat.jpg" alt="Men Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="selecteded_category.php?category='shopformen'">Shop For Men</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="small-size-cate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="selecteded_category.php?category='jewlry'"><img src="assets/img/jewellery-cat.jpg" alt="Men Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="selecteded_category.php?category='jewlry'">Jewellery</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="selecteded_category.php?category='kamiz'"><img src="assets/img/women-cat2.jpg" alt="Men Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="selecteded_category.php?category='suit'">Kamiz</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="selecteded_category.php?category='watches'"><img src="assets/img/watch-cat.jpg" alt="Men Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="selecteded_category.php?category='watches'">watches</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-cat-item">
                                    <figure class="category-thumb">
                                        <a href="selecteded_category.php?category=mensuit'"><img src="assets/img/suit-cat.jpg" alt="Men Category" class="img-fluid" /></a>

                                        <figcaption class="category-name">
                                            <a href="selecteded_category.php?category='suit'">Men Suit</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Products by Category Area End ==-->

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
                    while ($row_new = $result_new->fetch_assoc()) { ?>
                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.php?id=<?php echo $row_new['id']; ?>"><img src="<?php echo 'assets/img/' . $row_new['image']; ?>" alt="Products" class="img-fluid"></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php?id=<?php echo $row_new['id']; ?>"><?php echo $row_new['name']; ?></a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$<?php echo $row_new['price']; ?></span>
                                <a href="single-product.php?id=<?php echo $row_new['id']; ?>" class="btn btn-add-to-cart"> Explore </a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" class="quick-view-button" data-id="<?php echo $row_new['id']; ?>" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="fa fa-compress"></i></span>
                                </button>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>


    <!--== New Products Area End ==-->

    <!--== Testimonial Area Start ==-->
    <section id="testimonial-area">
        <div class="ruby-container">
            <div class="testimonial-wrapper">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2>What People Say</h2>
                            <p>Testimonials</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="testimonial-content-wrap">
                            <div id="testimonialCarousel" class="owl-carousel">
                                <div class="single-testimonial-item">
                                    <p>These guys have been absolutely outstanding. When I needed them they came through in
                                        a big way! I know that if you buy this theme, you'll get the one thing we all look
                                        for when we buy on Themeforest, and that's real support for the craziest of
                                        requests!</p>

                                    <h3 class="client-name">Luis Manrata</h3>
                                    <span class="client-email">you@email.here</span>
                                </div>

                                <div class="single-testimonial-item">
                                    <p>These guys have been absolutely outstanding. When I needed them they came through in
                                        a big way! I know that if you buy this theme, you'll get the one thing we all look
                                        for when we buy on Themeforest, and that's real support for the craziest of
                                        requests!</p>

                                    <h3 class="client-name">John Dibba</h3>
                                    <span class="client-email">you@email.here</span>
                                </div>

                                <div class="single-testimonial-item">
                                    <p>These guys have been absolutely outstanding. When I needed them they came through in
                                        a big way! I know that if you buy this theme, you'll get the one thing we all look
                                        for when we buy on Themeforest, and that's real support for the craziest of
                                        requests!</p>

                                    <h3 class="client-name">Alex Tuntuni</h3>
                                    <span class="client-email">you@email.here</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Testimonial Area End ==-->

    <!--== Blog Area Start ==-->


    <!--== Newsletter Area Start ==-->
    <section id="newsletter-area" class="p-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>Join The Newsletter</h2>
                        <p>Sign Up for Our Newsletter</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>


            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="newsletter-form-wrap">
                        <form method="post">
                            <input id="subscribe" type="email" name="email" placeholder="Enter your Email Here" required />
                            <button type="submit" class="btn-long-arrow" name="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--== Newsletter Area End ==-->

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
                                <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="logo" /></a>
                                <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</p>

                                <div class="footer-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-flickr"></i></a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Follow Up Area End -->

        <!-- Footer Image Gallery Area Start -->
        <div class="footer-image-gallery">
            <div class="ruby-container">
                <div class="image-gallery-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="imgage-gallery-carousel owl-carousel">
                                <div class="gallery-item">
                                    <a href="#"><img src="assets/img/gallery-img-1.jpg" alt="Gallery" /></a>
                                </div>
                                <div class="gallery-item">
                                    <a href="#"><img src="assets/img/gallery-img-2.jpg" alt="Gallery" /></a>
                                </div>
                                <div class="gallery-item">
                                    <a href="#"><img src="assets/img/gallery-img-3.jpg" alt="Gallery" /></a>
                                </div>
                                <div class="gallery-item">
                                    <a href="#"><img src="assets/img/gallery-img-4.jpg" alt="Gallery" /></a>
                                </div>
                                <div class="gallery-item">
                                    <a href="#"><img src="assets/img/gallery-img-3.jpg" alt="Gallery" /></a>
                                </div>
                                <div class="gallery-item">
                                    <a href="#"><img src="assets/img/gallery-img-2.jpg" alt="Gallery" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Image Gallery Area End -->

        <!-- Copyright Area Start -->
        <div class="copyright-area">
            <div class="ruby-container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p><a target="_blank" href="https://www.templateshub.net">
                                    <p>Copy right@ RUBY</p>
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright Area End -->

    </footer>
    <!-- Footer Area End -->


    <!-- Start All Modal Content -->
    <!--== Product Quick View Modal Area Wrap ==-->
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
       document.addEventListener('DOMContentLoaded', () => {
    const quickViewButtons = document.querySelectorAll('.quick-view-button');
    const modalProductDetails = document.getElementById('product-details');
    const modalProductThumbnails = document.getElementById('product-thumbnails');

    quickViewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            fetch(`get_product_details.php?id=${productId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        modalProductDetails.innerHTML = '<p>Product not found.</p>';
                    } else {
                        modalProductDetails.innerHTML = `
                            <h2>${data.name}</h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span class="price">$${data.price}</span>
                            <div class="product-info-stock-sku">
                            <span class="product-stock-status">${data.stock_status == 1 ? 'In Stock' : 'Out of Stock'}</span>

                                <span class="product-sku-status ml-5"><strong>SKU</strong> ${data.sku}</span>
                            </div>
                            <p class="products-desc">${data.short_desc}</p>
                            <div class="shopping-option-item">
                                <h4>Color</h4>
                                <ul class="color-option-select d-flex">
                                    <li class="color-item black">
                                        <div class="color-hvr">
                                            <span class="color-fill"></span>
                                            <span class="color-name">Black</span>
                                        </div>
                                    </li>
                                    <li class="color-item green">
                                        <div class="color-hvr">
                                            <span class="color-fill"></span>
                                            <span class="color-name">green</span>
                                        </div>
                                    </li>
                                    <li class="color-item orange">
                                        <div class="color-hvr">
                                            <span class="color-fill"></span>
                                            <span class="color-name">Orange</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        `;

                        modalProductThumbnails.innerHTML = `
                            <div class="single-thumb-item">
                                <a href="single-product.html"><img class="img-fluid" src="./assets/img/${data.image}" alt="Product" /></a>
                            </div>
                            <!-- Add more thumbnails if available -->
                        `;
                    }
                });
        });
    });
});

    </script>
    <!-- here on, i made changes -->

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