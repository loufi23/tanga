<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Cabinet d'expertise">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/200.svg" type="image/svg">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="assets/css/LineIcons.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/master.css">
    </head>
<!--====== HEADER PART START ======-->
    <header id="home" class="header-area pt-130">
        <div class="shape header-shape-one">
            <img src="assets/images/banner/shape/shape-1.png" alt="shape">
        </div> <!-- header shape one -->

        <div class="shape header-shape-tow animation-one">
            <img src="assets/images/banner/shape/shape-2.png" alt="shape">
        </div> <!-- header shape tow -->
       
        <div class="navigation-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <img src="assets/images/logo2.svg" alt="Logo"class="logo">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="tanga">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="pourquoi">Pourquoi nous choisir?</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="page-scroll" href="formations">Formations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="projet">Projets</a>
                                    </li>
                                </ul> <!-- navbar nav -->
                            </div>
                            <div class="navbar-btn ml-20 d-none d-sm-block">
                                <a class="main-btn" href="tel:+22667402030"><i class="lni-phone"></i> +226 67 40 20 30</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
            </div> <!-- row -->
        </div> <!-- container --> 
    </header>
<!--====== HEADER PART ends ======--> 
   
@yield('content')

 <!--====== FOOTER PART START ======-->

 <footer id="footer" class="footer-area">
        <div class="footer-widget pb-10">
            <div class="container">
              <img src="assets/images/200.svg" alt="Logo">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer-logo mt-45">
                            <ul class="footer-info">
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-map"></i>
                                        </div>
                                        <div class="info-content">
                                            <p><a href="https://goo.gl/maps/3Q2msDD7KGJ91TjFA">Pissy,Ouagadougou Burkina Faso</a></p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="footer-link mt-45">
                            <ul class="mt-45">
                                <div class="single-info">
                                    <i class="lni-envelope"></i>
                                    <a href="mailto:contact@tangagroup.xyz">contact@tangagroup.xyz</a>
                                </div> <!-- single info -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <div class="footer-link mt-45">
                            <div class="single-info">
                                <i class="lni-phone-handset"></i>
                                <a href="tel:+22663327859">+226 63 32 78 59</a>
                            </div> <!-- single info -->                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="footer-logo mt-45">
                            <ul class="footer-social mt-20">
                                <a href="https://t.me/kids_lab">Rejoignez nous sur Telegram <i class="lni-telegram"></i></a>  
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Copyright by <a href="https://www.tangagroup.com" rel="nofollow">Tanga-Group</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- copyright-area -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->


 <!-- popup js script -->
    <script>

function openForm() {
  document.getElementById("popupForm").style.display = "block";
}

function closeForm() {
  document.getElementById("popupForm").style.display = "none";
}
</script>


    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== Aos js ======-->
    <script src="assets/js/aos.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
