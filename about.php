<?php 
include './config.php';

$result = $conn->query("SELECT * FROM content");
$content = [];
while ($row = $result->fetch_assoc()) {
    $content[$row['section']] = $row['content'];
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>

    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
  
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet"> <!-- Include Font Awesome for icons -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .header, .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        .nav {
            text-align: center;
            background-color: #444;
            padding: 0.5em 0;
        }
        .nav a {
            color: #fff;
            margin: 0 1em;
            text-decoration: none;
        }
        .main {
            padding: 2em;
        }
        .content-section {
            background-color: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2em;
        }
        .content-section h2 {
            text-align: center;
            margin-bottom: 1em;
        }
        .content-section p {
            text-align: justify;
        }
    </style>
</head>
<body>
    <!--== Page Title Area Start ==-->
    <div id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-title-content">
                        <h1>About Us</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="" class="active">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Page Title Area End ==-->

    <!--== Page Content Wrapper Start ==-->
   <div class="content-section my-5">
        <h2>Our Story</h2>
        <p id="story-content"><?php echo $content['story']; ?></p>
    </div>

    <!-- Mission Section -->
    <div class="content-section my-5">
        <h2>Our Mission</h2>
        <p id="mission-content"><?php echo $content['mission']; ?></p>
    </div>

    <!-- Vision Section -->
    <div class="content-section my-5">
        <h2>Our Vision</h2>
        <p id="vision-content"><?php echo $content['vision']; ?></p>
    </div>
</div>
    <!--== Page Content Wrapper End ==-->

    <!-- Footer Area Start -->
    <footer id="footer-area">
        <!-- Footer Follow Up Area Start -->
        <div class="footer-followup-area">
            <div class="ruby-container">
                <div class="followup-wrapper">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="follow-content-wrap">
                                <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="logo"/></a>
                             
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
    <!-- Footer Area End -->
</body>
</html>
