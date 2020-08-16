<!doctype html>

<!--derniere modification: JC le 14/08 à 10h08 -->

<html lang="fr">
<head>
	
	<meta charset="UTF-8">
	<meta name="description" content="Toutes l'actualité de du magasin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cookieconsent.min.css">
	
	<title>SAFPICSTORE - L'actualité de la boutique</title>
	
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

<body>

<!-- Début du header-->

<div class="container-fluid" id="navcolor">
  <header class="d-flex justify-content-around"> 
    
   <?php include('assets/inc/entete.php'); ?>
  </header>
</div>
<div id="entete" class="position-relative">
  <div  id="titre-position" class="position-absolute" style="width: 100%">
    <h1 id="haut"  class="titre-header-bloc">Toute l'actualité de notre boutique</h1>
  </div>
  <img src="assets/images/bandeau/img-bandeau-a-propos.jpg"  alt="Boutique multimédia pas cher" class=" w-100 img-fluid" /> </div>
	
	
<main>
	
  <div class="container">
	  
   <div class="row">
	  
    
		<img src="assets/images/logos/logo-safpic-fond-transparent.png" class="img-fluid centrage-image padtop" alt="Logo de l'association SAFPIC"/>
	
   
	 
      <article id="PA" class="padtop">
		  
        <h2 class="padtop text-center">Nouveau service : la vente de forfaits NRJ Mobile</h2>
		  
        <figure  class="text-center">
			<img class="img-fluid padtop img-thumbnail " src="assets/images/actualites/actu-nrj-800x480.jpg" alt="Nous disposons de tous les accessoires indispensables pour votre mobile">
		</figure>
		  
        <p>A partir d’aujourd’hui, venez découvrir et souscrire directement en boutique un forfait NRJ Mobile. Dans notre boutique SAFPIC, retrouvez des forfaits adaptés à votre consommation, avec ou sans engagements, avec ou sans mobile, toute une gamme de service destinés à tous les budgets.</p>
		  
		 <div class="float-right">
			<a href="actualites-de-la-boutique.html" class="btn btn-outline-info btn-home-article" role="button">Retour aux articles</a>
		 </div> 
		  
      </article>
	  
  </div>
  </div>
	  
	
	
</main>

 <!--CALL TO ACTION-->
  <div class="calltoaction"> <a href="smartphone.html"><img class="img-fluid w-100" src="assets/images/bandeau/call.gif"  alt="Découvrez notre boutique ou téléphoner au 0325895400" /></a>
  </div>
	

	
	 <h2 class="titre text-center">Une sélection de smartphones et d'accesoires à petits prix</h2>

	<div class="container margtop padbot">
				<div class="row">
					<article class="col-md-6 col-xs-12">
						<h2 class="text-center">Vente de smartphones</h2>
						<figure> <a href="smartphone.html"><img src="assets/images/home/vignettes-home/achat-de-smartphone.jpg"
								alt="Vente de téléphone à prix réduits" class="img-thumbnail img-fluid"></a>
						</figure>
					</article>
					<article class="col-md-6 col-xs-12">
						<h2 class="text-center">Vente d'accessoires</h2>
						<figure><a href="accessoire.html"><img src="assets/images/home/vignettes-home/achat-accessoires-mobile.jpg"
								alt="Nous disposons de tous les accessoires indispensables pour votre mobile"
								class="img-thumbnail img-fluid"></a></figure>
					</article>
				</div>
			</div>
	
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
    "link": "privacy-policy.html",
    "href": "https://www.demo-projet-ecole.net/privacy-policy"
  }
});
</script>

</body>
</html>
