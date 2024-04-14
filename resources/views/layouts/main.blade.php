<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">











        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        

        
    </head>
    <body>

    <header>
        
    <nav class= "navbar navbar-expand-lg navbar-light" >
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand">
                <img src="/img/logo.png" alt="I need RPG">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Mesas de RPG disponíveis</a>
                </li>
                <li class="nav-item">
                    <a href="/mesas/create" class="nav-link">Criar mesas de RPG</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>


    </header>



        @yield('content')
        <footer>
            <p>Feito por Matheus Alves &copy; 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
