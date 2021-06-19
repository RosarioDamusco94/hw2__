<html>
<head>
 <meta charset="utf-8">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">
<link rel='stylesheet' href='{{url("css/ricettario.css")}}'>
        <script src='{{url("js/ricettario.js")}}' defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>

    <div id="nome"> Cucina con noi</div>

        <nav>
            <div id="barra">
            <a href='{{url("home")}}'>Home</a>
            <a href='{{url("shop")}}'>Shop</a>
            <a href='{{url("ricettario")}}'>Ricettario</a>
            <a href='{{url("carrello")}}'>Carrello</a>
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
      <form name="form" id="form" method="get">
      @csrf
              <p><label><input type='text' name='ricerca' id="ricerca" placeholder="Ricerca..."></label></p>
            <p><label>&nbsp;<input type='submit'></label></p>
          </form>
          <div class="negozio"></div>
        </section> 

      

    </article>


<footer>
<h2>Damusco Rosario O46001882</h2>
</footer>
</body>
</html>