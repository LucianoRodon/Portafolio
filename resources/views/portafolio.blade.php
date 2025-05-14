<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Luciano Rodon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #f0f0f0;
        }

        .navbar {
            background-color: transparent;
            transition: background-color 0.3s ease;
            padding: 1rem 0;
        }

        .navbar.scrolled {
            background-color: #1e1e1e;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #00bcd4;
        }

        .nav-link {
            color: #ccc;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #00bcd4;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: #ccc;
        }

        .social-links {
            margin-top: 2rem;
        }

        .social-icon {
            font-size: 1.5rem;
            margin: 0 10px;
            color: #00bcd4;
            transition: transform 0.3s;
        }

        .social-icon:hover {
            transform: scale(1.2);
        }

        .full-width-section {
            padding: 80px 20px;
            background-color: #1e1e1e;
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: #00bcd4;
        }

        .card {
            background-color: #2a2a2a;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            color: #00bcd4;
            font-weight: 600;
        }

        .card-text {
            color: #ccc;
        }

        .btn-primary {
            background-color: #00bcd4;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0097a7;
        }

        .contact-section {
            background-color: #121212;
            padding: 80px 20px;
            text-align: center;
        }

        .contact-section input,
        .contact-section textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #2a2a2a;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
        }

        .contact-section .btn {
            background-color: #00bcd4;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            transition: 0.3s;
        }

        .contact-section .btn:hover {
            background-color: #0097a7;
        }

        .footer {
            background-color: #1e1e1e;
            text-align: center;
            padding: 20px;
            color: #ccc;
        }

        .footer a {
            color: #00bcd4;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .skill-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .skill-icon:hover {
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
                    <li class="nav-item"><a class="nav-link" href="#habilidades">Habilidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" data-aos="fade-up">
        <div id="particles-js" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
        </div>
        <div class="container text-center" data-aos="fade-up">
            <h1 class="hero-title">¡Hola! Soy Luciano Rodón</h1>
            <p class="hero-subtitle">Desarrollador de Software | Apasionado por la tecnología</p>
            <div class="social-links" data-aos="fade-in" data-aos-delay="300">
                <a href="https://www.linkedin.com/in/luciano-rodon" target="_blank" class="social-icon"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/LucianoRodon" target="_blank" class="social-icon"><i
                        class="fab fa-github"></i></a>
                <a href="https://twitter.com/LuchoRodon" target="_blank" class="social-icon"><i
                        class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>

    <!-- Sobre mí -->
    <section id="sobre-mi" class="full-width-section" data-aos="fade-up">
        <h2 class="section-title">Sobre Mí</h2>
        <p>Soy un desarrollador de software apasionado por la tecnología y la innovación. Tengo experiencia en
            programación y desarrollo web, trabajando con tecnologías como PHP, Laravel, React y bases de datos entre
            otras. Me especializo en crear soluciones eficientes y escalables, siempre buscando mejorar la experiencia
            del usuario y la optimización del rendimiento. Me encanta aprender nuevas tecnologías y enfrentar desafíos
            que me permitan crecer profesionalmente.</p>
    </section>

    <!-- Habilidades -->
    <section id="habilidades" class="full-width-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Habilidades</h2>
            <div class="row justify-content-center g-4">
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP"
                        class="skill-icon">
                    <p>PHP</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5"
                        class="skill-icon">
                    <p>HTML5</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3"
                        class="skill-icon">
                    <p>CSS3</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JavaScript" class="skill-icon">
                    <p>JavaScript</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://www.vectorlogo.zone/logos/laravel/laravel-icon.svg" alt="Laravel"
                        class="skill-icon">
                    <p>Laravel</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React"
                        class="skill-icon">
                    <p>React</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"
                        alt="Python" class="skill-icon">
                    <p>Python</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://www.vectorlogo.zone/logos/amazon_aws/amazon_aws-icon.svg" alt="AWS"
                        class="skill-icon">
                    <p>AWS</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL"
                        class="skill-icon">
                    <p>MySQL</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ruby/ruby-original.svg" alt="Ruby"
                        class="skill-icon">
                    <p>Ruby</p>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/json/json-original.svg" alt="JSON"
                        class="skill-icon">
                    <p>JSON</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Proyectos -->
    <section id="proyectos" class="full-width-section" data-aos="fade-left">
        <div class="container">
            <h2 class="section-title">Proyectos</h2>
            <div class="row g-4">
                <!-- Proyecto 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <video width="100%" controls>
                            <source src="{{ asset('video/Presentacion.mp4') }}" type="video/mp4">
                            Tu navegador no soporta el video.
                        </video>
                        <div class="card-body text-center">
                            <h5 class="card-title">Plataforma de Gestión Académica</h5>
                            <p class="card-text">Este sistema permite gestionar la carga horaria de docentes,
                                optimizando la asignación de materias y horarios de forma eficiente.</p>
                            <a href="{{ asset('video/Presentacion.mp4') }}" class="btn btn-primary" target="_blank">Ver
                                en pantalla completa</a>
                        </div>
                    </div>
                </div>

                <!-- Proyectos 2 y 3 -->
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

    <!-- Contacto -->
    <section id="contacto" class="contact-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Contacto</h2>
            <form action="https://formsubmit.co/luciano.rodon@gmail.com" method="POST">
                <input type="text" name="nombre" placeholder="Tu nombre" required>
                <input type="email" name="email" placeholder="Tu email" required>
                <textarea name="mensaje" rows="5" placeholder="Tu mensaje" required></textarea>
                <button type="submit" class="btn">Enviar mensaje</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; Luciano Rodón. Todos los derechos reservados.</p>
        <p>Hecho con ❤️ y mucho café.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        AOS.init();

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Particles.js config
        particlesJS('particles-js', {
            particles: {
                number: { value: 50 },
                color: { value: "#00bcd4" },
                shape: { type: "circle" },
                opacity: { value: 0.5 },
                size: { value: 3 },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#00bcd4",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 3
                }
            },
            interactivity: {
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" }
                },
                modes: {
                    repulse: { distance: 100 },
                    push: { particles_nb: 4 }
                }
            },
            retina_detect: true
        });
    </script>
</body>

</html>