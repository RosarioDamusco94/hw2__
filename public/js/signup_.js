function verifica(event){
    const avviso = document.querySelector('#warning');
    const errore = document.querySelector('#errore');
    avviso.innerHTML = "";
    errore.innerHTML = "";
    // Verifica se tutti i campi sono riempiti
    console.log("form.nome"+form.nome.value.length);
    console.log("form.cognome"+form.cognome.value.length);
    console.log("form.codice_fiscale"+form.codice_fiscale.value.length);
    console.log("form.username"+form.username.value.length);
    console.log("form.password"+form.password.value.length);
    if(form.nome.value.length == 0 ||
        form.cognome.value.length == 0 || 
        form.codice_fiscale.value.length == 0 ||
        form.username.value.length == 0 ||
        form.password.value.length == 0){
        // Avvisa utente
        avviso.textContent="compila i campi"
        avviso.classList.remove('hidden');
        // Blocca l'invio del form
        event.preventDefault();
    }
}



// Riferimento al form
const form = document.forms['form'];
// Aggiungi listener
form.addEventListener('submit', verifica);