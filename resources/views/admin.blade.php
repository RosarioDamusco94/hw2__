<html>
<head>
 <meta charset="utf-8">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">
<link rel='stylesheet' href='{{url("css/shop.css")}}'>
        <script src='{{url("js/shop_.js")}}' defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>

    <div id="nome"><br> Shop <br></div>

        <nav>
            <div id="barra">
            <a href='{{url("admin")}}'>Amministra sito</a>
            <a href='{{url("logout")}}'>Esci</a>
        </div>
            
            <div id="menu">
                <div></div>
                <div></div>
                <div></div>
              </div>             
        </nav>
        
    </header>

    <article>
      <section>
      <form name="form" method='POST' action="{{ route('add.prodotti') }}">
        @csrf
            <label>Inserisci un id per il prodotto:</label><input type = "text" name="id_prodotto"><br>
            <label>Inserisci il link di un'immagine:</label><input type = "text" name="immagine"><br>        
            <label>Inserisci il nome del prodotto:</label><input type = "text" name="nome_prodotto"><br>
            <label>Inserisci una descrizione:</label><input type = "text" name="descrizione"><br>
            <label>Inserisci un prezzo:</label><input type = "text" name="prezzo"><br>
            <p><label>&nbsp;<input type='submit' id="invia"></label></p>
        </form>
            
        </section> 

      

    </article>


<footer>
<h2>Damusco Rosario O46001882</h2>
</footer>
</body>
</html>