"use-strict";

let resultsDiv = document.getElementById("results")
let authorsDiv = document.getElementById("authors")
let articlesDiv = document.getElementById("articles")
let searchbar = document.getElementById("searchbar")
let timeoutID = undefined

function keyUpTarget(keyword){
    clearTimeout(timeoutID)
    timeoutID = setTimeout(search.bind(this,keyword), 500)
    console.log(keyword)
}

async function search(query){
    let url = "./api/search/"+query;
    console.log(url)
    let response = await fetch(url, {
        method:"POST"
    })
    data = await response.json()
    console.log(data)
}
