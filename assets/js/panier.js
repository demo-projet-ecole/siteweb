$(document).ready(function(){
    $.ajax("assets/js/panier.json").done(function(response){
    console.log(response);
    });
});