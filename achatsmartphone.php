<!doctype html>

<!--derniere modification: Yanis le 15/08 à 19h30 -->


<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="description"
        content="Le sp&eacute;cialiste du smartphone &agrave; petit prix pour tous. Des smartphones neuf et reconditionn&eacute;s par des experts, garantis 1 an.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cookieconsent.min.css">

    <title>Bienvenue sur MOBITECSTORE</title>

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
	
	<!-- main -->
 <main class="indexbas">

    <div id="entete" class="position-relative">
        <div id="titre-position" class="position-absolute" style="width: 100%">
            <h1 class="titre-header-bloc">Vente de smartphones</h1>
        </div>
        <img src="assets/images/bandeau/img-bandeau-a-propos.jpg" alt="Boutique multimédia pas cher"
            class=" w-100 img-fluid" />

    </div>

    
        <div class="container-fluid">
            <div class="container">
                <figure class="text-center padtop">
                    <img class="text-center" src="assets/images/logos/logo_Mobitec-xl.png"
                        alt="Logo de l'association MOBITEC" />
                </figure>
            </div>
            <div class="contenaire">
                <h3 class="text-center">Iphone SE</h3>
                <p class="text-center">Notre puce la plus puissante
                 dans notre format d’iPhone le plus populaire.<br>
                 L’iPhone SE, c’est tout ce que vous aimez a notre prix le plus abordable.<br>
                 Il est résistant aux éclaboussures, à l’eau et à la poussière.<br>
                </p>
            </div>


            <div class="flex padtop PU col-md-4 col-sm-12 middle text-center space">
                <!--PU = PANIER + USER-->
                <figure class="padright">
                    <img class="img-fluid" src="assets/images/pictos/user.png" alt="icon user"><a
                        href="compte-client.html">connexion</a>
                </figure>
                <figure class="padleft">
                    <img src="assets/images/pictos/panier.png" alt="icon panier"> panier
                </figure>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide mt-3 offset-md-3 col-md-6 text-center mt-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/smartphones/sewhite.png" class=""
                            alt="tel avant">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/smartphones/senoir.png" class="imgfluid"
                            alt="tel arriere">
                    </div>
                </div>
            </div>
            <p class=" container pad top margtop larger offset-md-3">Pour vous aidez à faire votre choix, consulter
                notre foire a
                question en cliquant <a href="faq.php" target="_blank">ici</a></p>
            <div class="mt-3 offset-md-3 col-md-6">

                <p class="bold">Description du produit : Iphone SE reconditionné</p>
                <p class="bold">Capacité de stockage : 64Go</p>
                <p class="bold">Grade : A</p>
                <p class="bold">Garantie : 1 an</p>
                <p class="bold">Prix : 180€</p>
                <p class="mt-3">LCD multi-touch panoramique de 4,7 pouces (diagonal) avec technologie IPS</p>
                <p>Appareil photo 12Mpx avec stabilisation optique de l'image, vidéo 4K et caméra FaceTime HD 7Mpx avec
                    retina flash</p>
                <p>Touch ID avec capteur d'empreinte digitale de deuxième génération intégré au bouton principal </p>
                <p>Indice IP67 de resistance à la poussière et à l'eau (profondeur maximale de 1m durant 30minutes
                    maximum</p>
                <p class="mt-3 bold">Pour ajouteur cet article à votre panier</p>

                <p><input class="btn btn-outline-info" type="submit" value="Ajouter au panier"></p>

            </div>

        </div>

    </main>


    <!-- Footer -->
 
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
                "link": "privacy-policy.html",
                "href": "https://www.demo-projet-ecole.net/privacy-policy"
            }
        });
    </script>

</body>

</html>