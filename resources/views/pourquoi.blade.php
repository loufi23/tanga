@extends('layout.master')
@section('content')
<style>
    /*===== HEADER HERO =====*/
.header-hero {
  position: relative;
  z-index: 5;
  background-position: bottom center; 
  height: 500px;}

#particles-1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1; }

.header-hero-content {
  padding-top: 180px; }
  @media (max-width: 767px) {
    .header-hero-content {
      padding-top: 100px; } }
  .header-hero-content .header-sub-title {
    font-size: 38px;
    font-weight: 300;
    color: #fff; }
    @media (max-width: 767px) {
      .header-hero-content .header-sub-title {
        font-size: 24px; } }
    @media only screen and (min-width: 576px) and (max-width: 767px) {
      .header-hero-content .header-sub-title {
        font-size: 30px; } }
  .header-hero-content .header-title {
    font-size: 38px;
    font-weight: 700;
    color: #fff; }
    @media (max-width: 767px) {
      .header-hero-content .header-title {
        font-size: 24px; } }
    @media only screen and (min-width: 576px) and (max-width: 767px) {
      .header-hero-content .header-title {
        font-size: 30px; } }
  .header-hero-content .text {
    color: #fff;
    margin-top: 30px; }
  .header-hero-content .main-btn {
    margin-top: 40px; }
.header-hero-image {
  padding-top: 45px; }
  .header-hero-image img {
    max-width: 650px; }
    @media (max-width: 767px) {
      .header-hero-image img {
        max-width: 100%; } }
  @media (max-width: 767px) {
    .header-hero-image {
      padding-top: 30px; } }
</style>
<title>Tanga Group | Pourquoi nous ? </title>
    <!--====== HEADER PART START ======-->
        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/pourquoi/banner-bg.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Pourquoi nous choisir ?</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Nous avons de l'expérience</h2>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- header hero -->
    <!--====== HERO PART ENDS ======-->
    
    <!--====== BRAMD PART START ======-->
    <div class="brand-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="assets/images/pourquoi/keolid.webp" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="assets/images/pourquoi/anptic.jpg" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="assets/images/pourquoi/enset.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="assets/images/pourquoi/genie.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <img src="assets/images/pourquoi/sira.jpg" alt="brand">
                        </div> <!-- single logo -->
                    </div> <!-- brand logo -->
                </div>
            </div>   <!-- row -->
        </div> <!-- container -->
    </div>
    <!--====== BRAMD PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Nous avons gagné plusieurs concours <span>nationaux et internationaux!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape-1" src="assets/images/pourquoi/1.jpg" alt="1er">
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title">HACKATHON SIRA LABS BOBO 2019</h4>
                            <p class="text">Un hackathon que nous avons remporté en présentant un projet pour la réduction de l’impact de la pollution des sols et des eaux sur l’agriculture.</p>
                            <a class="more" href="https://lefaso.net/spip.php?page=web-tv-video&id_article=90836&rubrique6">Voir l'article !<i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/pourquoi/2.jpg" alt="2eme">
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title">Hackathon : “Patriotisme pour la consolidation de l’Etat-nation”</h4>
                            <p class="text">A l'occasion du 59e anniversaire de l’accession à l’indépendance du Burkina en 2019, l'ANPE et le ministère de l'économie numérique et digital ont ordganisé un Hackathon ,auquel nous avons été lauréats.</p>
                            <a class="more" href="https://lefaso.net/spip.php?article93945">Voir l'article !<i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/pourquoi/medaille.jpg" alt="médaille">
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title">Concours Africain de la Robotique</h4>
                            <p class="text">Concours panafricain organisé au Maroc par le Club Roboticore ENSAM RABAT auquel nous avons été lauréat !</p>
                            <a class="more" href="https://fb.watch/ehgHarfZnm/">Voir la vidéo !<i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"> Génie TIC 14 ème édition </h3>
                        </div> <!-- section title -->
                        <p class="text"> Concours auquel nous sommes ressortis prémier de la catégorie Environnement avec un projet de poubelles intélligentes !</p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/pourquoi/genie.jpg" alt="Genie TIC">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Projets Personnels</h3>
                        </div> <!-- section title -->
                        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                        <a href="#" class="main-btn">Try it Free</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/pourquoi/about2.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== ABOUT PART START ======-->
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Projets Personnels</h3>
                        </div> <!-- section title -->
                        <p class="text">Nous avons aussi plusieurs projets que nous avons développer à but personnel ! Des travaux qui n'ont pas tous été publiés.</p>
                        <a href="https://youtube.com/shorts/9h72v41ua6g?feature=share" class="i-btn">Voir la vidéo</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/pourquoi/travaux.jpg" alt="Travaux">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>  
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== BLOG PART ENDS ======-->
    
  
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->
@endsection('content')