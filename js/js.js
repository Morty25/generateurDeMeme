var texteHaut = document.getElementById("texteHaut");
var texteBas = document.getElementById("texteBas");

function curseur(event){
    var y = event.clientX -150;
    var x = event.clientY -250;
    var select = document.getElementById('selectDiv');
    if(select.value == 'divUn'){
        var div = document.getElementById('texteHaut');
        // div.style.position = 'absolute';
        div.style.top = x + 'px';
        div.style.left = y + 'px';
    }
    else if(select.value == 'divDeux'){
        var div = document.getElementById('texteBas');
        // div.style.position = 'absolute';
        div.style.top = x+ + 'px';
        div.style.left = y + 'px';
    }
}

function onclick (){

}

function grossirText(){
    var select = document.getElementById('selectDiv');
    var rangeTaille = document.getElementById("inputRange");
    if(select.value == 'divUn'){
        texteHaut.style.fontSize =  rangeTaille.value + "px";
    }
    else if(select.value == 'divDeux'){
        texteBas.style.fontSize =  rangeTaille.value + "px";
    }
}

function envoyerTextUn(){
    var textEnvoyer = document.getElementById("inputEnvoyeUn");
    // texteHaut.value = textEnvoyer.value;
    document.getElementById("texteHaut").innerHTML = textEnvoyer.value;
}

function envoyerTextDeux(){
    var textEnvoyer = document.getElementById("inputEnvoyeDeux");
    document.getElementById("texteBas").innerHTML = textEnvoyer.value;
}

var node = document.getElementById('article');
var btn = document.getElementById('envoyer');



// btn.onclick = function() {
//     node.innerHTML = "Bla."
//     domtoimage.toBlob(document.getElementById('article'))
//     .then(function(blob) {
//         window.saveAs(blob,'article.png');
//     });
// }


// pour choisir les image et les grondir fait par anjum
var miniatures = document.getElementsByClassName("miniature");
for (var miniature of miniatures) {
    miniature.addEventListener("click", function(event) {
        afficheImage(event);
    });  
}

function afficheImage(event) {

    document.getElementById("image").innerHTML = '<img id="ImageR" src=' + event.target.src + '>';

}


// test envoie meme 

btn.onclick = function sendData(data) {
    var XHR = new XMLHttpRequest();
    var urlEncodedData = "";
    var urlEncodedDataPairs = [];
    var name;
  
    // Transformez l'objet data en un tableau de paires clé/valeur codées URL.
    for(name in data) {
      urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));
    }
  
    // Combinez les paires en une seule chaîne de caractères et remplacez tous
    // les espaces codés en % par le caractère'+' ; cela correspond au comportement
    // des soumissions de formulaires de navigateur.
    urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');
  
    // Définissez ce qui se passe en cas de succès de soumission de données
    XHR.addEventListener('load', function(event) {
      alert('Ouais ! Données envoyées et réponse chargée.');
    });
  
    // Définissez ce qui arrive en cas d'erreur
    XHR.addEventListener('error', function(event) {
      alert('Oups! Quelque chose s\'est mal passé.');
    });
  
    // Configurez la requête
    XHR.open('POST', 'https://example.com/cors.php');
  
    // Ajoutez l'en-tête HTTP requise pour requêtes POST de données de formulaire 
    XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
    // Finalement, envoyez les données.
    XHR.send(urlEncodedData);
  }