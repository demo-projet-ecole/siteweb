
// Ajout du script.js yanis 20/08 16h






            /* ------------------------------------------------------------------------------------------------------------------------ */

            
        $(document).ready(function(){

                // Ciblage de l'élément <input id="search">
                $input = $('#search');
                
            

                // Ciblage de l'élément <ul>
                $ul = $('ul#smartphones');

                // Quand l'utilisateur relache une touche du clavier sur le champ <input id="search">
                $input.on('keyup', search);

                // Quand on efface la recherche
                $input.on('search', search);


                function search(){

                    // Recupération de la valeur saisie
                    $inputText = $(this).val();

                    // Récupération du fichier "data.json" avec AJAX
                    $.getJSON("./assets/data/data.json")

                    // Lorsque AJAX répond, on récupère la reponse dans la variable "response"
                    .done(function(response){

                        // Reset de <ul>
                        $ul.html('');

                        // cette condition permet d'afficher les suggestions UNIQUEMENT si une valeur est saisie dans le champ de recherche
                        if ($inputText.length > 0) 
                        {
                            $ul.show();

                            // "Response" correspond au tableau du fichier "data.json"
                            // On boucle sur "response" et on récupère les objets correspondant à chaque cryptomonnaie dans la variable "item"
                            $(response).each(function(index, item) {

                                // "item" correspond un un objet concernant une crypto
                                // Recupération du symbole d'un crypto
                                // ex: item.symbol

                                // Récupération du nom d'une crypto
                                // ex: item.name


                                // Définition de l'expression régulière basée sur la saisie de l'utilisateur
                                let re = new RegExp($inputText, "gi");

                                // On test et affiche le nom de la crypto SI le nom de la crypto contien le motif saisie par l'utilisateur
                                if (re.test(item.name))
                                {
                                    // Creation du lien <a>
                                    $a = $('<a>')
                                        .html( item.name );

                                    // creation de <li>
                                    $li = $('<li>').append($a);

                                    // Inject de <li> dans <ul>
                                    $ul.append($li);
                                }
                            });
                        }

                        else {
                            $ul.hide();
                        }
                    })
                }

        });