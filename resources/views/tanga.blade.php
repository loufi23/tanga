@extends('layout.master')
@section('content')
<style>
      /*===== All Preloader Style =====*/
  @import url("https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700|Hind:400,500,600,700|Quattrocento:400,700");
.preloader {
  /* Body Overlay */
  position: fixed;
  top: 0;
  left: 0;
  display: table;
  width: 100%;
  height: 100%;
  /* Change Background Color */
  background: #fdfdfd;
  z-index: 9999; }
  .preloader .spin {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px; }
    .preloader .spin .cube1, .preloader .spin .cube2 {
      background-color: #AD9147;
      width: 15px;
      height: 15px;
      position: absolute;
      top: 0;
      left: 0;
      -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
      -moz-animation: sk-cubemove 1.8s infinite ease-in-out;
      -o-animation: sk-cubemove 1.8s infinite ease-in-out;
      animation: sk-cubemove 1.8s infinite ease-in-out; }
    .preloader .spin .cube2 {
      -webkit-animation-delay: -0.9s;
      -moz-animation-delay: -0.9s;
      -o-animation-delay: -0.9s;
      animation-delay: -0.9s; }

/* CSS Keyframe Animation */
@-webkit-keyframes sk-cubemove {
  25% {
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
    -moz-transform: translateX(42px) rotate(-90deg) scale(0.5);
    -ms-transform: translateX(42px) rotate(-90deg) scale(0.5);
    -o-transform: translateX(42px) rotate(-90deg) scale(0.5);
    transform: translateX(42px) rotate(-90deg) scale(0.5); }
  50% {
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -moz-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -ms-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -o-transform: translateX(42px) translateY(42px) rotate(-180deg);
    transform: translateX(42px) translateY(42px) rotate(-180deg); }
  75% {
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -moz-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -ms-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -o-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5); }
  100% {
    -webkit-transform: rotate(-360deg);
    -moz-transform: rotate(-360deg);
    -ms-transform: rotate(-360deg);
    -o-transform: rotate(-360deg);
    transform: rotate(-360deg); } }
@keyframes sk-cubemove {
  25% {
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
    -moz-transform: translateX(42px) rotate(-90deg) scale(0.5);
    -ms-transform: translateX(42px) rotate(-90deg) scale(0.5);
    -o-transform: translateX(42px) rotate(-90deg) scale(0.5);
    transform: translateX(42px) rotate(-90deg) scale(0.5); }
  50% {
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -moz-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -ms-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -o-transform: translateX(42px) translateY(42px) rotate(-180deg);
    transform: translateX(42px) translateY(42px) rotate(-180deg); }
  50.1% {
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -moz-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -ms-transform: translateX(42px) translateY(42px) rotate(-180deg);
    -o-transform: translateX(42px) translateY(42px) rotate(-180deg);
    transform: translateX(42px) translateY(42px) rotate(-180deg); }
  75% {
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -moz-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -ms-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -o-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5); }
  100% {
    -webkit-transform: rotate(-360deg);
    -moz-transform: rotate(-360deg);
    -ms-transform: rotate(-360deg);
    -o-transform: rotate(-360deg);
    transform: rotate(-360deg); } }      
/*-------------------------------------
        3.  Welcome-hero
--------------------------------------*/
.welcome-hero{
  display: flex;
  align-items: center;
  justify-content: center;
  position:relative;
  background:url(assets/images/about/welcome-banner.jpg)no-repeat;
  background-size:cover;
  background-position: center;
  height:650px;
 
}
.welcome-hero:before{
  position:absolute;
  content: " ";
  top:0;
  left:0;
  background:wheat;
  opacity: 0.4;
  width:100%;
  height:100%;
}
.objectif {
text-align: center;
font-size: 20px;
font-family: 'Times New Roman';
}
        
/*===========================
   4.SLIDER css 
===========================*/

.slider-active .slick-dots {
  position: absolute;
  top: 50%;
  left: 0;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  text-align: center; }
  @media only screen and (min-width: 1400px) {
    .slider-active .slick-dots {
      left: 30px; } }
  .slider-active .slick-dots li {
    line-height: 0;
    margin: 15px 0; }
    .slider-active .slick-dots li button {
      width: 10px;
      height: 10px;
      font-size: 0;
      border: 0;
      background-color: #fff6a9;
      border-radius: 50%;
      cursor: pointer; }
  .slider-active .slick-dots li.slick-active button {
    width: 15px;
    height: 15px;
    background-color:#fff6a9; }

.single-slider {
  position: relative; }
  @media only screen and (min-width: 1400px) {
    .single-slider {
      padding: 0 100px; } }
  @media only screen and (min-width: 1200px) and (max-width: 1400px) {
    .single-slider {
      padding: 0 30px; } }
  .single-slider .slider-bg {
    background-color: #fffaf6; }
  .single-slider .slider-product-image img {
    width: 100%; }
  .single-slider .slider-product-image .slider-discount-tag {
    width: 125px;
    height: 125px;
    background-color: #AD9147;
    border-radius: 50%;
    text-align: center;
    display: table;
    position: absolute;
    top: 90px;
    right: -63px; }
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
      .single-slider .slider-product-image .slider-discount-tag {
        width: 100px;
        height: 100px;
        right: -50px;
        top: 50px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .single-slider .slider-product-image .slider-discount-tag {
        width: 100px;
        height: 100px;
        right: -50px;
        top: 50px; } }
    .single-slider .slider-product-image .slider-discount-tag p {
      display: table-cell;
      vertical-align: middle;
      color: #fff;
      font-size: 18px;
      font-weight: 600;
      line-height: 33px; }
  .single-slider .slider-product-content {
    max-width: 670px;
    margin-left: 125px; }
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
      .single-slider .slider-product-content {
        margin-left: 100px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .single-slider .slider-product-content {
        margin-left: 70px; } }
    @media (max-width: 767px) {
      .single-slider .slider-product-content {
        margin-left: 0;
        padding: 40px 15px 50px; } }
    .single-slider .slider-product-content .slider-title {
      font-size: 92px;
      z-index: 1; }
      @media only screen and (min-width: 992px) and (max-width: 1200px) {
        .single-slider .slider-product-content .slider-title {
          font-size: 68px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-slider .slider-product-content .slider-title {
          font-size: 48px; } }
      @media (max-width: 767px) {
        .single-slider .slider-product-content .slider-title {
          font-size: 42px; } }
      @media only screen and (min-width: 576px) and (max-width: 767px) {
        .single-slider .slider-product-content .slider-title {
          font-size: 52px; } }
      .single-slider .slider-product-content .slider-title span {
        position: relative; }
        .single-slider .slider-product-content .slider-title span::before {
          position: absolute;
          content: '';
          width: 100%;
          height: 10px;
          background-color: #fff6a9;
          left: 0;
          bottom: 17px;
          z-index: auto; }
          @media only screen and (min-width: 768px) and (max-width: 991px) {
            .single-slider .slider-product-content .slider-title span::before {
              bottom: 7px; } }
          @media (max-width: 767px) {
            .single-slider .slider-product-content .slider-title span::before {
              bottom: 8px;
              height: 6px; } }
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
      .single-slider .slider-product-content p br {
        display: none; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .single-slider .slider-product-content p br {
        display: none; } }
    @media (max-width: 767px) {
      .single-slider .slider-product-content p br {
        display: none; } }

.slider-social {
  position: absolute;
  bottom: 20px;
  right: 30px;
  width: 100%; }
  @media only screen and (min-width: 1400px) {
    .slider-social {
      padding: 0 100px; } }
  @media only screen and (min-width: 1200px) and (max-width: 1400px) {
    .slider-social {
      padding: 0 30px; } }
  .slider-social .social {
    position: relative; }
    .slider-social .social li {
      display: inline-block;
      margin: 0 5px; }
      .slider-social .social li a {
        font-size: 18px;
        color: #ddd;
        border: 1px solid #ddd;
        width: 30px;
        line-height: 32px;
        height: 30px;
        text-align: center;
        -webkit-transition: all 0.4s ease-out 0s;
        -moz-transition: all 0.4s ease-out 0s;
        -ms-transition: all 0.4s ease-out 0s;
        -o-transition: all 0.4s ease-out 0s;
        transition: all 0.4s ease-out 0s; }
        .slider-social .social li a:hover {
          color: #AD9147;
          border-color: white; }
    .slider-social .social::before {
      position: absolute;
      content: '';
      width: 70%;
      height: 1px;
      background-color: #fff6a9;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
      left: 0; }
      @media only screen and (min-width: 992px) and (max-width: 1200px) {
        .slider-social .social::before {
          width: 63%; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .slider-social .social::before {
          width: 48%; } }
      @media (max-width: 767px) {
        .slider-social .social::before {
          width: 35%;
          left: 60px; } }
      @media only screen and (min-width: 576px) and (max-width: 767px) {
        .slider-social .social::before {
          width: 65%; } }
/*===========================
      4.SERVICES css 
===========================*/

@media (max-width: 767px) {
  .team-area {
    padding-top: 75px;
    padding-bottom: 80px;
  background-color: #fffaca; } }

.single-team .team-image img {
  width: 100%; }

.single-team .team-content {
  width: 80%;
  margin: 0 auto;
  padding: 30px 15px;
  position: relative;
  -webkit-transition: all 0.4s ease-out 0s;
  -moz-transition: all 0.4s ease-out 0s;
  -ms-transition: all 0.4s ease-out 0s;
  -o-transition: all 0.4s ease-out 0s;
  transition: all 0.4s ease-out 0s; }
  @media only screen and (min-width: 992px) and (max-width: 1200px) {
    .single-team .team-content {
      padding: 30px 0; } }
  .single-team .team-content .team-name a {
    font-size: 18px;
    font-weight: 600;
    color: #121619;
    font-family: 'Hind', sans-serif;
    -webkit-transition: all 0.4s ease-out 0s;
    -moz-transition: all 0.4s ease-out 0s;
    -ms-transition: all 0.4s ease-out 0s;
    -o-transition: all 0.4s ease-out 0s;
    transition: all 0.4s ease-out 0s; }
    .single-team .team-content .team-name a:hover {
      color: #AD9147; }
  .single-team .team-content .sub-title {
    font-size: 14px;
    color: #121619; }
  .single-team .team-content .social {
    margin-top: -35px;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.4s ease-out 0s;
    -moz-transition: all 0.4s ease-out 0s;
    -ms-transition: all 0.4s ease-out 0s;
    -o-transition: all 0.4s ease-out 0s;
    transition: all 0.4s ease-out 0s; }
    .single-team .team-content .social li {
      display: inline-block;
      margin: 0 7px; }
      .single-team .team-content .social li a {
        font-size: 16px;
        color:  #fbf9f4;
        width: 30px;
        height: 30px;
        line-height: 35px;
        text-align: center;
        border-radius: 50%;
        background-color:#fbf9f4;
        -webkit-transition: all 0.4s ease-out 0s;
        -moz-transition: all 0.4s ease-out 0s;
        -ms-transition: all 0.4s ease-out 0s;
        -o-transition: all 0.4s ease-out 0s;
        transition: all 0.4s ease-out 0s; }
        .single-team .team-content .social li a:hover {
          background-color: #AD9147;
          color: #fff; }

.single-team:hover .team-content {
  background-color: #fff;
  margin-top: -60px;
  -webkit-box-shadow: 0px 6px 16px 0px   #fff6a9;
  -moz-box-shadow: 0px 6px 16px 0px   #fff6a9;
  box-shadow: 0px 6px 16px 0px   #fff6a9; }
  .single-team:hover .team-content .social {
    margin-top: 25px;
    opacity: 1;
    visibility: visible; }

/*===========================
       8.CONTACT css 
===========================*/
#contact {
  background-size: cover;
}

#contact ul li {
  padding: 3px 0;
  color: #fff;
}

#contact form {
  color: #AD9147;
}

#contact form input,
#contact form textarea {
  background: transparent;
  border: 1px solid #AD9147;
  color: #ffffff;
}
.alink{
  color: #fbff13;
}
.p{
  color: #fff;
}
</style>  
<title>Tanga Group</title>
<!--====== PRELOADER PART START ======-->
    
<div class="preloader">
    <div class="spin">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<!--====== PRELOADER PART end ======-->
<!--welcome-hero start -->
<section id="welcome-hero" class="welcome-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="header-text">
					<h2>Tanga Group <span>,</span><br> </h2> <h3> Bâtir un Technopole Africain <span>!</span></h3> 
					<p>Cabinet d'expertise Numérique</p>
				</div><!--/.header-text-->
			</div><!--/.col-->
		</div><!-- /.row-->
	</div><!-- /.container-->
</section><!--/.welcome-hero-->
		<!--welcome-hero end -->
        <br>
        <br>
        <section class="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="objectif">
                            Nous avons décider de resoudre nos problèmes quotidiens avec nos connaissances de base. <br> Alors nous batissons un technopole capable d'accélerer 
                            <br> <strong>le super développement de l'Afrique</strong> ! <br> Découvrez avec nous la  <strong>Technologie 100% Made in Burkina Faso</strong><i class="lni-quotation"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--====== SLIDER PART START ======-->
    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center ">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/1.jpg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <i class="lni-invention"></i>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Technologie</h3>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">La technologie est l'application des connaissances scientifiques aux objectifs pratiques de la vie. Comme on dit parfois, il s'agit de l'utilisation de la science pour l'amélioration de la vie quotidienne .
                                        Elle est intégrée dans le fonctionnement de toutes les machines et contribue sans cesse à l'Innovation.
                                    </p>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/2.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                        <i class="lni-invention"></i>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Innovation</h3>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">
                                        Que l’innovation se fasse au cœur de l’usine, dans un laboratoire d’université ou entre les mains d’un entrepreneur; elle constitue un domaine vital à l'évolution Humaine. 
                                    </p>
                                </div> <!-- slider product content -->
                            </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/3.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                        <i class="lni-invention"></i>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">L'Electronique</h3>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Au cours des dernières décennies, l’électronique a su se faire une place très importante dans la société moderne. <br> En réalité, il devient compliqué de s’en passer. <br> Non seulement dans la vie quotidienne, mais dans plusieurs secteurs d’activités : mécanique, aéronautique et même médical<br>Les appareils électroniques stockent votre argent. Ils transmettent le son de votre voix dans les foyers d’autres personnes. Ils font atterrir les avions et guident les voitures en toute sécurité jusqu’à leur destination. Il est étonnant de penser au nombre de choses qu’ils font réellement
                                </div> <!-- slider product content -->
                            </div>
                          </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/4.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <i class="lni-invention"></i>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Le Monde du Numérique</h3>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Le numérique qui recouvre à la fois les sciences et technologies de l’information et de la communication (informatique, électronique, télécommunications). <br>
                                            Notre monde est entièrement inondé par les technologies numériques qui modifient les activités humaines et sociales.<br>
                                        </p>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/5.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                        <i class="lni-invention"></i>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                      <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Conception</h3>
                                      <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Concevoir des Technologies adaptées à notre cher pays voilà notre métier ! 
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href="https://www.facebook.com/Tangagroupbf"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="https://bf.linkedin.com/company/tanga-group"><i class="lni-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div> <!-- container fluid -->
    </section>
    <!--====== SLIDER PART ENDS ======-->
    <!--====== service PART START ======-->
    <section id="team" class="team-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Découvrez nos services</h5>
                        <h2 class="title">Nos domaines d'activité</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="assets/images/service/blockchain.jpg" alt="Cryptographie">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">La Blockchain</h4>
                            <ul class="social mt-25">
                                <span class="sub-title">Découvrez le monde des Actifs Numériques !</span>
                                <i class="lni-bitcoin"></i>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="assets/images/service/web.jpg" alt="Web">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Le Développement Web</h4>
                            <ul class="social mt-25">
                            <span class="sub-title">Faites vous faire un site web sur-mesure!</span>
                                <li><i class="lni-website"></i></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.6s">
                        <div class="team-image">
                            <img src="assets/images/service/electronique.jpg" alt="électronique">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Conception Electronique</h4>
                            <ul class="social mt-25">
                                <span class="sub-title">Nous concevons des Projets électroniqiues !</span>
                                <i class="lni-cog"></i>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                        <div class="team-image">
                            <img src="assets/images/service/iot1.jpg" alt="IoT">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Internet of Things</h4>
                            <ul class="social mt-25">
                                <span class="sub-title">Nous concevons des solutions autour de l'Internet des Objets !</span>
                                <i class="lni-cloud-download"></i>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="assets/images/service/reseau.jpg" alt="network">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Infrastructure Réseau</h4>
                            <ul class="social mt-25">
                                <span class="sub-title">Vous avez besoin d'un réseau Informatique? Nous pouvons vous le faire !</span>
                                <i class="lni-cloudnetwork"></i>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="assets/images/service/robot.jpg" alt="robot">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Robotique</h4>
                            <ul class="social mt-25">
                                <span class="sub-title">Les robots vous connaissez ? Biensûr!<br>Nous en faisons ! </span>
                                <i class="lni-slideshare"></i>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.6s">
                        <div class="team-image">
                            <img src="assets/images/service/formation.jpg" alt="Formations">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Formations</h4>
                            <ul class="social mt-25">
                                <span class="sub-title">Vous voulez acquerir plus de compétences ? Faites le avec nous !</span>
                                <i class="lni-laptop"></i>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                        <div class="team-image">
                            <img src="assets/images/service/drone.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Drône</h4>
                            <ul class="social mt-25">
                                <span class="sub-title">Vous vous souvenez du <a href="https://youtu.be/44KvHwRHb3A">spectacle d'ouverture</a> des JO Tokyo 2021 ? <br>Ces petites merveilles sont accessibles à tous !</span>
                                <i class="lni-rocket"></i>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== Service PART ENDS ======-->

     <!--====== CONTACT PART START ======-->
     <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(assets/images/contact/contact.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="style:color= white">Contactez nous!</h2>
                    <p class="my-4 style:color= white">
                        Vous avez des questions à nous poser?
                        <br> Nous sommes disponible pour plus d'éclaircissement.
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : <a class="alink" href="mailto:contact@tangagroup.xyz">contact@tangagroup.xyz</a></li>
                        <li>Téléphone : <a class="alink" href="tel:+22667402030">+226 67 40 20 30</a></li>
                        <li>Téléphone : <a class="alink" href="tel:+22663327859">+226 63 32 78 59</a></li>
                        <li>Address : <a class="alink" href="http://goo.gl/maps/3Q2msDD7KGJ91TjFA">Pissy, Ouagadougou, Burkina Faso</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form method="POST">
                      @csrf
                    	<div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="name">Votre nom</label>
	                            <input type="name" class="form-control" id="name">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="email">Votre adresse mail</label>
	                            <input type="email" class="form-control" id="Email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" id="message" rows="3"></textarea>
	                    </div>
                        <a href="send" type="submit" class="main-btn">Envoyer</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== CONTACT PART ENDS ======-->
    
   
@endsection('content')
