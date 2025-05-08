<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Luciano Rodon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a2e;
            color: #fff;
            position: relative;
            z-index: 1;
            scroll-behavior: smooth;
        }

        /* Evitar desplazamiento horizontal */
        body {
            overflow-x: hidden;
        }

        /* También podemos evitar cualquier margen en la raíz */
        html,
        body {
            margin: 0;
            padding: 0;
        }


        /* Navbar con fondo más transparente y desenfoque */
        .navbar {
            background: rgba(44, 62, 80, 0.5);
            /* Fondo más transparente */
            backdrop-filter: blur(10px);
            /* Efecto de desenfoque */
            transition: background-color 0.5s;
        }


        /* Navbar con cambio de fondo al hacer scroll */
        .navbar.scrolled {
            background-color: rgba(44, 62, 80, 1);
            /* Fondo sólido al hacer scroll */
        }

        .navbar a {
            color: #fff !important;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            text-transform: uppercase;
            margin-right: 20px;
            letter-spacing: 1px;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: #4dabf7;
        }

        /* Hero Section - Fondo con partículas */
        .hero-section {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
            background: linear-gradient(135deg, #2C3E50, #4B9D91);
        }

        .hero-section #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .hero-section h1,
        .hero-section p {
            z-index: 2;
            position: relative;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            font-family: 'Roboto', sans-serif;
            color: #fff;
            margin-bottom: 15px;
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-family: 'Open Sans', sans-serif;
            color: #aaa;
            margin-bottom: 30px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            z-index: 3;
            /* Asegura que las redes estén sobre el fondo */
            animation: fadeIn 1.5s ease-out;
        }

        .social-icon {
            font-size: 2.5rem;
            color: #fff;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icon:hover {
            color: #4dabf7;
            transform: scale(1.2);
        }

        /* Secciones de "Sobre mí" y "Proyectos" */
        .section-title {
            font-size: 28px;
            color: #4dabf7;
            text-align: center;
            margin-top: 50px;
        }

        /* Sección sobre mí */
        #sobre-mi {
            background: linear-gradient(to right, #34495E, #2C3E50);
            padding: 60px 20px;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            margin-top: 0;
            box-sizing: border-box;
            min-height: auto;
        }

        #sobre-mi h2 {
            color: #fff;
            animation: slideInUp 0.8s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #sobre-mi p {
            font-size: 1.2rem;
            color: #ccc;
            animation: fadeIn 1.2s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Sección Proyectos */
        #proyectos {
            background: linear-gradient(135deg, #34495E, #4B9D91);
            padding: 60px 0;
            animation: fadeInUp 1.5s ease-out;
        }

        .card {
            background: #2C3E50;
            color: #fff;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-body .btn {
            background-color: #4dabf7;
            border: none;
            transition: background-color 0.3s ease;
        }

        .card-body .btn:hover {
            background-color: #3498db;
        }

        /* Contacto */
        .contact-section {
            background: linear-gradient(135deg, #2C3E50, #34495E);
            padding: 40px 0;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            width: 100%;
            box-sizing: border-box;
        }

        .contact-section h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        .contact-section input,
        .contact-section textarea {
            background-color: #34495e;
            color: #fff;
            border: 1px solid #2C3E50;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            width: 100%;
            font-size: 1rem;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-section input:focus,
        .contact-section textarea:focus {
            border: 1px solid #4dabf7;
            box-shadow: 0 0 10px rgba(77, 171, 247, 0.5);
            outline: none;
        }

        .contact-section .btn {
            background-color: #4dabf7;
            border: none;
            width: 100%;
            padding: 15px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            border-radius: 5px;
        }

        .contact-section .btn:hover {
            background-color: #3498db;
        }


        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            background: #1a1a2e;
        }

        .footer a {
            color: #4dabf7;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Transition más rápida para la carga de contenido */
        .section {
            opacity: 0;
            animation: fadeInSection 1s forwards;
        }

        @keyframes fadeInSection {
            to {
                opacity: 1;
            }
        }

        /* Redes sociales */
        .social-links {
            margin-top: 20px;
        }

        .social-icon {
            margin: 0 10px;
            font-size: 2.5rem;
            /* Aumentado para mayor visibilidad */
            color: #fff;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icon:hover {
            color: #4dabf7;
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">LJR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#sobre-mi">Sobre mí</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" data-aos="fade-up">
        <div id="particles-js"></div>
        <div class="container text-center" data-aos="fade-up">
            <h1 class="hero-title">¡Hola! Soy Luciano Rodón</h1>
            <p class="hero-subtitle">Desarrollador de Software | Apasionado por la tecnología</p>
            <!-- Redes Sociales -->
            <div class="social-links" data-aos="fade-in" data-aos-delay="300">
                <a href="https://www.linkedin.com/in/luciano-rodon" target="_blank" class="social-icon"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/LucianoRodon" target="_blank" class="social-icon"><i
                        class="fab fa-github"></i></a>
                <a href="https://twitter.com/LucianoRodon" target="_blank" class="social-icon"><i
                        class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre-mi" class="full-width-section" data-aos="fade-up">
        <h2 class="section-title">Sobre Mí</h2>
        <p>
            Soy un desarrollador de software apasionado por la tecnología y la innovación.
            Tengo experiencia en programación y desarrollo web, trabajando con tecnologías como PHP, Laravel,
            React y bases de datos entre otras. Me especializo en crear soluciones eficientes y escalables,
            siempre buscando mejorar la experiencia del usuario y la optimización del rendimiento.
            Me encanta aprender nuevas tecnologías y enfrentar desafíos que me permitan crecer profesionalmente.
        </p>
    </section>


    <!-- Proyectos Section -->
    <section id="proyectos" class="full-width-section" data-aos="fade-left">
        <div class="container">
            <h2 class="section-title">Proyectos</h2>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card">
                        <video width="100%" controls>
                            <source src="{{ asset('video/Presentacion.mp4') }}" type="video/mp4">
                            Tu navegador no soporta el video.
                        </video>
                        <div class="card-body text-center">
                            <h5 class="card-title">Plataforma de Gestión Académica</h5>
                            <p class="card-text"> En este video se presenta una visión general del sistema de gestión de
                                carga de profesores.
                                Se explican sus principales características, funcionalidades y cómo facilita la
                                asignación
                                de materias a los docentes de manera eficiente.</p>
                            <a href="{{ asset('video/Presentacion.mp4') }}" class="btn btn-primary" target="_blank">Ver
                                en pantalla completa</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Proyecto 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Proyecto 2</h5>
                            <p class="card-text">Descripción breve del proyecto 2.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Proyecto 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Proyecto 3</h5>
                            <p class="card-text">Descripción breve del proyecto 3.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact-section" data-aos="zoom-in">
        <div class="container">
            <h2 class="section-title text-center">Contacto</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Tu nombre" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Tu email" required>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" rows="5" placeholder="Tu mensaje" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer" data-aos="fade-up">
        <p>© 2025 Luciano Rodon. Todos los derechos reservados.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

    <script>
        // Inicializa AOS (animaciones al hacer scroll)
        AOS.init();

        // Cambiar la clase al hacer scroll para modificar el fondo de la navbar
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Inicializar Particles.js
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 100,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#ffffff"
                    }
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 3,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out"
                }
            }
        });
    </script>
</body>

</html>