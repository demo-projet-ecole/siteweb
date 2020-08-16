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
 
<div class="container-fluid">
   
	
	<div class="map-responsive">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.2372148207965!2d3.0619488157376606!3d50.622709979499525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d597222759bf%3A0xa022a0ebf77aef7d!2s2%20Rue%20Lamartine%2C%2059000%20Lille!5e0!3m2!1sfr!2sfr!4v1597560915372!5m2!1sfr!2sfr" width="100%" height="498" frameborder="0" style="border:1;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>	

	
<div class="container">
	  
 		
    <figure class="text-center">
	<img src="assets/images/logos/logo-safpic-fond-transparent.png" class="img-fluid centrage-image padtop" alt="Logo de l'association SAFPIC"/>
	</figure>
	   
	   
        <h1 class="padtop text-center">Vous souhaitez nous contacter ?</h1>
	  
                               
		 
				<form method="POST" action="" enctype="multipart/form-data" class="contact-formulaire">
		  <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
		  <fieldset>

			<legend>Contact</legend>

			<label for="nom">Nom <em>*</em></label>
			  <!--placeholder: indication grisée -->
			  <!--required: il faut renseigner le champs sinon la validation est bloquée-->
			  <!--autofocus: le curseur est positionné dans cette case au chargement de la page-->
			  <input autofocus="autofocus" required="required" id="nom" autocomplete="on"><br>

			<label for="prenom">Prénom <em>*</em></label>
			<input autofocus="autofocus" required="required" id="prenom" autocomplete="on"><br>

			<label for="telephone">Portable</label>
			  <!--type="tel": bascule le clavier sur un smartphone-->
			  <!--pattern: expression régulière à vérifier pour pouvoir valider-->
			<input type="tel" autofocus="autofocus" required="required" id="telephone" ><br>

			<label for="email">Email <em>*</em></label>
			  <input type="email" autofocus="autofocus" required="" id="email"  autocomplete="on"><br>
		  </fieldset>

		  <fieldset>

			<legend>Votre message concerne :</legend>

			<label for="motif">Catégorie</label>
			  <select required="required" id="motif">
				<option value="achat" name="achat">Achat sur le site</option>
				<option value="produit" name="produit">Information produit</option>
				<option value="reclamation" name="reclamation">Réclamation</option>
				<option value="avis" name="avis">Avis sur le site</option>

			  </select><br>
			  <label for="message">Votre message</label>

			<textarea id="comments"></textarea>
		  </fieldset>

		  <p><input class="btn btn-outline-info" type="submit" value="Envoyer"></p>
		</form>
		   	   
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
      "link": "privacy-policy.php",
      "href": "https://www.demo-projet-ecole.net/privacy-policy"
    }
  });
  </script>
  
  </body>
  
  </html>

