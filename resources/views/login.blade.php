<html>
    <head>
    <link rel='stylesheet' href='{{url("css/login1.css")}}'>
        <script src='{{url("js/login.js")}}' defer></script>
    </head>
    <body>
        <header>

        <h1>Benvenuti in Deffo's shop<br> Registrati o accedi per continuare</h1><br><br><br><br><br><br><br><br><br><br><br>
            <main id='blocco'>

                
                @if(isset($old_username))
                    <p class='errore'>Credenziali non valide.</p>
                @endif
                <form name='form' method='post' action="{{ 'login' }}">
                @csrf
                    <input type='hidden' name='_token' value='{{ $csrf_token }}'>
                    <p><label>Username <input type='text' name='username' value='{{ $old_username }}'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>

                    <p><label><input type='submit'></label></p>
                </form>
                <div id='avviso' class='hidden'>Errore compilazione</div>
            </main>        

            <nav>
            <div id="links">          
                <a href='{{url("signup")}}'>Iscriviti!</a>
            </div>
        </nav>
        </header>
    </body>
</html>