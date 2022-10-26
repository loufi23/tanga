@extends('layout.master')
@section('content')
<link rel="stylesheet" href="assets/css/style.css">  
<title>Tanga-Group | Formations</title>

    <div class="header-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-sm-10">
                    <div class="banner-content">
                        <h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Nous formons Aussi!</h4>
                        <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s">Avec <span>Tanga-Group</span> outillez vous pour les métiers de <span> l'avenir !</span></h1>
                        <a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Inscrivez-vous dès maintenant !</a>
                    </div> <!-- banner content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="banner-image bg_cover" style="background-image: url(assets/images/formation/img.jpg)"></div>
    </div> <!-- header banner -->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="assets/images/formation/about-2.jpg" alt="About">
                        </div> <!-- single image -->
                        <div data-aos="fade-right" class="about-btn">
                            <a class="main-btn" href="#"><span><img src="assets/images/favicon.jpg" alt=""></span> Tanga Group</a>
                        </div>
                        <div class="single-image image-tow float-right">
                            <img src="assets/images/formation/about-1.jpg" alt="About">
                        </div> <!-- single image -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-45">
                        <h3 class="about-title mt-10">Pourquoi vous former chez nous ?</h3>
                        <p class="mt-25"> Etant un cabinet d'expertise nous construisons chaque jour des <strong>circuits électroniques</strong> et des <strong>automates</strong> . Prouesses que nous réalisons grâce à nos différentes connaissances acquises au fil des années, des projets conçus et grâce à l'outil informatique. Ainsi nous pouvons garantir des <strong>Formations pratiques d'excellente qualité </strong>.  
                        <br> <strong>Electronique</strong>  et <strong> Informatique</strong>  allant de pair, Nos Formations tournent autour de ces deux thèmatiques. </p>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    <section id="service" class="services-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Nos Formations</h5>
                        <h2 class="title">Quelles sont les formations ?</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="services-icon">
                            <i class="lni-website"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Développement Web</h4>
                            <p class="mt-20">Créez des<strong> sites web </strong>de A à Z !<br>En entrant dans le monde de la <strong>Programmation</strong> Informatique. </p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="lni-slideshare"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Robotique</h4>
                            <p class="mt-20">Concevez, fabriquez des <strong>robots</strong> de toutes pièces et animez les!</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="services-icon">
                            <i class="lni-laptop"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Bureautique</h4>
                            <p class="mt-20">Utilisez le pack Office.<br><strong>Word</strong>, <strong>Powerpoint</strong> et <strong>Excel</strong> n'auront plus de secrets pour vous</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="services-content mt-15">
                            <img src="assets/images/formation/former1.jpg" alt="">
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="lni-cloudnetwork"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">IoT : Internet of Things</h4>
                            <p class="mt-20"> L'internet des Objets<br>Connectez des objets et des lieux. </P>
                        </div>
                    </div>
                </div> <!-- row -->
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="services-content mt-15">
                        <img src="assets/images/formation/former2.jpg" alt="">
                       
                        </div>
                    </div> 
                </div><!-- single services -->

        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-130 pb-130">
        <div class="shape shape-one">
            <img src="assets/images/formation/shape.png" alt="testimonial">
        </div>
        <div class="shape shape-tow">
            <img src="assets/images/formation/shape.png" alt="testimonial">
        </div>
        <div class="shape shape-three">
            <img src="assets/images/formation/shape.png" alt="testimonial">
        </div>
        <div class="container">
            <div class="testimonial-bg bg_cover pt-80 pb-80" style="background-image: url(assets/images/formation/penser.jpg)">
                <div class="row">
                    <div class="col-xl-4 offset-xl-7 col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="testimonial-active">
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/formation/sénèque.jpg" alt="Sénèque">
                                    <div class="quota">
                                        <i class="lni-invention"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>“Etudie, non pour savoir plus, mais pour savoir mieux. ”</p>
                                    <h5 class="testimonial-name mt-15">Sénèque</h5>
                                </div>
                            </div> <!-- single-testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/formation/isidor.jpeg" alt="Saint Isidor de Seville">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>“Etudiez comme si vous deviez vivre toujours ; vivez comme si vous deviez mourir demain.”</p>
                                    <h5 class="testimonial-name mt-15">Saint Isidore de Séville</h5>
                                </div>
                            </div> <!-- single-testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/formation/inscription.jpg" alt="Proverbe">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>“La formation est l'essence de tout succès.”</p>
                                    <h5 class="testimonial-name mt-15">Arnaud BOTI</h5>
                                </div>
                            </div> <!-- single-testimonial -->
                        </div> <!--  testimonial active -->
                    </div>
                </div> <!-- row -->
            </div> <!-- testimonial bg -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
    <!--====== CONTACT PART START ======-->
    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Avec Nous</h5>
                        <h2 class="title">Découvrez l'informatique et l'électronique!</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="col-md-12">
                            <div class="single-form form-group text-center">
                                <a class="main-btn" href="https://bit.ly/3cyWMCZ"> Inscription</a>
                            </div> <!-- single form -->
                             <div class="login-popup">
                                <div class="form-popup" id="popupForm">
                                    <form method="POST" action="{{route('submit')}}" enctype="multipart/form-data" class="form-container">
                                        @csrf
                                        <h4>Inscrivez Vous! <i class="lni-emoji-cool"></i></h4>
                                        <input type="text" id="name" placeholder="Nom et prénom" name="Nom" required />
                                        <input type="email" id="email" placeholder="Votre email" email="email" required />
                                        <input type="text" id="message" placeholder="Formation choisie" message="message" required />
                                        <a href="submit" type="submit" class="i-btn">Envoyez!</a><br>
                                        <button type="button" class="i-btn" onclick="closeForm()"><i class="lni-exit"></i></button>
                                    </form>
                                </div>
                             </div>
                        </div> 
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            
            <div class="row text-right ">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="text-right">
                        <div>
                            <a href="https://t.me/kids_lab"> Rejoignez notre communauté Telegram <i class="lni-telegram"></i></a>  <!-- single form -->
                        </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

  

@endsection('content')
