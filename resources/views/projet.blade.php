@extends('layout.master')
@section('content')
<style>
	@font-face {
  font-family: 'icomoon';
  src: url("../pro/fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../pro/fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../pro/fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../pro/fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../pro/fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}
.section-heading.svg-sm-2 .svg {
  height: 150px;
  margin-bottom: 0;
  padding: 0;
}
.section-heading.svg-sm .svg {
  height: 180px;
  margin-bottom: -80px;
  padding: 0;
}
.section-heading.colored .svg {
  fill: #AD9147;
}
.section-heading h2 {
  font-size: 80px;
  color: #AD9147;
  display: block;
  padding-bottom: 20px;
  line-height: 1.5;
}
@media screen and (max-width: 768px) {
  .section-heading h2 {
    font-size: 50px;
  }
}
.section-heading h3 {
  font-weight: 300;
  line-height: 1.5;
  color: #929292;
}
@media screen and (max-width: 768px) {
  .section-heading h3 {
    font-size: 24px !important;
    line-height: 34px;
  }
}

#qbootstrap-story,
#qbootstrap-when-where,
#qbootstrap-testimonials,
#qbootstrap-press {
  padding: 7em 0;
}
@media screen and (max-width: 480px) {
  #qbootstrap-story,
  #qbootstrap-when-where,
  #qbootstrap-press {
    padding: 5em 0;
  }
}

.qbootstrap-bg {
  background: rgba(0, 0, 0, 0.03);
}

.qbootstrap-cover,
.qbootstrap-hero {
  position: relative;
  height: 800px;
  width: 100%;
}
@media screen and (max-width: 768px) {
  .qbootstrap-cover,
  .qbootstrap-hero {
    height: 700px;
  }
}

.qbootstrap-overlay {
  position: absolute !important;
  width: 100%;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 1;
  background: rgba(0, 0, 0, 0.4);
}

.qbootstrap-cover {
  background-size: cover;
  position: relative;
  background-repeat: no-repeat;
}
@media screen and (max-width: 768px) {
  .qbootstrap-cover {
    height: inherit;
    padding: 3em 0;
  }
}
.qbootstrap-cover .display-t {
  display: table;
  height: 800px;
  width: 100%;
  position: relative;
  z-index: 2;
}
@media screen and (max-width: 768px) {
  .qbootstrap-cover .display-t {
    height: 600px;
  }
}
.qbootstrap-cover .display-tc{
  display: table-cell;
  vertical-align: middle;
}
.qbootstrap-cover .display-tc .holder{
  color: #fff;
  font-family: "Source Sans Pro", Arial, sans-serif;
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 10px;
}
.qbootstrap-cover .display-tc .holder span{
  position: relative;
}
.qbootstrap-cover .display-tc .holder span:before, .qbootstrap-cover .display-tc .holder span:after {
  position: absolute;
  top: 49%;
  width: 100px;
  height: 2px;
  background: #fff;
  content: '';
}
.qbootstrap-cover .display-tc .holder span:before{
  left: -110px;
}
.qbootstrap-cover .display-tc .holder span:after{
  right: -110px;
}
@media screen and (max-width: 768px) {
  .qbootstrap-cover .display-tc .holder,
  .video-hero .display-tc .holder {
    letter-spacing: 2px;
  }
  .qbootstrap-cover .display-tc .holder span {
    position: relative;
  }
  .qbootstrap-cover .display-tc .holder span:before, .qbootstrap-cover .display-tc .holder span:after {
    width: 50px;
    height: 2px;
  }
  .qbootstrap-cover .display-tc .holder span:before {
    left: -60px;
  }
  .qbootstrap-cover .display-tc .holder span:after{
    right: -60px;
  }
}
.qbootstrap-cover .display-tc h2 {
  color: #fff;
  font-size: 80px;
  margin-bottom: 20px;
  font-weight: 300 !important;
}
.qbootstrap-cover .display-tc h2 strong{
  font-weight: 700;
}
@media screen and (max-width: 768px) {
  .qbootstrap-cover .display-tc h2 {
    font-size: 60px;
  }
}
.qbootstrap-cover .display-tc p{
  color: #fff;
  font-weight: 400;
  font-size: 20px;
  letter-spacing: 10px;
}
.qbootstrap-cover .display-tc .svg-sm .svg{
  height: 180px;
  margin-bottom: 0;
}
.qbootstrap-cover .display-tc .colored .svg {
  fill: #fff;
}
.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.timeline:before {
  top: 30px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 1px;
  border-right: 1px dashed #AD9147;
  left: 50%;
  margin-left: 0px;
}
@media screen and (max-width: 768px) {
  .timeline:before {
    margin-left: 15px;
  }
}
@media screen and (max-width: 480px) {
  .timeline:before {
    margin-left: -60px;
  }
}
.timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.timeline > li:before, .timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  width: 38%;
  float: left;
  border: 1px solid rgba(0, 0, 0, 0.05);
  padding: 50px;
  position: relative;
  z-index: 0;
  background: #fff;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 80px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid rgba(0, 0, 0, 0.05);
  border-right: 0 solid rgba(0, 0, 0, 0.05);
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 81px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
@media screen and (max-width: 480px) {
  .timeline > li > .timeline-panel {
    width: 75% !important;
  }
  .timeline > li > .timeline-panel:before {
    top: 30px;
  }
  .timeline > li > .timeline-panel:after {
    top: 31px;
  }
}
.timeline > li > .timeline-panel .overlay {
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 10px;
  right: 10px;
  content: '';
  background: #fdfbd2;
  z-index: -1;
}
.timeline > li > .timeline-panel .overlay.overlay-2 {
  background:#fdfbd2 ;
}
.timeline > li > .timeline-badge {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
  color: #fff;
  width: 200px;
  height: 200px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 0;
  left: 50%;
  margin-left: -100px;
  border: 10px solid #fff;
  z-index: 1;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
@media screen and (max-width: 480px) {
  .timeline > li > .timeline-badge {
    width: 90px;
    height: 90px;
    margin-left: -20px !important;
  }
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

.timeline-title {
  margin-top: 0;
  font-size: 34px;
  color: #AD9147;
  margin-bottom: 30px;
}

.date {
  display: block;
  margin-bottom: 20px;
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}

.timeline-body > p + p {
  margin-top: 5px;
}

@media (max-width: 992px) {
  ul.timeline:before {
    left: 100px;
  }

  ul.timeline > li > .timeline-panel {
    width: calc(100% - 240px);
    width: -moz-calc(100% - 240px);
    width: -webkit-calc(100% - 240px);
  }

  ul.timeline > li > .timeline-badge {
    left: 15px;
    margin-left: 0;
    top: 16px;
  }

  ul.timeline > li > .timeline-panel {
    float: right;
  }

  ul.timeline > li > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }

  ul.timeline > li > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
  }
}
.qbootstrap-greetings {
  background-size: cover;
  position: relative;
  background-repeat: no-repeat;
}
.wedding-events {
  background: #fff;
}
@media screen and (max-width: 768px) {
  .wedding-events {
    margin-bottom: 2em;
  }
}
.wedding-events .ceremony-bg {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
  height: 400px;
}
.wedding-events .desc {
  padding: 2em;
  border: 1px solid rgba(0, 0, 0, 0.05);
  position: relative;
  z-index: 0;
}
.wedding-events .desc:after {
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 10px;
  right: 10px;
  content: '';
  background: #f4f3e2;
  z-index: -1;
}
.wedding-events .desc h3 {
  font-size: 40px;
  color: #AD9147;
  display: block;
  margin-bottom: 40px;
}
.wedding-events .desc .date {
  display: block;
}
.wedding-events .desc .date span {
  display: block;
  font-size: 16px;
  color: rgba(0, 0, 0, 0.7);
}
.wedding-events .desc .icon-tip {
  position: relative;
  width: 100%;
  float: left;
}
.wedding-events .desc .icon {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin-top: 60%;
}
.wedding-events .desc .icon i {
  color: #fff;
  padding: 15px;
  background: #AD9147;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
@media screen and (max-width: 768px) {
  .wedding-events .desc .icon {
    position: relative;
    margin: 0;
  }
}
#qbootstrap-press {
  background: #f4f4f4;
}
#qbootstrap-press .qbootstrap-press-item {
  background: #fff;
  float: left;
  margin-bottom: 30px;
  position: relative;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
@media screen and (max-width: 480px) {
  #qbootstrap-press .qbootstrap-press-item {
    display: block !important;
  }
}
#qbootstrap-press .qbootstrap-press-item .qbootstrap-press-text,
#qbootstrap-press .qbootstrap-press-item .qbootstrap-press-img {
  width: 50%;
}
@media screen and (max-width: 480px) {
  #qbootstrap-press .qbootstrap-press-item .qbootstrap-press-text,
  #qbootstrap-press .qbootstrap-press-item .qbootstrap-press-img {
    height: inherit;
    float: none !important;
    width: 100%;
    display: block !important;
  }
}
#qbootstrap-press .qbootstrap-press-item .qbootstrap-press-text {
  float: left;
  padding: 20px;
}
#qbootstrap-press .qbootstrap-press-item .qbootstrap-press-text .qbootstrap-press-title {
  margin: 0 0 20px 0;
  padding: 0 0 10px 0;
  font-weight: 400;
  font-size: 20px;
  color: #444;
  position: relative;
}
#qbootstrap-press .qbootstrap-press-item .qbootstrap-press-text .qbootstrap-press-title .qbootstrap-border {
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px;
  width: 30px;
  background: #AD9147;
}
#qbootstrap-press .qbootstrap-press-item .qbootstrap-press-img {
  position: absolute;
  right: 0;
  bottom: 0;
  top: 0;
  background-size: cover;
}
@media screen and (max-width: 480px) {
  #qbootstrap-press .qbootstrap-press-item .qbootstrap-press-img {
    height: 200px;
    left: 0;
    top: 0;
    position: relative;
    width: 100%;
  }
}
</style>
<title>Tanga Group | Nos Réalisations</title>
	<link rel="stylesheet" href="pro/css/bootstrap.css"> 
 	<div class="qbootstrap-hero" data-section="home">
		<div class="qbootstrap-overlay"></div>
		<div class="qbootstrap-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/project/projet.jpg);">
			<div class="display-t">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="animate-box svg-sm colored">
								<h2>Projets</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="qbootstrap-story" data-section="story">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm-2">
						<h2>Nos Réalisations</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(assets/images/project/conduite.jpg);"></div>
							<div class="timeline-panel">
								<div class="overlay"></div>
								<div class="timeline-heading">
									<h3 class="timeline-title">ARCADE</h3>
									<span class="date">Août 2017</span>
								</div>
								<div class="timeline-body">
									<p>C'est un Simulateur de Conduite. Il est adapté pour les auto-écoles afin d'aider à apprendre les bases de la conduite aux apprenants qui sont soumis aux conditions réelles de conduite.
										 En passant par ce simulateur, les apprenants abordent plus sereinement les séances de conduite et les accidents d'apprentissage seront réduits.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(assets/images/project/drone.webp);"></div>
							<div class="timeline-panel">
								<div class="overlay overlay-2"></div>
								<div class="timeline-heading">
									<h3 class="timeline-title">Drône Birotor</h3>
									<span class="date">Août 2017</span>
								</div>
								<div class="timeline-body">
									<p>Nous avons conçu un drône avec un système simple et ingénieux lui permettant d'aller dans toutes les diretions possibles avec seulement deux hélices.</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(assets/images/project/poubelle.jpg);"></div>
							<div class="timeline-panel">
								<div class="overlay"></div>
								<div class="timeline-heading">
									<h3 class="timeline-title">SANYA</h3>
									<span class="date">Novembre 2018</span>
								</div>
								<div class="timeline-body">
									<p>Des poubelles intélligentes qui intègrent un système de tri et d'alerte en cas de saturation. Elles envoient un signal au centre de gestion pour notifier qu'il est temps de les vider. Aussi elles disposent d'un panneau publicitaire.</p>
									<a href="https://youtu.be/nwU-LWZWXwM" class="i-btn">Voir la vidéo !</a>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="qbootstrap-testimonials" class="qbootstrap-greetings" data-section="greetings" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/project/technologie.jpg);">
	<div class="overlay"></div>	
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 section-heading text-center svg-sm colored">
					
				</div>
			</div>
		</div>
	</div>
</div>
	<div id="qbootstrap-when-where" data-section="when-where">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm colored">
						<h2>Nos Travaux</h2>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 text-center animate-box">
					<div class="wedding-events">
						<div class="ceremony-bg" style="background-image: url(assets/images/project/jus.jpg);"></div>
						<div class="desc">
							<h3>N'JOI</h3>
							<div class="date">
								<span>Janvier 2022</span>
							</div>
							<p>Vous voulez une boisson fraîche? Nous développons un distributeur de boissons qui vous permettra dans une file d'attente, une salle de gym, ou dans une salle d'attente de vous rafraîchir.</p>
							<p><a href="maintenance" class="main-btn">Voir plus</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-center animate-box">
					<div class="wedding-events">
						<div class="ceremony-bg" style="background-image: url(assets/images/project/champ.jpg);"></div>
						<div class="desc">
							<h3>Teega</h3>
							<div class="date">
								<span>Avril 2022</span>
							</div>
							<p>Avec un dispositif placé dans votre champs, une plateforme en ligne; vous pouvez à tout moment savoir si votre champ a besoin d'eau , s'il y a des intrus ou s'il y fait trop chaud, un incendie et même l'arroser à distance.</p>
							<p><a href="http://teega.xyz/" class="main-btn">Voir plus</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-center animate-box">
					<div class="wedding-events">
						<div class="ceremony-bg" style="background-image: url(assets/images/project/incendie.jpg);"></div>
						<div class="desc">
							<h3>Safety-Check</h3>
							<div class="date">
								<span>Mai 2022</span>
							</div>
							<p>Pour vous proteger vous et votre maison des incendies, nous développons un dispositif qui vous alertera en cas d'incendie et de fuite de gaz. Ce dispositif pourra même alerter les secours en cas d'incendie.</p>
							<p><a href="http://sft-check.xyz/" class="main-btn">Voir plus</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<div id="qbootstrap-press" data-section="blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm colored">
						<h2>Nos projets futurs</h2>
						<div class="row"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(assets/images/project/iot.jpg)">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title"> L'Internet des Objets <span class="qbootstrap-border"></span></h3>
							<p>Pouvoir contrôler les objets de votre maison : voici l'un de nos objectifs pour le futur.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(assets/images/project/basket.jpg)">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title">Borne d'arcade<span class="qbootstrap-border"></span></h3>
							<p>Une partie de basket automatisé ça vous dis? Bientôt nous y travaillerons! </p>
						</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(assets/images/project/solaire.jpg);">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title">L'énergie solaire<span class="qbootstrap-border"></span></h3>
							<p>Notre pays dispose d'une source d'énergie innépuisable "le soleil". Autant développer des solutions locales adaptées à nos besoins !</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(assets/images/project/route.jpg);">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title">Sécurité Routière <span class="qbootstrap-border"></span></h3>
							<p>Il s'agit d'un système de surveillance des routes à grande circulation afin de pouvoir detecter les infractions. </p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection('content')