function onJson(json){
    //console.log(json);
    let sezione = undefined;
    sezione = document.querySelector("div.negozio")
    const divRiga = document.querySelector("div.newdiv")
    divRiga.innerHTML="";
    for(prodotto of json){ 

    //crea immagine
    const image = document.createElement("img");
    image.src=prodotto.immagine;
    image.classList.add("immagine");
    
    //crea titolo
    const titolo = document.createElement("h3");
    titolo.textContent=prodotto.nome_prodotto;

    const bottoneRimuovi = document.createElement("button");
    bottoneRimuovi.classList.add("rimuovi");
    bottoneRimuovi.textContent="Rimuovi dal carrello";
    bottoneRimuovi.dataset.ind=prodotto.id_vendita;
    bottoneRimuovi.addEventListener("click", eliminaProdotto);

    divRiga.appendChild(titolo);
    divRiga.appendChild(image);
    divRiga.appendChild(bottoneRimuovi);
       
    sezione.appendChild(divRiga);
    }
}

function eliminaProdotto(event){
    const id_vendita = event.currentTarget.dataset.ind;
    console.log(id_vendita);
    fetch("carrello/elimina/prodotto/"+id_vendita).then(carrello).then(aggiornaPrezzo);
}

function onResponse(response){
    return response.json();
}

function carrello(){
    fetch("carrello/aggiorna").then(onResponse).then(onJson);
}

function onJsonPrezzo(json){
    console.log(json);
    const tot = json[0].prezzo_totale;
    
    const blocco_prezzo = document.querySelector("div#prezzototale")
    blocco_prezzo.classList.add("blocco_prezzo");
    blocco_prezzo.innerHTML="";
    
    const prezzo = document.createElement("span")
    prezzo.classList.add("prezzo")
    prezzo.textContent = "Il totale è € "+tot+",00";
    prezzo.classList.add("hidden");

    const messaggio = document.createElement("span");
    messaggio.classList.add("messaggio");
    messaggio.classList.add("hidden");
    messaggio.textContent = "Il carrello è vuoto.";

    if(tot==0){
        messaggio.classList.remove("hidden");
    }else {
        prezzo.classList.remove("hidden");
    }

    blocco_prezzo.appendChild(messaggio);
    blocco_prezzo.appendChild(prezzo);
}

function onResponsePrezzo(response){
    return response.json();
}

function aggiornaPrezzo(){
    fetch("prezzo_totale").then(onResponsePrezzo).then(onJsonPrezzo);
}

aggiornaPrezzo();

carrello();
let ind = null;