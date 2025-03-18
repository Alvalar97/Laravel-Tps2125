<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>

    <!-- Fuente Instrument Sans (igual que en tu página de inicio) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Swiper CSS (CDN) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Tailwind / Variables CSS (ajusta según tu configuración) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
    <style>
        /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
    </style>
    @endif

    <style>
        .swiper-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            height: 500px;
            /* Ajusta según necesites */
        }

        .swiper-wrapper {
            display: flex !important;
            /* Asegura que sea flex */
        }

        .swiper-slide {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Mitad izquierda: texto */
        .product-info {
            width: 50%;
            padding: 2rem;
            box-sizing: border-box;
        }

        /* Mitad derecha: imagen */
        .product-image {
            width: 50%;
            height: 100%;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.7;
        }

        /* Estilo para el botón adicional de regreso */
        .back-button-container {
            text-align: center;
            padding: 20px 0 100px 0;
            /* Espacio suficiente para no ser tapado por el footer */
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1b1b18;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .dark .back-button {
            background-color: #EDEDEC;
            color: #1b1b18;
        }

        .back-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<!-- `flex flex-col` para layout vertical y `min-h-screen` para ocupar la pantalla -->

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] font-sans min-h-screen flex flex-col">
    <header class="p-6">
        <h1 class="text-3xl font-medium mb-4">Productos</h1>
    </header>

    <!-- Se quita `justify-center` para permitir scroll y se añade pb-24 para no tapar el footer -->
    <main class="flex-1 flex flex-col items-center pb-24">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="product-info">
                        <h2 class="text-2xl font-semibold mb-2">Cortina Modelo A</h2>
                        <p class="mb-2">Descripción breve del producto. Ideal para salas y comedores, con un estilo moderno.</p>
                        <p class="mb-4 font-bold">Precio: $100</p>
                        <button class="px-4 py-2 bg-[#1b1b18] dark:bg-[#EDEDEC] text-white dark:text-[#1b1b18] rounded">
                            Agregar al carrito
                        </button>
                    </div>
                    <div class="product-image">
                        <img src="{{ asset('images/producto1.jpg') }}" alt="Producto 1">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="product-info">
                        <h2 class="text-2xl font-semibold mb-2">Cortina Modelo B</h2>
                        <p class="mb-2">Descripción breve del producto. Ideal para dormitorios, con tela traslúcida.</p>
                        <p class="mb-4 font-bold">Precio: $80</p>
                        <button class="px-4 py-2 bg-[#1b1b18] dark:bg-[#EDEDEC] text-white dark:text-[#1b1b18] rounded">
                            Agregar al carrito
                        </button>
                    </div>
                    <div class="product-image">
                        <img src="{{ asset('images/producto2.jpg') }}" alt="Producto 2">
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="product-info">
                        <h2 class="text-2xl font-semibold mb-2">Cortina Modelo C</h2>
                        <p class="mb-2">Descripción breve del producto. Ideal para oficinas, con alta durabilidad.</p>
                        <p class="mb-4 font-bold">Precio: $120</p>
                        <button class="px-4 py-2 bg-[#1b1b18] dark:bg-[#EDEDEC] text-white dark:text-[#1b1b18] rounded">
                            Agregar al carrito
                        </button>
                    </div>
                    <div class="product-image">
                        <img src="{{ asset('images/producto3.jpg') }}" alt="Producto 3">
                    </div>
                </div>

            </div>
            <!-- Paginación -->
            <div class="swiper-pagination"></div>
            <!-- Flechas -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- Botón adicional para regresar a inicio.blade.php -->
        <div class="back-button-container">
            <a href="{{ url('/') }}" class="back-button">
                Regresar a Inicio
            </a>
        </div>
    </main>

    <!-- Footer fijo al fondo de la pantalla -->
    <footer class="w-full p-4 text-center bg-gray-200 border-t border-gray-400 fixed bottom-0 left-0">
        <a href="{{ url('/') }}" class="inline-block px-5 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Volver al Inicio
        </a>
        <p class="text-sm mt-4">© 2025 Cortinas, Inc.</p>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1, // Solo 1 slide visible
            centeredSlides: false,
            spaceBetween: 460, // Sin espacio extra
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>