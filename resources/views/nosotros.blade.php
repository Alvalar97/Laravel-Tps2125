<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nosotros - Cortinas</title>

    <!-- Fuente Instrument Sans -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Instrument Sans', system-ui, sans-serif;
            background-color: #FDFDFC;
            color: #1b1b18;
            line-height: 1.5;
        }

        .dark body {
            background-color: #0a0a0a;
            color: #EDEDEC;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #e5e5e5;
        }

        .dark header {
            border-color: #252525;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            padding: 1rem 0;
        }

        .section {
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1b1b18;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e5e5e5;
        }

        .dark .section-title {
            color: #EDEDEC;
            border-color: #252525;
        }

        .section-content {
            font-size: 0.875rem;
            color: #706f6c;
            margin-bottom: 1rem;
        }

        .dark .section-content {
            color: #A1A09A;
        }

        /* Historia y línea temporal */
        .historia-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        @media (min-width: 768px) {
            .historia-container {
                grid-template-columns: 2fr 1fr;
            }
        }

        .timeline-container {
            margin-top: 1rem;
        }

        .timeline {
            display: flex;
            align-items: center;
            height: 100px;
            position: relative;
            margin-top: 1.5rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 30px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #dbdbd7;
            z-index: 1;
        }

        .dark .timeline::before {
            background-color: #3E3E3A;
        }

        .timeline-item {
            position: relative;
            z-index: 2;
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .timeline-dot {
            width: 14px;
            height: 14px;
            background-color: #1b1b18;
            border-radius: 50%;
            margin-bottom: 12px;
        }

        .dark .timeline-dot {
            background-color: #EDEDEC;
        }

        .timeline-year {
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 6px;
        }

        .timeline-text {
            font-size: 0.75rem;
            color: #706f6c;
        }

        .dark .timeline-text {
            color: #A1A09A;
        }

        /* Secciones inferiores */
        .lower-sections {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .lower-sections {
                grid-template-columns: 1fr 2fr;
            }
        }

        /* Valores */
        .valores-container {
            width: 100%;
        }

        .valor-card {
            padding: 1rem;
            background-color: #FFFFFF;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05), inset 0px 0px 0px 1px rgba(26, 26, 0, 0.1);
            margin-bottom: 1rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .valor-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), inset 0px 0px 0px 1px rgba(26, 26, 0, 0.16);
        }

        .dark .valor-card {
            background-color: #161615;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2), inset 0px 0px 0px 1px rgba(255, 250, 237, 0.1);
        }

        .dark .valor-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), inset 0px 0px 0px 1px rgba(255, 250, 237, 0.2);
        }

        .valor-title {
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
            color: #1b1b18;
        }

        .dark .valor-title {
            color: #EDEDEC;
        }

        /* Equipo */
        .equipo-container {
            width: 100%;
        }

        .equipo-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.25rem;
        }

        @media (min-width: 640px) {
            .equipo-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .team-member {
            display: flex;
            align-items: center;
            background-color: #FFFFFF;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05), inset 0px 0px 0px 1px rgba(26, 26, 0, 0.1);
            padding: 1rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .team-member:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), inset 0px 0px 0px 1px rgba(26, 26, 0, 0.16);
        }

        .dark .team-member {
            background-color: #161615;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2), inset 0px 0px 0px 1px rgba(255, 250, 237, 0.1);
        }

        .dark .team-member:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), inset 0px 0px 0px 1px rgba(255, 250, 237, 0.2);
        }

        .team-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f3f3f3;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .dark .team-image {
            background-color: #252525;
        }

        .team-info h3 {
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: #1b1b18;
        }

        .dark .team-info h3 {
            color: #EDEDEC;
        }

        .team-position {
            font-size: 0.75rem;
            font-weight: 500;
            color: #706f6c;
            margin-bottom: 0.5rem;
        }

        .dark .team-position {
            color: #A1A09A;
        }

        .team-bio {
            font-size: 0.75rem;
            color: #706f6c;
        }

        .dark .team-bio {
            color: #A1A09A;
        }

        /* Footer */
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-top: 1px solid #e5e5e5;
            margin-top: 2rem;
        }

        .dark footer {
            border-color: #252525;
        }

        .back-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #1b1b18;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.875rem;
            transition: background-color 0.2s ease;
        }

        .back-button:hover {
            background-color: #2e2e2a;
        }

        .dark .back-button {
            background-color: #EDEDEC;
            color: #1b1b18;
        }

        .dark .back-button:hover {
            background-color: #d4d4d0;
        }

        .copyright {
            font-size: 0.75rem;
            color: #706f6c;
        }

        .dark .copyright {
            color: #A1A09A;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1 style="font-size: 1.5rem; font-weight: 600;">Nosotros</h1>
            <!-- Eliminado el botón de Inicio superior -->
        </header>

        <div class="main-content">
            <!-- Historia y línea temporal -->
            <div class="historia-container">
                <div class="section">
                    <h2 class="section-title">Nuestra Historia</h2>
                    <p class="section-content">
                        Fundada en 2015, Cortinas Inc. comenzó como un pequeño negocio familiar con una visión simple:
                        proporcionar soluciones elegantes y funcionales para el hogar. Con el tiempo, nuestro negocio creció gracias a
                        la dedicación a la calidad y el servicio al cliente. Hoy nos enorgullecemos de ser uno de los principales
                        proveedores de cortinas en la región.
                    </p>
                </div>

                <div class="timeline-container">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2015</div>
                            <div class="timeline-text">Fundación</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2018</div>
                            <div class="timeline-text">Tienda física</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2020</div>
                            <div class="timeline-text">Tienda online</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2023</div>
                            <div class="timeline-text">Expansión</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2025</div>
                            <div class="timeline-text">Sostenibilidad</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Secciones de Valores y Equipo con mejor separación -->
            <div class="lower-sections">
                <!-- Valores -->
                <div class="valores-container">
                    <div class="section">
                        <h2 class="section-title">Nuestros Valores</h2>

                        <div class="valor-card">
                            <h3 class="valor-title">Calidad</h3>
                            <p class="section-content">Materiales premium y procesos artesanales para productos duraderos.</p>
                        </div>

                        <div class="valor-card">
                            <h3 class="valor-title">Innovación</h3>
                            <p class="section-content">Exploramos nuevas tendencias para ofrecer soluciones modernas.</p>
                        </div>

                        <div class="valor-card">
                            <h3 class="valor-title">Sostenibilidad</h3>
                            <p class="section-content">Comprometidos con prácticas responsables y materiales ecológicos.</p>
                        </div>
                    </div>
                </div>

                <!-- Equipo -->
                <div class="equipo-container">
                    <div class="section">
                        <h2 class="section-title">Nuestro Equipo</h2>

                        <div class="equipo-grid">
                            <div class="team-member">
                                <div class="team-image"></div>
                                <div class="team-info">
                                    <h3>Marco Cortés</h3>
                                    <div class="team-position">Fundador y Director</div>
                                    <div class="team-bio">Con más de 20 años de experiencia en la industria textil.</div>
                                </div>
                            </div>

                            <div class="team-member">
                                <div class="team-image"></div>
                                <div class="team-info">
                                    <h3>Elena Mora</h3>
                                    <div class="team-position">Diseñadora Jefe</div>
                                    <div class="team-bio">Crea diseños que combinan estética y funcionalidad.</div>
                                </div>
                            </div>

                            <div class="team-member">
                                <div class="team-image"></div>
                                <div class="team-info">
                                    <h3>Roberto Sánchez</h3>
                                    <div class="team-position">Gerente de Producción</div>
                                    <div class="team-bio">Supervisa los procesos para garantizar altos estándares.</div>
                                </div>
                            </div>

                            <div class="team-member">
                                <div class="team-image"></div>
                                <div class="team-info">
                                    <h3>Ana López</h3>
                                    <div class="team-position">Atención al Cliente</div>
                                    <div class="team-bio">Asegura que cada cliente reciba un servicio personalizado.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <a href="{{ url('/') }}" class="back-button">Volver al Inicio</a>
            <div class="copyright">© 2025 Cortinas, Inc.</div>
        </footer>
    </div>
</body>

</html>