<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email_address = $conn->real_escape_string($_POST['email_address']);
    $contact_subject = $conn->real_escape_string($_POST['contact_subject']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO quotes (first_name, last_name, email_address, contact_subject, message)
            VALUES ('$first_name', '$last_name', '$email_address', '$contact_subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert" style="text-align:center;">
     Message Sent Successfully!
    </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

$sql = "SELECT type, value FROM contacts";
$result = $conn->query($sql);

$contacts = array(
    'address' => array(),
    'phone' => array(),
    'fax' => array(),
    'email' => array()
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contacts[$row['type']][] = $row['value'];
    }
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Contact :: DNX - Jewelry Store e-Commerce Bootstrap 4 Template</title>

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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--== Header Area Start ==-->
    <header id="header-area" class="header__3">
        <div class="ruby-container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-3 col-lg-1 col-xl-2 m-auto">
                    <a href="index.html" class="logo-area">
                        <img src="assets/img/logo-black.png" alt="Logo" class="img-fluid" />
                    </a>
                </div>
                <!-- Logo Area End -->

                <!-- Navigation Area Start -->
                <div class="col-3 col-lg-9 col-xl-8 m-auto">
                    <div class="main-menu-wrap">
                        <nav id="mainmenu">
                            <ul>
                                <li class=""><a href="index.php">Home</a>

                                </li>


                                <li><a href="about.php">About Us</a></li>

                                <li><a href="">Contact Us</a></li>
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
                        <h1>Contact Us</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="" class="active">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Page Title Area End ==-->

    <!--== Page Content Wrapper Start ==-->
    <div id="page-content-wrapper" class="p-9">
        <div class="container">
            <div class="row">
                <!-- Contact Page Content Start -->
                <div class="col-lg-12">
                    <!-- Contact Method Start -->
                    <div class="contact-method-wrap">
                        <div class="row">
                            <!-- Single Method Start -->
                            <div class="col-lg-3 col-sm-6 text-center">
                                <div class="contact-method-item">
                                    <span class="method-icon"><i class="fa fa-map-marker"></i></span>
                                    <div class="method-info">
                                        <h3>Street Address</h3>
                                        <p>Address : <?php echo implode('<br>', $contacts['address']); ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Method End -->

                            <!-- Single Method Start -->
                            <div class="col-lg-3 col-sm-6 text-center">
                                <div class="contact-method-item">
                                    <span class="method-icon"><i class="fa fa-phone"></i></span>
                                    <div class="method-info">
                                        <h3>Phone Number</h3>
                                        <?php foreach ($contacts['phone'] as $phone) : ?>
                                            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Method End -->

                            <!-- Single Method Start -->
                            <div class="col-lg-3 col-sm-6 text-center">
                                <div class="contact-method-item">
                                    <span class="method-icon"><i class="fa fa-envelope-open-o"></i></span>
                                    <div class="method-info">
                                        <h3>Number Fax</h3>
                                        <p><?php echo implode('<br>', $contacts['fax']); ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Method End -->

                            <!-- Single Method Start -->
                            <div class="col-lg-3 col-sm-6 text-center">
                                <div class="contact-method-item">
                                    <span class="method-icon"><i class="fa fa-envelope"></i></span>
                                    <div class="method-info">
                                        <h3>Email Address</h3>
                                        <?php foreach ($contacts['email'] as $email) : ?>
                                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Method End -->
                        </div>
                    </div>
                    <!-- Contact Method End -->
                </div>
                <!-- Contact Page Content End -->
            </div>

            <div class="row">
                <!-- Contact Form Start -->
                <div class="col-lg-9 m-auto">
                    <div class="contact-form-wrap">
                        <h2>Request a Quote</h2>

                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="text" name="first_name" placeholder="First Name *" required />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="text" name="last_name" placeholder="Last Name *" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="email" name="email_address" placeholder="Email Address *" required />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="text" name="contact_subject" placeholder="Subject *" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-input-item">
                                        <textarea name="message" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                    </div>

                                    <div class="single-input-item text-center">
                                        <button type="submit" name="submit" class="btn-add-to-cart">Send Meassage</button>
                                    </div>

                                    <!-- Form Notification -->
                                    <div class="form-messege"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact Form End -->
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

        <!-- Footer Image Gallery Area Start -->
       

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
    <!--=== Ajax Mail Js ===-->
    <script src="assets/js/ajax-mail.js"></script>
    <!--=== Plugins Min Js ===-->
    <script src="assets/js/plugins.js"></script>

    <!--=== Active Js ===-->
    <script src="assets/js/active.js"></script>
</body>

</html>