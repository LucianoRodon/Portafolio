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

        .scroll-down {
            display: inline-block;
            margin-top: 30px;
            font-size: 2rem;
            color: #00ffff;
            animation: bounce 2s infinite;
            text-decoration: none;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(10px);
            }
        }

        .scroll-down:hover {
            color: #00cccc;
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
            <p class="hero-subtitle">Software Developer | Apasionado por la tecnología</p>
            <div class="social-links" data-aos="fade-in" data-aos-delay="300">
                <a href="https://www.linkedin.com/in/luciano-rodon" target="_blank" class="social-icon"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/LucianoRodon" target="_blank" class="social-icon"><i
                        class="fab fa-github"></i></a>
                <a href="https://twitter.com/LuchoRodon" target="_blank" class="social-icon"><i
                        class="fab fa-twitter"></i></a>
                <a href="{{ asset('cv/CV_Luciano_Rodon.pdf') }}" target="_blank" class="social-icon"
                    title="Abrir Curriculum Vitae">
                    <i class="fas fa-file-alt"></i>
                </a>
                <br><br>
            </div>
            <a href="#sobre-mi" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>

        </div>
    </section>

    <!-- Sobre mí -->
    <section id="sobre-mi" class="full-width-section" data-aos="fade-up">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{ asset('img/yo.jpg') }}" alt="Luciano Rodon" class="img-fluid rounded-circle shadow-lg"
                        style="max-width: 250px;">
                </div>
                <div class="col-md-8">
                    <h2 class="section-title text-center mb-5">Sobre Mí</h2>
                    <p>
                        Soy Luciano Rodon, desarrollador de software con sólida formación académica y una profunda
                        pasión por la
                        tecnología. Me especializo en el desarrollo web utilizando herramientas como PHP, Laravel, React
                        y
                        MySQL, creando soluciones robustas, escalables y orientadas al usuario.
                    </p>
                    <p>
                        Me destaco por mi compromiso con el aprendizaje continuo, la escritura de código limpio y la
                        capacidad
                        de adaptarme rápidamente a nuevos entornos y desafíos. Disfruto trabajar en equipo, aportar
                        ideas y
                        participar activamente en cada etapa del desarrollo para lograr productos de calidad.
                    </p>
                    <p>
                        Actualmente busco seguir creciendo profesionalmente, aportando mis conocimientos en proyectos
                        que
                        generen un impacto real y me permitan seguir desarrollando mis habilidades técnicas y humanas.
                    </p>
                </div>
            </div>
        </div>
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
    <section id="proyectos" class="full-width-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Proyectos</h2>
            <br>
            <div class="row g-4 justify-content-center">

                <!-- Proyecto 1 (Portfolio Personal) -->
                <div class="col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/Cel.png" alt="Captura del Portfolio" class="card-img-top">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Portfolio Personal</h5>
                            <p class="card-text">Sitio web responsive hecho con <strong>HTML, CSS, Bootstrap,
                                    Laravel</strong> y animaciones visuales personalizadas. Refleja mi experiencia,
                                proyectos y contacto profesional.</p>
                            <a href="https://ronasosc.xyz" target="_blank" class="btn btn-primary mt-auto">Ir al
                                sitio</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 (Gestión Académica) -->
                <div class="col-md-4 col-lg-3.3">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video class="rounded-top" controls>
                                <source src="video/Presentacion.mp4" type="video/mp4">
                                Tu navegador no soporta el video.
                            </video>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Gestión Académica</h5>
                            <p class="card-text">Plataforma desarrollada con <strong>PHP, MySQL, HTML, CSS y
                                    JavaScript</strong> para administrar carga horaria docente, automatizar procesos
                                académicos y optimizar la asignación de materias.</p>
                            <a href="video/Presentacion.mp4" target="_blank" class="btn btn-primary mt-auto">Ver
                                demo</a>
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
            <p class="mb-4">¿Querés ponerte en contacto conmigo? Completá el siguiente formulario y te responderé lo
                antes posible.</p>
            <form action="mailto:luchorodon@gmail.com" method="POST" enctype="text/plain">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <input type="text" name="nombre" placeholder="Tu nombre" required>
                        <input type="email" name="email" placeholder="Tu correo electrónico" required>
                        <input type="text" name="asunto" placeholder="Asunto" required>
                        <textarea name="mensaje" rows="5" placeholder="Tu mensaje..." required></textarea>
                        <button type="submit" class="btn">Enviar mensaje</button>
                    </div>
                </div>
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