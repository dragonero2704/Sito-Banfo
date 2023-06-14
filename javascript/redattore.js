'use-strict';
//trova il select dummy
let select = document.getElementById("dummy_select")
let options = select.children

select.addEventListener('change', async () => {
    let selected = select.selectedIndex
    let id = options[selected].value
    let result = document.getElementsByClassName('Red_flex')[0]
    let url = `./api/author/${id}`; //api route definita in routes.php
    let resJson = await fetch(url, {
        method: "GET"
    })

    resJson = await resJson.json()

    console.log(resJson);
    let inHtml = `<div class='Red_singolo-membro smaller'>
    <input type="hidden" name="autore[]" value="${resJson.id}" id="${resJson.id}-identifier">
    <div class='Red_singolo_membro_img'>
        <img src='${resJson.imgPath}'>
    </div>
    <div class='delete_button' onclick='deselect(this.parentElement)'><span></span><span></span></div>
    <div class='Red_contenitore_membro'>
        <h2>${resJson.nome} ${resJson.cognome}</h2>
        <p class="decorate">Ruolo:</p>
        <div class='Red_professione'><input type='text' name='${resJson.id}-ruolo' value='${resJson.professione}'></div>
        <p>${resJson.classe}</p>
    </div>
</div>`;
    if (!document.getElementById(resJson.id)) {
        let tmp = document.createElement('div');
        tmp.innerHTML = inHtml;
        inHtml = tmp.firstChild;

        result.append(inHtml)
    }
})

function deselect(element) {
    element.remove();
}
