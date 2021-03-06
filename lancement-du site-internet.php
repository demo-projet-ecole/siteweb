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
<title>MOBITECSTORE - L'actualité de la boutique</title>

<!--Intégration du favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="/assets/images/favicon/favicon.png" type="image/png">
<link rel="icon" sizes="32x32" href="/assets/images/favicon-32.png" type="image/png">
<link rel="icon" sizes="64x64" href="/assets/images/favicon-64.png" type="image/png">
<link rel="icon" sizes="96x96" href="/assets/images/favicon-96.png" type="image/png">
<link rel="icon" sizes="196x196" href="/assets/images/favicon-196.png" type="image/png">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="60x60" href="/assets/images/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-touch-icon-144x144.png">
<meta name="msapplication-TileImage" content="/assets/images/favicon-144.png">
<meta name="msapplication-TileColor" content="#FFFFFF">


<!-- Fin d'intégration du favicon -->

</head>

<body>
<header class="flex-md-fill"> 
  <!-- Début du header-->
  
  <div id="navcolor"> 
    
    <!-- Le contenaire va me centrer la zone nav bar du header-->
    <div class="container">
      <?php include('assets/inc/entete.php'); ?>
    </div>
  </div>
</header>
<main class="indexbas">
  <div id="entete" class="position-relative">
    <div  id="titre-position" class="position-absolute" style="width: 100%">
      <h1 id="haut"  class="titre-header-bloc">Toute l'actualité de notre boutique</h1>
    </div>
    <img src="assets/images/bandeau/news.jpg"  alt="Boutique multimédia pas cher" class=" w-100 img-fluid" /> </div>
  <div class="container">
    <div class="row"> <img src="assets/images/logos/logo_Mobitec-xl.png" class="img-fluid centrage-image padtop" alt="Logo de l'association MOBITEC"/>
      <article id="PA" class="padtop">
        <h2 class="padtop text-center">Lancement de notre site internet</h2>
        <figure  class="text-center"> <img class="img-fluid padtop img-thumbnail " src="assets/images/actualites/boutique.jpg" alt="Nous disposons de tous les accessoires indispensables pour votre mobile"> </figure>
        <p>MOBITEC met en ligne son site internet ! Un projet qui tenait à cœur à toute l’équipe, pour faire découvrir notre boutique, nos services, notre équipe et assurer une meilleure visibilité à notre entreprise.</p>
        <p>- Un site internet clair et convivial, à l’image de notre association<br>
          - Un site internet remis régulièrement à jour, pour vous assurer une information la plus exhaustive possible.
          Un site internet performant, qui répond aux besoins et usages des internautes, particuliers et professionnels.<br>
          A votre écoute pour toute suggestion !</p>
        <div class="float-right"> <a href="actualites-de-la-boutique.php" class="btn btn-outline-info btn-home-article" role="button">Retour aux articles</a> </div>
      </article>
    </div>
  </div>
</main>

<!--CALL TO ACTION-->
<div class="calltoaction"> <a href="smartphone.php"><img class="img-fluid w-100" src="assets/images/bandeau/call.gif"  alt="Découvrez notre boutique ou téléphoner au 0325895400" /></a> </div>
<h2 class="titre text-center">Une sélection de smartphones et d'accessoires à petits prix</h2>
<div class="container margtop padbot">
  <div class="row">
    <article class="col-md-6 col-xs-12 zoomphoto">
      <h2 class="text-center">Vente de smartphones</h2>
      <figure> <a href="smartphone.php"><img src="assets/images/home/vignettes-home/achat-de-smartphone.jpg"
								alt="Vente de téléphone à prix réduits" class="img-thumbnail img-fluid"></a> </figure>
    </article>
    <article class="col-md-6 col-xs-12 zoomphoto">
      <h2 class="text-center">Vente d'accessoires</h2>
      <figure><a href="accessoire.php"><img src="assets/images/home/vignettes-home/achat-accessoires-mobile.jpg"
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
	<script src="assets/js/scripts.js"></script> 
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
