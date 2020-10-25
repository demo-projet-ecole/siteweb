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


<!-- Début du header-->
   
	
	
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.2372148207965!2d3.0619488157376606!3d50.622709979499525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d597222759bf%3A0xa022a0ebf77aef7d!2s2%20Rue%20Lamartine%2C%2059000%20Lille!5e0!3m2!1sfr!2sfr!4v1597560915372!5m2!1sfr!2sfr" width="100%" height="398" frameborder="0" style="border:0;"  aria-hidden="false" tabindex="0"></iframe>
			
	
<div class="container">
	  
 		
    <figure class="text-center">
	<img src="assets/images/logos/logo_Mobitec-xl.png" class="img-fluid centrage-image padtop" alt="Logo de l'association MOBITEC"/>
	</figure>
	   
	   
        <h1 class="padtop text-center">Vous souhaitez nous contacter ?</h1>
	                                
		 
	<form method="POST" action="#" enctype="multipart/form-data" class="contact-formulaire">
			
		  <p><i>Complétez le formulaire. Les champs marqués par </i><em>*</em> sont <em>obligatoires</em></p>
			
		  <fieldset>

			<legend>Contact</legend>

			<label for="nom">Nom <em>*</em></label>
			  <!--placeholder: indication grisée -->
			  <!--required: il faut renseigner le champs sinon la validation est bloquée-->
			  <!--autofocus: le curseur est positionné dans cette case au chargement de la page-->
			  <input required="required" id="nom" autocomplete="off"><br>

			<label for="prenom">Prénom <em>*</em></label>
			<input required="required" id="prenom" autocomplete="on"><br>

			<label for="telephone">Portable</label>
			  <!--type="tel": bascule le clavier sur un smartphone-->
			  <!--pattern: expression régulière à vérifier pour pouvoir valider-->
			<input type="tel"  id="telephone" ><br>

			<label for="email">Email <em>*</em></label>
			  <input type="email" required="" id="email"  autocomplete="on"><br>
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
</main>
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

