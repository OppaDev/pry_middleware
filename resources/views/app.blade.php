<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Portal de Salud Preventiva">
    <meta name="author" content="Tu Nombre o Institución">

    <title>@yield('title', 'Portal de Salud Preventiva')</title>

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts (Ejemplo - Puedes elegir las que usa la plantilla original o tus preferidas) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS (Aquí irán tus estilos para imitar la plantilla) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles') <!-- Para estilos específicos de cada página -->
</head>

<body >
    <!-- ***** Sub Header ***** -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">
                        <p>Institución de Salud Preventiva: <em>Cuidamos tu bienestar</em> en cada etapa.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">
                        <ul>
                            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('welcome') }}" class="logo">
                            SaludPreventiva
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('welcome') }}" class="{{ Request::is('/') ? 'active' : '' }}">Inicio</a></li>
                            {{-- Puedes añadir más enlaces aquí si tu aplicación crece --}}
                            {{-- <li class="has-sub">
                                <a href="javascript:void(0)">Servicios</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Chequeos Generales</a></li>
                                    <li><a href="#">Nutrición</a></li>
                                    <li><a href="#">Salud Mental</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#contact">Contacto</a></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <main class="hero-section">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © {{ date('Y') }} Institución de Salud Preventiva. Todos los derechos reservados.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>

    <!-- Scripts personalizados (si necesitas JS para el menú móvil, etc.) -->
    {{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
    @stack('scripts') <!-- Para scripts específicos de cada página -->
</body>
</html>