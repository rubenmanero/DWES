<!DOCTYPE HTML>
<html lang="es-ES">
<head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ url('css/estilos.css') }}">
</head>
<body>
    <header>
        <h1>
            @yield('header')
        </h1>
    </header>
    <section>
        <nav>
            @yield('nav')
        </nav>
        <main>
            <h1 class='centrado'>@yield('main_title')</h1><br>
            @section('content')
            @show
        </main>
		<aside>
            @yield('aside')
        </aside>
	</section>
	<footer>
        @yield('footer')
    </footer>
</body>
</html>