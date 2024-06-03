<?php
include './config.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);



?>
    <!DOCTYPE html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="meta description">

        <title>Single Product :: DNX - Jewelry Store e-Commerce Bootstrap 4 Template</title>

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
        <style>
        .whatsapp-button {
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>

        <!-- Modernizer JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script>
        function sendWhatsAppOrder(name, price, sku, stockStatus) {
            // Format the message with product details
            var message = "Hello! I would like to order:\n\n";
            message += "Product: " + name + "\n";
            message += "Price: $" + price + "\n";
            message += "SKU: " + sku + "\n";
            

            // Replace 1234567890 with your WhatsApp number
            var phoneNumber = "+923035952052";

            // Open WhatsApp with the message
            window.open("https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message), '_blank');
        }
    </script>

    </head>

    <body>
        <!--== Header Area Start ==-->
        <header id="header-area" class="header__3">
            <div class="ruby-container">
                <div class="row">
                    <!-- Logo Area Start -->
                    <div class="col-3 col-lg-1 col-xl-2 m-auto">
                        <a href="index.php" class="logo-area">
                            <img src="assets/img/logo-black.png" alt="Logo" class="img-fluid" />
                        </a>
                    </div>
                    <!-- Logo Area End -->

                    <!-- Navigation Area Start -->
                    <div class="col-3 col-lg-9 col-xl-8 m-auto">
                        <div class="main-menu-wrap">
                            <nav id="mainmenu">
                                <ul>
                                    <li><a href="index.php">Home</a>

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

        <!--== Page Title Area Start ==-->
        <div id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-title-content">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-full-wide.html">Shop</a></li>
                                <li><a href="single-product.html" class="active">Crown Summit Backpack</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Page Title Area End ==-->

        <!--== Page Content Wrapper Start ==-->
        <div id="page-content-wrapper" class="p-9">
            <div class="ruby-container">
                <div class="row">
                    <!-- Single Product Page Content Start -->
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {     ?>
                            <div class="col-lg-12">
                                <div class="single-product-page-content">
                                    <div class="row">
                                        <!-- Product Thumbnail Start -->
                                        <div class="col-lg-5">
                                            <div class="product-thumbnail-wrap">
                                                <div class="product-thumb-carousel owl-carousel">
                                                    <div class="single-thumb-item">
                                                        <a href=""><img class="img-fluid" src="<?php echo './assets/img/' . $row['image']; ?>" alt="Product" /></a>
                                                    </div>
                                                    <div class="single-thumb-item">
                                                        <a href=""><img class="img-fluid" src="<?php echo './assets/img/' . $row['image']; ?>" alt="Product" /></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Thumbnail End -->

                                        <!-- Product Details Start -->


                                        <div class="col-lg-7 mt-5 mt-lg-0">
                                            <div class="product-details">
                                                <h2><a href="single-product.html"> <?php echo $row['name']  ?></a></h2>

                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                                <span class="price">$<?php echo $row['price']  ?></span>

                                                <div class="product-info-stock-sku">
                                                    <span class="product-stock-status"> <?php echo $row['stock_status'] == 1 ? 'In Stock' : 'Out of Stock'; ?></span>
                                                    <span class="product-sku-status ml-5"><strong>SKU</strong> <?php echo  $row['sku']; ?></span>
                                                </div>

                                                <p class="products-desc"><?php echo  $row['short_desc']  ?></p>
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

                                                    <!-- WhatsApp Button -->
                                                    <button onclick="sendWhatsAppOrder('<?php echo $row['name']; ?>', '<?php echo $row['price']; ?>', '<?php echo $row['sku']; ?>')"  class="whatsapp-button">Order via WhatsApp</button>
                                                </div>




                                            </div>
                                        </div> 
                                <!-- Product Details End -->
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Product Full Description Start -->
                                            <div class="product-full-info-reviews">
                                                <!-- Single Product tab Menu -->
                                                <nav class="nav" id="nav-tab">
                                                    <a class="active" id="description-tab" data-toggle="tab" href="#description">Description</a>
                                                    <a id="reviews-tab" data-toggle="tab" href="#reviews">Reviews</a>
                                                </nav>
                                                <!-- Single Product tab Menu -->

                                                <!-- Single Product tab Content -->
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="description">
                                                       <p><?php echo  $row['description'];  ?></p>
                                                    </div>

                                                    <div class="tab-pane fade" id="reviews">
                                                        <div class="row">
                                                            <div class="col-lg-7">
                                                                <div class="product-ratting-wrap">
                                                                    <div class="pro-avg-ratting">
                                                                        <h4>4.5 <span>(Overall)</span></h4>
                                                                        <span>Based on 9 Comments</span>
                                                                    </div>
                                                                    <div class="ratting-list">
                                                                        <div class="sin-list float-left">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <span>(5)</span>
                                                                        </div>
                                                                        <div class="sin-list float-left">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <span>(3)</span>
                                                                        </div>
                                                                        <div class="sin-list float-left">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <span>(1)</span>
                                                                        </div>
                                                                        <div class="sin-list float-left">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <span>(0)</span>
                                                                        </div>
                                                                        <div class="sin-list float-left">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <span>(0)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rattings-wrapper">

                                                                        <div class="sin-rattings">
                                                                            <div class="ratting-author">
                                                                                <h3>Cristopher Lee</h3>
                                                                                <div class="ratting-star">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <span>(5)</span>
                                                                                </div>
                                                                            </div>
                                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                                odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                                sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                                dolor sit amet, consectetur, adipisci veli</p>
                                                                        </div>

                                                                        <div class="sin-rattings">
                                                                            <div class="ratting-author">
                                                                                <h3>Nirob Khan</h3>
                                                                                <div class="ratting-star">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <span>(5)</span>
                                                                                </div>
                                                                            </div>
                                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                                odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                                sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                                dolor sit amet, consectetur, adipisci veli</p>
                                                                        </div>

                                                                        <div class="sin-rattings">
                                                                            <div class="ratting-author">
                                                                                <h3>MD.ZENAUL ISLAM</h3>
                                                                                <div class="ratting-star">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <span>(5)</span>
                                                                                </div>
                                                                            </div>
                                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                                odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                                sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                                dolor sit amet, consectetur, adipisci veli</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="ratting-form-wrapper fix">
                                                                        <h3>Add your Comments</h3>
                                                                        <form action="#" method="post">
                                                                            <div class="ratting-form row">
                                                                                <div class="col-12 mb-4">
                                                                                    <h5>Rating:</h5>
                                                                                    <div class="ratting-star fix">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-12 mb-4">
                                                                                    <label for="name">Name:</label>
                                                                                    <input id="name" placeholder="Name" type="text">
                                                                                </div>
                                                                                <div class="col-md-6 col-12 mb-4">
                                                                                    <label for="email">Email:</label>
                                                                                    <input id="email" placeholder="Email" type="text">
                                                                                </div>
                                                                                <div class="col-12 mb-4">
                                                                                    <label for="your-review">Your Review:</label>
                                                                                    <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <input value="add review" type="submit">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Product tab Content -->
                                            </div>
                                            <!-- Product Full Description End -->
                                        </div>
                                    </div>
                                    <?php
                                            }
                                        }
                                                ?>
                                </div>
                            </div>
                            <!-- Single Product Page Content End -->
                </div>
            </div>
        </div>
        <!--== Page Content Wrapper End ==-->

        <!-- Footer Area Start -->
        <footer id="footer-area">
            <!-- Footer Call to Action Start -->

            <!-- Footer Call to Action End -->

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
                                <p>Copy right@ RUBY</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright Area End -->

        </footer>
        <!-- Footer Area End -->

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


<?php


}
?>

<!-- WhatsApp Button -->