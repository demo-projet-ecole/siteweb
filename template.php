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
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.png" type="image/png">
<link rel="icon" sizes="32x32" href="favicon-32.png" type="image/png">
<link rel="icon" sizes="64x64" href="favicon-64.png" type="imag

<!-- Fin d'intégration du favicon -->

</head>

<body>

<!-- Début du header-->
<div id="navcolor">

<!-- Le contenaire va me centrer la zone nav bar du header-->
<div class="container">
<header class="flex-md-fill">
  <?php include('assets/inc/entete.php'); ?>
  </div>
  </div>
</header>
<main class="indexbas">
  <div id="entete" class="position-relative">
    <div  id="titre-position" class="position-absolute" style="width: 100%">
      <h1 id="haut"  class="titre-header-bloc">ICI LE TITRE DE LA RUBRIQUE</h1>
    </div>
    <img src="assets/images/bandeau/img-bandeau-a-propos.jpg"  alt="Boutique multimédia pas cher" class=" w-100 img-fluid" /> </div>
  <div class="container">
    <div class="row"> </div>
  </div>
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
