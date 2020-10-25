<!doctype html>

<!--Reprise du template + Ajout du panier (non terminer) matthieu 18/08 à 22H53 -->

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

  <!-- Début du header-->

  <div class="contenaire-fluid" id="navcolor">

    <!-- Le contenaire va me centrer la zone nav bar du header-->
    <div class="container">

      <header class="flex-md-fill">


        <?php include('assets/inc/entete.php'); ?>

      </header>

    </div>
  </div>
  <div id="entete" class="position-relative">
    <div id="titre-position" class="position-absolute" style="width: 100%">
      <h1 id="haut" class="titre-header-bloc">Votre panier</h1>
    </div>
    <img src="assets/images/bandeau/img-bandeau-a-propos.jpg" alt="Boutique multimédia pas cher"
      class=" w-100 img-fluid" />
  </div>


  <main>

    <div class="container my-5">

      <div class="row">

        <article class="well form-inline pull-left offset-md-2 col-md-8">
          <legend>Contenu du panier</legend>
          <table id="tableau" class="table">
            <thead>
              <tr>
                <th>Article</th>
                <th>Qte<input type="number" id="qte" class="input-sm form-control"></input><br>
                </th>
                <th>Prix unitaire<input type="prix" id="qte"
                    class="input-sm form-control"></input><br> </th>
                <th>Prix de la ligne<input type="prix" id="qte" 
                    class="input-sm form-control"></input><br></th>
                <th>Supprimer</th>
              </tr>
            </thead>
          </table>
          <br><label>Prix du panier total</label> : <label id="prixTotal"></label>
          <label id="nbreLignes" hidden>0</label>
        </article>



      </div>
    </div>


  </main>



  <?php include('assets/inc/footer.php'); ?>

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/cookieconsent.min.js" data-cfasync="false"></script>
  <script type="text/javascript" src="assets/js/panier.js"></script>
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