'use-strict';

function load(attributeName, nodeList) {
    attributeName = attributeName ?? "async-load";
    nodeList = nodeList ?? document.querySelectorAll('[' + attributeName + ']');
    if(!nodeList.length) nodeList = [nodeList]
    nodeList.forEach(element => {
        element.attributes[element.tagName !== "LINK" ? "src" : "href"].nodeValue = element.getAttribute(attributeName)
        // leggero timeout prima della rimozione dell'atributo in modo che possa caricarsi bene l'immagine
        setTimeout(()=>element.removeAttribute(attributeName), 90)
    })
}
/*
*@params attributeName è il nome dell'attribute all'interno dell'elemento. Di default è "async-load". Esempio: <img attributeName='your url'>
*/
function loadAsync(attributeName = "async-load", nodeList = undefined) {
    document.addEventListener('DOMContentLoaded', load.apply(this,arguments))
    document.addEventListener('DOMContentLoaded', ()=>console.log('DOMContentLoaded'))
}

// author: dragonero2704
