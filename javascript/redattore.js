//trova il select dummy
let select = document.getElementById("dummy_select")
let options = select.children

select.addEventListener('change', async() => {
    let selected = select.selectedIndex
    let id = options[selected].value

    let true_option = document.getElementById(id)


    let result = document.getElementsByClassName('Red_flex')[0]
    let result_children = result.children
    let xhttp = new XMLHttpRequest()

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText.trim()
            let present = false

            for (let i = 0; i < result_children.length; i++) {
                console.log(`Child: ${result_children[i].outerHTML}`)
                console.log(`Response: ${response}`)
                if (response.includes(result_children[i].outerHTML.trim())) {
                    present = true
                        // result.removeChild(result_children[i])
                }
            }

            if (!present) {
                result.insertAdjacentHTML('beforeend', response)
                true_option.toggleAttribute('selected')
            }

        }
    }

    xhttp.open("GET", `../ajax/addauthor.php?q=${id}`)
    xhttp.send()


})

function deselect(element) {
    //trova il true option
    let true_option = document.getElementById(element.id.split('-')[0]);
    true_option.toggleAttribute('selected')
    element.remove();
}
