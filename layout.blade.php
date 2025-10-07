<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plataforma de Gramática Inglesa')</title>
    <!-- Google Fonts para una tipografía más agradable -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Enlace a nuestra hoja de estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <!--
    |--------------------------------------------------------------------------
    | Encabezado y Navegación
    |--------------------------------------------------------------------------
    |
    | Este es el encabezado principal que aparecerá en todas las páginas.
    | Incluye el título de la aplicación y los enlaces de navegación principales.
    | La función `route()` de Laravel se usa para generar las URLs de forma dinámica,
    | lo que es una buena práctica para evitar URLs hardcodeadas.
    |
    -->
    <header class="main-header">
        <div class="container">
            <h1><a href="{{ route('home') }}">Plataforma de Aprendizaje de Inglés</a></h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('a1') }}">Nivel A1</a></li>
                    <li><a href="{{ route('a2') }}">Nivel A2</a></li>
                    <!-- Consejo: Aquí podrías añadir más enlaces a medida que la app crezca -->
                    <!-- <li><a href="#">Ejercicios</a></li> -->
                    <!-- <li><a href="#">Perfil</a></li> -->
                </ul>
            </nav>
        </div>
    </header>

    <!--
    |--------------------------------------------------------------------------
    | Contenido Principal
    |--------------------------------------------------------------------------
    |
    | La directiva `@yield('content')` es un marcador de posición.
    | Cada vista específica (como a1.blade.php o a2.blade.php) que extienda
    | este layout llenará esta sección con su propio contenido único.
    |
    -->
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!--
    |--------------------------------------------------------------------------
    | Pie de Página
    |--------------------------------------------------------------------------
    |
    | El pie de página, consistente en todas las páginas.
    | Ideal para información de copyright, enlaces a redes sociales o
    | páginas de "Acerca de" o "Contacto".
    |
    -->
    <footer class="main-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Plataforma de Gramática Inglesa. Todos los derechos reservados.</p>
            <p>Un proyecto educativo construido con Laravel.</p>
        </div>
    </footer>

    <!--
    |--------------------------------------------------------------------------
    | Scripts de JavaScript
    |--------------------------------------------------------------------------
    |
    | Aquí es donde puedes enlazar tus archivos de JavaScript.
    | Colocarlos al final del <body> mejora la velocidad de carga de la página.
    | La directiva `@stack('scripts')` permite a las vistas hijas añadir
    | scripts específicos si los necesitan.
    |
    | Ejemplo de uso en una vista hija:
    | @push('scripts')
    |   <script src="{{ asset('js/mi-script-especifico.js') }}"></script>
    | @endpush
    |
    -->
    <!-- Script principal de la aplicación con la lógica interactiva -->
    <script src="{{ asset('js/main.js') }}" defer></script>

    @stack('scripts')
</body>
</html>