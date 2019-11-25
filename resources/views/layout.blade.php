<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>@yield('title', 'Suntuario')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/app.css'> <!--la raiz / que es la carpeta publica en laravel-->
    <script src='/js/app.js' defer></script><!--la raiz / que es la carpeta publica en laravel, el atributo defer para que se ejecute al final de la carga-->
</head>

<body>
    <nav>
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contacto</a></li>
            @guest
            <!--guest =invitado -->
            <li><a href="{{route('login')}}">Login</a></li>
            @else
            <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesion</a></li>
            @endguest
        </ul>
        <nav>
            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display:none">
                @csrf
                <button>Cerrar sesión</button>
            </form>
            @yield('content')
            @include('partials.session-status')
</body>

</html>