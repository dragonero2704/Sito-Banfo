'use-strict';

function load(attributeName, nodeList) {
    attributeName = attributeName ?? "async-load";
    nodeList = nodeList ?? document.querySelectorAll('[' + attributeName + ']');
    nodeList.forEach(element => {
        element.attributes[element.tagName !== "LINK" ? "src" : "href"].nodeValue = element.getAttribute(attributeName)
        // leggero timeout prima della rimozione dell'atributo in modo che possa caricarsi bene l'immagine
        setTimeout(()=>element.removeAttribute(attributeName), 90)
    })
}
/*
@params attributeName takes the name of the attribute <img [attributeName]='[your url]'
*/
function loadAsync(attributeName = "async-load", nodeList = undefined) {
    document.addEventListener('DOMContentLoaded', load.apply(this, arguments))
}

// author: dragonero2704