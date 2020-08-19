<!doctype html>

<!--derniere modification: Yanis le 15/08 à 19h30 -->


<html lang="fr">

<head>
	
	<meta charset="UTF-8">
	<meta name="description" content="Le sp&eacute;cialiste du smartphone &agrave; petit prix pour tous. Des smartphones neuf et reconditionn&eacute;s par des experts, garantis 1 an.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cookieconsent.min.css">
	
	<title>Bienvenue sur SAFPICSTORE</title>
	
	<!--Intégration du favicon -->
	<link rel="manifest" href="assets/js/manifest.json">
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon//apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Fin d'intégration du favicon -->
	
</head>

<body class="justify-content-around">
	<!-- Début du header-->
<div class="contenaire-fluid" id="navcolor">
	
	<!-- Le contenaire va me centrer la zone nav bar du header-->
	<div class="container">

		<header class="flex-md-fill">
			
			
			 <?php include('assets/inc/entete.php'); ?>

		</header>
		
	</div>

	<!-- implémentation du carousel -->

	<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

		<!--Slides-->
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active"> <a href="smartphone.php"><img src="assets/images/header/slide-promo-1.jpg" class="d-block w-100 img-fluid" alt="téléphone low cost"></a>
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item"> <a href="smartphone.php"><img src="assets/images/header/slide-promo-4.png" class="d-block w-100 img-fluid" alt="mobile lyceen promo"></a>
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item"> <a href="smartphone.php"><img src="assets/images/header/slide-promo-5.png" class="d-block w-100 img-fluid" alt="discount promos phone"></a>
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

	<!--fin du carousel -->
	<!-- MAIN-->
	<main>

		<div class="container-fluid">
			<div class="container"> </div>

			<!--ARTICLE-->
			<div class="container margtop">
				<div class="row">
					<article class="col-md-6 col-xs-12 zoomphoto">
						<h2 class="text-center">Vente de smartphones</h2>
						<figure> <a href="smartphone.php"><img src="assets/images/home/vignettes-home/achat-de-smartphone.jpg"
								alt="Vente de téléphone à prix réduits" class="img-thumbnail img-fluid"></a>
						</figure>
					</article>
					<article class="col-md-6 col-xs-12 zoomphoto">
						<h2 class="text-center">Vente d'accessoires</h2>
						<figure><a href="accessoire.php"><img src="assets/images/home/vignettes-home/achat-accessoires-mobile.jpg"
								alt="Périphériques mobile"
								class="img-thumbnail img-fluid"></a></figure>
					</article>
				</div>
			</div>
			<!--CALL TO ACTION-->
			<div class="calltoaction"> <a href="a-propos-du-site.php"><img class="img-fluid w-100" src="assets/images/bandeau/call.gif" alt="Découvrez notre boutique ou téléphoner au 0325895400" /></a> 
			</div>


			<div class="container">
				<h2 class="text-center padbot">
					Les dernières offres et informations de notre boutique
				</h2>
			</div>
			<!--ARTICLE 2eme parties-->
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-12 zoomphotoB">
						<figure>
							<a href="nouveaux-produits.php">
							<img class="img-fluid img-thumbnail" src="assets/images/actualites/xiaomi.jpg" alt="Les actualités de la boutique">
							</a>
							<figcaption>
								<span class="text-black-50">21 août 2020</span>
							</figcaption>
						</figure>
					  <p>Afin de répondre à la demande de nos clients, nous continuons d’étoffer nos offres produits au fil des mois. [<a href="nouveaux-produits.php" class="btn-outline-dark" role="button">En savoir +</a>…]</p>
						
						
					</div>
					<div class="col-md-3 col-xs-12 zoomphotoB">

						<figure> <a href="nrj-mobile.php"><img class="img-fluid img-thumbnail" src="assets/images/actualites/actu-nrj-800x480.jpg" alt="Les actualités de la boutique"></a>
							<figcaption>
								<span class="text-black-50">14 août 2020</span>
							</figcaption>
						</figure>
					  <p>A partir d’aujourd’hui, venez découvrir et souscrire directement en boutique un forfait NRJ Mobile.<br>[<a href="nrj-mobile.php" class="btn-outline-dark" role="button">En savoir +</a>…]</p>
						
					</div>
					<div class="col-md-3 col-xs-12 zoomphotoB">

						<figure> <a href="accessoire.php"><img class="img-fluid img-thumbnail" src="assets/images/home/vignettes-home/achat-accessoires-mobile.jpg"
								alt="Les actualités de la boutique"></a>
							<figcaption>
								<span class="text-black-50">2 août 2020</span>
							</figcaption>
					  </figure>
					  <p>Les Air Pods de première génération sont au prix incroyable de 120 euros. dépêchez-vous !<br>[<a href="accessoire.php" class="btn-outline-dark " role="button">En savoir +</a>…]</p>
						    
						
					</div>
					<div class="col-md-3 col-xs-12 zoomphotoB">

						<figure><a href="lancement-du-site-internet.php"><img class="img-fluid img-thumbnail"
								src="assets/images/actualites/boutique.jpg"
								alt="Les actualités de la boutique"></a>
							<figcaption>
								<span class="text-black-50">2 juillet 2020</span>
							</figcaption>
					  </figure>
							<p>SAFPIC met en ligne son site internet ! Un projet qui tenait à cœur à toute l’équipe<br> [<a href="lancement-du-site-internet.php" class="btn-outline-dark" role="button">En savoir +</a>…]</p>
						
						
				  </div>
				</div>
			</div>



			<!--logo et texte-->
			<div class="container" id="logo2">
				<figure><img src="assets/images/logos/logo-safpic-fond-transparent.png" class="logo-hidden padtop" alt="Logo Safpic"></figure>
				<h2 class="text-center">SAFPIC : Le meilleur choix, près de chez vous </h2>
			</div>
			<!--article et bouton-->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12 padtop">
						<p class="padtop">Forte de ses 10 ans d’expérience dans les métiers de la téléphonie mobile et de la vente de matériel associée, notre équipe vous conseille et vous apporte des solutions adaptées à votre budget tout en assurant la pérennité de vos smartphones et téléphones mobiles.</p>
							
						<a href="a-propos-du-site.php" class="btn btn-outline-info btn-home-article" role="button">En savoir +</a>
					</div>
					<div class="col-md-6 col-xs-12 padtop" id="coordonnees">
						<strong>Nos horaires :</strong>
						<p>Nous sommes ouverts du lundi au samedi de 10h a 17h</p>
						<strong>Nos coordonnées</strong>
					  <p>68 avenue Lamartine 59000 Lille</p>
						<p>Tel:0325895400</p>
						<p>Mail:<a href="mailto:contact@safpic.f"> contact@safpic.fr</a></p>
					</div>
				</div>
			</div>
			<div class="container text-center margtop">
				<h3 class="padtop">Abonnement à la newsletter</h3>
				<div class="padbot">
					<form action="/leads-subscribing-newsletter" method="post">
				<div>
				  <label for="email">E-mail :&nbsp;</label>
					<input name="subscriber_email" type="email" id="email" size="15" />
					<button class="btn-info" type="submit">OK</button>
				</div>
					</form>
				</div>
			</div>
			<!--FIN DIV FLUID-->
		</div>
		<!--FIN DU MAIN-->
	</main>

 <?php include('assets/inc/footer.php'); ?>
 

	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/cookieconsent.min.js" data-cfasync="false"></script>

<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#1d8a8a"
    },
    "button": {
      "background": "transparent",
      "text": "#62ffaa",
      "border": "#62ffaa"
    }
  },
  "position": "bottom-left",
  "content": {
    "message": "Attention: Ce site n'est pas un site e-commerce, c'est un devoir d'évaluation pour le centre WF3 de Lille. Nous sommes des étudiants et utilisons des cookies pour comprendre l'analyse d'audience d'un site internet. ",
    "dismiss": "OK",
    "link": "privacy-policy.php",
    "href": "https://www.demo-projet-ecole.net/privacy-policy.php"
  }
});
</script>

</body>

</html>