function onJson(json){
    console.log(json);
    const lista = document.querySelector("div.negozio");
    lista.classList.add("lista")
    lista.innerHTML="";
    let tot = json.number;
    let verifica = json.totalResults;

    if(verifica==0){
        console.log("errore");
        const messaggio_errore = document.createElement("span");
        messaggio_errore.textContent = "Non sono presenti elementi con il criterio inserito in input, si prega di riprovare.";
        lista.appendChild(messaggio_errore);
    }

    for(let i=0; i<tot; i++){
        const oggetto = document.createElement("div");
        oggetto.classList.add("oggetto");
        const nome_ricetta = document.createElement("h3")
        nome_ricetta.classList.add("nome_ricetta")
        nome_ricetta.textContent=json.results[i].name        

        oggetto.appendChild(nome_ricetta);
        lista.appendChild(oggetto);
    }
}

function onResponse(response){
    return response.json();
}

function ricerca(event){
    const ricerca= document.querySelector("#ricerca").value;
    fetch("api/ricettario/curl/"+ricerca).then(onResponse).then(onJson);
    event.preventDefault();
}

const form = document.querySelector("form");
form.addEventListener('submit', ricerca);