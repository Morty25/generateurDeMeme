var MM = document.getElementById("MM");
var divAfficheImages = document.getElementById('divAfficheImages')

divAfficheImages.style.display="none";
//Fonction qui affiche l'image sélectionner pour un MM 
MM.addEventListener("click",function() {afficheImageSelectionner();} );
function afficheImageSelectionner(){
   
}


<<<<<<< HEAD
function envoyerTextDeux(){
    var textEnvoyer = document.getElementById("inputEnvoyeDeux");
    var textRecu = document.getElementById("inputDeux");
    textRecu.value = textEnvoyer.value;
}

var node = document.getElementById('article');
var btn = document.getElementById('envoyer');

btn.onclick = function() {
    node.innerHTML = "Bla."
    domtoimage.toBlob(document.getElementById('article'))
    .then(function(blob) {
        window.saveAs(blob, 'article.png');
    });
}
=======
// console.dir(MM);

//Bouton Enregistrer (au click faire la fonction stockerMM)

//Bouton Telecharger (au click faire la fonction DL)
>>>>>>> 254a64fbc234af4421d3817e9f72de68812da51e
