function curseur(event){
    var y = event.clientX;
    var x = event.clientY;
    var select = document.getElementById('selectDiv');
    if(select.value == 'divUn'){
        var div = document.getElementById('divUn');
        div.style.position = 'absolute';
        div.style.top = x + 'px';
        div.style.left = y + 'px';
    }
    else if(select.value == 'divDeux'){
        var div = document.getElementById('divDeux');
        div.style.position = 'absolute';
        div.style.top = x+ + 'px';
        div.style.left = y + 'px';
    }
}

function grossirText(){
    var select = document.getElementById('selectDiv');
    var rangeTaille = document.getElementById("inputRange");
    if(select.value == 'divUn'){
        var divtext = document.getElementById("inputUn");
        divtext.style.fontSize =  rangeTaille.value + "px";
    }
    else if(select.value == 'divDeux'){
        var divtext = document.getElementById("inputDeux");
        divtext.style.fontSize =  rangeTaille.value + "px";
    }
}

function envoyerTextUn(){
    var textEnvoyer = document.getElementById("inputEnvoyeUn");
    var textRecu = document.getElementById("inputUn");
    textRecu.value = textEnvoyer.value;
}

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


// pour choisir les image et les grondir 
var miniatures = document.getElementsByClassName("miniature");
for (var miniature of miniatures) {
    miniature.addEventListener("click", function(event) {
        console.log(event.target.src)
        afficheImage(event);
        
    });  
}


function afficheImage(event) {

    document.getElementById("article").innerHTML = '<img id="ImageR" src=' + event.target.src + '>';

}
