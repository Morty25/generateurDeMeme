var texteHaut = document.getElementById("texteHaut");
var texteBas = document.getElementById("texteBas");

function curseur(event){
    var y = event.clientX-385;
    var x = event.clientY-215;
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



btn.onclick = function() {
    node.innerHTML = "Bla."
    domtoimage.toBlob(document.getElementById('article'))
    .then(function(blob) {
        window.saveAs(blob,'article.png');
    });
}


// pour choisir les image et les grondir 
var miniatures = document.getElementsByClassName("miniature");
for (var miniature of miniatures) {
    miniature.addEventListener("click", function(event) {
        afficheImage(event);
    });  
}


function afficheImage(event) {

    document.getElementById("image").innerHTML = '<img id="ImageR" src=' + event.target.src + '>';

}
