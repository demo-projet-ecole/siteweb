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

<!-- MAIN -->
<main class="indexbas">
  <div id="entete" class="position-relative">
    <div id="titre-position" class="position-absolute" style="width: 100%">
      <h1 class="titre-header-bloc">Gestion compte client</h1>
    </div>
    <img src="assets/images/bandeau/img-bandeau-a-propos.jpg" alt="Boutique multimédia pas cher"
            class=" w-100 img-fluid" /> </div>
  
  <!--LOGO + PANIER + USER-->
  <div class="container" id="LPU"> 
    <!-- LPU = LOGO + PANIER + USER-->
    <div class="row"> 
      <!--LOGO-->
      <div class="col-md-4 col-sm-12 text-center">
        <figure class="padtop"> <img class="" src="assets/images/logos/logo-safpic-fond-transparent.png"
                        alt="Logo de l'association SAFPIC" /> </figure>
      </div>
      <div class="flex padtop PU col-md-4 col-sm-12 middle text-center space"> 
        <!--PU = PANIER + USER-->
        <figure class="padright"> <a href="compte-client.php"> <img class="img-fluid" src="assets/images/pictos/user.png" alt="icon user">connexion</a> </figure>
        <figure class="padleft"> <img src="assets/images/pictos/panier.png" alt="icon panier"> panier </figure>
      </div>
    </div>
  </div>
  <!--DEBUT DU MAIN-->
  
  <div class="container-fluid margbottom">
    <div class="container "> 
      <!--TITRE COMPTE CLIENT-->
      <h1 class="titre text-center">Gestion du compte client</h1>
    </div>
    <!--CONTAINER SIGN IN-->
    <div class="container text-center sign-in padtop my-3">
      <form>
        <h1 class="h4">je possède déjà un compte client</h1>
        <p class="bold">Adresse email :
          <input class="inputsignin outnone" type="email" name="username" placeholder="Email" required>
        </p>
        <p class="bold">Mot de passe :
          <input class="inputsignin outnone" type="password" name="password" placeholder="password"
                            required>
        </p>
        <div class="col"> <a href="#" class="">Mot de passe oublié ?</a> </div>
        <input class="btnsignin margbottom outnone" type="submit" value="Sign IN">
      </form>
    </div>
    
    <!--TITRE NOUVEAUX ABONNÉS-->
    <div class="container ">
      <h1 class="titre text-center">Je suis nouveau client</h1>
      <hr class="lignenoir">
    </div>
    
    <!--CONTAINER SIGN UP-->
    <div class="container">
      <form>
        <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
        <div class="mb-2"> Titre :&nbsp;
          <input type="radio" name="titre" class="" value="Madame">
          &nbsp;Madame
          <input type="radio" name="titre" class="" value="Monsieur">
          &nbsp;Monsieur
          <input type="radio" name="titre" class="" value="Mademoiselle">
          &nbsp;Mlle </div>
        Prénom<em>*</em> :
        <div class="input-group">
          <input type="text" class="form-control my-md-2" name="text" placeholder="" required>
        </div>
        Nom<em>*</em> :
        <div class="input-group">
          <input type="text" class="form-control my-md-2" name="text" placeholder=""required>
        </div>
        Email<em>*</em> :
        <div class="input-group">
          <input type="text" class="form-control my-md-2" name="email" placeholder=""required>
        </div>
        Mot de passe<em>*</em> :
        <div class="input-group">
          <input type="password" class="form-control my-md-2" name="password" placeholder=""required>
        </div>
        Mot de passe<em>*</em> :
        <div class="input-group">
          <input type="password" class="form-control my-md-2" name="password" placeholder=""required>
        </div>
        téléphones :
        <div class="input-group">
          <input type="tel" maxlength="10" class="form-control my-md-2" name="tel" placeholder="">
        </div>
        Adresse<em>*</em> :
        <div class="input-group">
          <input type="text" class="form-control my-md-2" name="text" placeholder=""required >
        </div>
        Code postal <em>*</em> :
        <div class="input-group">
          <input type="number" maxlength="6" class="form-control my-md-2" name="number" placeholder=""required>
        </div>
        Ville<em>*</em> :
        <div class="input-group">
          <input type="text" class="form-control my-md-2" name="text" placeholder=""required>
        </div>
        <input class="btnsignup margbottom outnone" type="submit" value="Sign UP">
      </form>
    </div>
    <div class="container text-center">
      <h2 class="h4">protections des données (conforme RGPD)</h2>
      <hr class="lignenoir">
      <form>
        <input type="checkbox" name="checkbox">
        &nbsp;J'ai pris connaissance des modalités de protection des données personelles
      </form>
    </div>
  </div>
</main>
<!--FIN DU MAIN-->

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