<html>
    <head>
    <link rel='stylesheet' href='{{url("css/registrazione1.css")}}'>
        <script src='{{url("js/signup_.js")}}' defer></script>
        <meta name = "csrf-token" content = "{{ csrf_token() }}"/> 
        
    </head>
    <body>
        <header>

            <main id='tabella'>
                <form name='form' method='post' >
                @csrf
                    <p><label>Nome <input type='text' name='nome'></label></p>
                    <p><label>Cognome <input type='text' name='cognome'></label></p>
                    <p><label>Codice Fiscale <input type='text' name='codice_fiscale'></label></p>
                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <p><label>&nbsp;<input type='submit'></label></p>
                </form>
                <div id='warning' class='hidden'>compila i campi</div>
                <div id="errore">
                                   @if (isset($errore_password))
                                    <span> Password debole <br>
                                    7 caratteri minimo </span><br>
                                    @endif
                                    
                                    @if (isset($errore_username))
                                        <span>Username esistente</span><br>
                                        @endif
                                    </div>
               
            </main>        
            

            <nav>
            <div id="links">        
                <a href="login">Accedi</a>
            </div>
        </nav>
        </header>
    </body>
</html>