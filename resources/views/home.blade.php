<html>
<head>
 <meta charset="utf-8">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">
<link rel='stylesheet' href='{{url("css/principale.css")}}'>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>

    <div id="nome">{{ $nome }},<br>benvenuto <br> in hw1</div>

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
    <section>   

<div id="Corpo">
    <div>
        <img src='{{url("css/img/prodotto.jpg")}}'/>
        <h1>Shop</h1>
        <a class="button" href='{{url("shop")}}'>Visita</a>
        <p><em>Tutto ciò che cerchi è qui</em></p>
    </div>

    <div>
        <img src='{{url("css/img/ricettario.jpg")}}' />
        <h1>Ricettario</h1>
        <a class="button" href='{{url("ricettario")}}'>Visita</a>
        <p><em>Cucina con noi</em></p>
    </div>


    <div>
        <img src='{{url("css/img/cv.jfif")}}' />
        <h1>Lavora con noi</h1>
        <a class="button" >Visita</a>
        <p><em>Entra a far parte del nostro team</em></p>
    </div>
</div>

</section>

<footer>
<h2>Damusco Rosario O46001882</h2>
</footer>
</body>
</html>