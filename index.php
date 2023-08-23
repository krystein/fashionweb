<?php include('./includes/class-autoload.inc.php');

$images = new UploadView();
$all = $images->viewImages();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
    #scrollToTop {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #555;
        color: #fff;
        border: none;
        border-radius: 20%;
        cursor: pointer;
        font-size: 18px;
        text-align: center;
        outline: none;
        /* Add this line to remove outline */
    }

    html {
        scroll-behavior: smooth;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="caption">
                        <h2>Ecommerce HTML Template</h2>
                        <div class="line-dec"></div>
                        <p>Pixie HTML Template can be converted into your desired CMS theme. Total <strong>5
                                pages</strong>
                            included. You can use this Bootstrap v4.1.3 layout for any CMS.
                            <br><br>Please tell your friends about <a rel="nofollow"
                                href="https://www.facebook.com/tooplate/">Tooplate</a> free template site. Thank you.
                            Photo credit goes
                            to <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.
                        </p>
                        <div class="main-button">
                            <a href="#">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <!-- About Page Starts Here -->
    <div class="about-page" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>About Us</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="assets/images/about-us.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <h4>Phasellus vel interdum elit</h4>
                        <p><a href="https://www.pexels.com/photo/group-of-people-raising-right-hand-1059120/">Photo
                                Credit</a> goes
                            to
                            Pexels website. Aliquam erat volutpat. Pellentesque fringilla, ligula consectetur cursus
                            scelerisque, leo
                            elit pellentesque sapien, et pharetra arcu elit vitae sem. Suspendisse erat dui, condimentum
                            in mi ac,
                            varius tempor sapien. Donec in justo sit amet ex aliquet maximus ac quis erat.</p>
                        <br>
                        <p>Donec fermentum tincidunt tellus quis fermentum. Proin eget imperdiet purus. Nulla facilisi.
                            Aliquam
                            tincidunt porttitor dui sed euismod. Duis est libero, rhoncus fermentum turpis id, tempus
                            fringilla ipsum.
                            Nullam venenatis tincidunt neque vel hendrerit. Suspendisse porta pretium porttitor.</p>
                        <br>
                        <p>Sed purus quam, ultricies eu leo in, sollicitudin varius quam. Proin dictum urna ac diam
                            fermentum
                            tempus.
                            Pellentesque urna urna, ullamcorper a tincidunt dignissim, venenatis in nisi. Vivamus in
                            volutpat tellus.
                            Etiam fermentum luctus posuere.</p>
                        <br>
                        <p><a rel="nofollow" href="https://www.tooplate.com/view/2114-pixie">Pixie HTML Template</a> can
                            be
                            converted
                            into your desired CMS theme. You can use this Bootstrap v4.1.3 layout for any online shop.
                            Please tell
                            your
                            friends about <a rel="nofollow" href="https://www.facebook.com/tooplate/">Tooplate</a>.
                            Thank you.</p>
                        <div class="share">
                            <h6>Find us on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                            class="fa fa-linkedin"></i></a><a href="#"><i
                                            class="fa fa-twitter"></i></a></span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Page Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        foreach ($all as $image) {
                            ?>
                        <div class="featured-item">
                            <div>
                                <img src="./image/<?php echo $image['filename']; ?>">
                            </div>
                            <h2 class="uppercase font-semibold">
                                <?php echo $image['code']; ?>
                            </h2>
                            <p>
                                <?php echo $image['name']; ?>
                            </p>
                            <p></p>
                            <p>
                                <?php echo $image['type']; ?>$
                            </p>
                            <p>
                                <?php echo $image['price']; ?>
                            </p>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featred Ends Here -->
    <!--  Page Starts Here -->
    <div class=" contact-page" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907"
                            width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="container">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name"
                                                placeholder="Your name..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                placeholder="Your email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input name="subject" type="text" class="form-control" id="subject"
                                                placeholder="Subject..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message"
                                                placeholder="Your message..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Send Message</button>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="share">
                                            <h6>You can also keep in touch on: <span><a href="#"><i
                                                            class="fa fa-facebook"></i></a><a href="#"><i
                                                            class="fa fa-linkedin"></i></a><a href="#"><i
                                                            class="fa fa-twitter"></i></a></span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Page Ends Here -->

    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Subscribe on PIXIE now!</h1>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="main-content">
                        <p>Integer vel turpis ultricies, lacinia ligula id, lobortis augue.
                            Vivamus porttitor dui id
                            dictum
                            efficitur. Phasellus vel interdum elit.</p>
                        <div class="container">
                            <form id="subscribe" action="" method="get">
                                <div class="row">
                                    <div class="col-md-7">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                                                onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                                                value="Your Email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Subscribe
                                                Now!</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Form Ends Here -->



    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="assets/images/header-logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">How It Works ?</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Ends Here -->
    <button id="scrollToTop" onclick="scrollToTop()">Top</button>

    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2019 Company Name

                            - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>
    <script>
    window.onscroll = function() {
        showScrollButton();
    };

    function showScrollButton() {
        var scrollToTopButton = document.getElementById('scrollToTop');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    </script>


</body>

</html>