<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #101010;
            color: #fff;
            overflow-x: hidden;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem 2rem;
            background: rgba(16, 16, 16, 0.8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
            border-bottom: 1px solid #333;
        }

        header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: #38bdf8;
        }

        nav a {
            margin-left: 2rem;
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #38bdf8;
        }

        section {
            min-height: 100vh;
            padding: 4rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        #home {
            background: url('https://source.unsplash.com/random/1920x1080/?technology') no-repeat center center/cover;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        #home h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        #home p {
            font-size: 1.2rem;
            line-height: 1.8;
            max-width: 600px;
        }

        #home a {
            margin-top: 2rem;
            padding: 1rem 2rem;
            background-color: #38bdf8;
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            transition: background 0.3s;
        }

        #home a:hover {
            background-color: #1d4ed8;
        }

        #projects {
            background-color: #181818;
            padding: 6rem 2rem;
        }

        #projects h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #38bdf8;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .project-card {
            background: #212121;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .project-card h3 {
            margin-bottom: 1rem;
            color: #38bdf8;
        }

        .project-card p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: #ddd;
        }

        .project-card a {
            text-decoration: none;
            color: #38bdf8;
            font-weight: bold;
            font-size: 1rem;
        }

        #skills-contact {
            background: linear-gradient(to right, #1f2937, #111827);
            padding: 6rem 2rem;
        }

        #skills-contact h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #38bdf8;
        }

        .skills-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .skill {
            background: #212121;
            padding: 1rem 2rem;
            border-radius: 5px;
            font-size: 1rem;
            color: #ddd;
            border: 1px solid #333;
        }

        .contact-info p {
            margin: 0.5rem 0;
            font-size: 1.2rem;
        }

        .contact-info a {
            color: #38bdf8;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            padding: 2rem;
            font-size: 0.9rem;
            background: #0f172a;
            color: #aaa;
        }

        #home {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4rem 2rem;
            height: 100vh;
            background-color: #101010;
        }

        .home-content {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            text-align: left;
        }

        .home-text {
            width: 50%;
            color: #fff;
        }

        .home-text h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .home-text p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .home-text a {
            padding: 1rem 2rem;
            background-color: #38bdf8;
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .home-text a:hover {
            background-color: #1d4ed8;
        }

        .home-image {
            width: 50%;
            text-align: center;
        }

        .home-image img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
        }

        #contact {
            background: #111827;
            padding: 6rem 2rem;
            text-align: center;
            color: #fff;
        }

        #contact h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #38bdf8;
        }

        .contact-info p {
            margin: 0.5rem 0;
            font-size: 1.2rem;
        }

        .contact-info a {
            color: #38bdf8;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <h1>El portafolio de Gabriel</h1>
    <nav>
        <a href="#home">Inicio</a>
        <a href="#projects">Proyectos</a>
        <a href="#skills-contact">Habilidades</a>
        <a href="#contact">Contacto</a>
        <a href="./GT-CV_Res.pdf" download style="color:#38bdf8;font-weight: bold;">Descargar CV</a>
    </nav>
</header>

<section id="home">
    <div class="home-content">
        <div class="home-text" style="flex: 1; display: flex; flex-direction: column; justify-content: center; padding-right: 2rem; padding-top: 15rem; padding-left: 10rem">
            <h1>Bienvenido</h1>
            <p>Mi nombre es <b>Gabriel</b>, soy un desarrollador junior en busca de seguir desarrollándome en un entorno profesional.</p>
            <p>Conoce aquí proyectos que iré desarrollando, habilidades que he aprendido y cómo puedo contribuir a tu equipo o proyecto.</p>
            <a href="#projects" style="max-width: 14rem;">Explorar Proyectos</a>
        </div>
        <div class="home-image" style="flex: 1; display: flex; flex-direction: column; justify-content: center; padding-right: 2rem; padding-top: 15rem; padding-left: 10rem width:100%;">
            <img src="./img/dev-scaled.jpeg" alt="Imagen relacionada con tecnología">
        </div>
    </div>
</section>

<section id="projects">
    <h2 style="margin-bottom:5rem; margin-top:-10rem;">Proyectos</h2>
    <div class="project-grid">
        <div class="project-card">
            <h3>Gestor de Tareas</h3>
            <p>Una aplicación que permite a los usuarios crear, editar y organizar sus tareas de forma sencilla.</p>
            <p><b>Tecnologías:</b> PHP, Symfony, CSS, JavaScript, MySQL.</p>
            <a href="#">Ver Proyecto</a>
        </div>
        <div class="project-card">
            <h3>Buscador de Clima</h3>
            <p>Una aplicación web que permite a los usuarios consultar el clima actual en cualquier ciudad del mundo.</p>
            <p><b>Tecnologías:</b> PHP, Symfony, CSS, JavaScript, API de OpenWeather.</p>
            <a href="#">Ver Proyecto</a>
        </div>
        <div class="project-card">
            <h3>En proceso...</h3>
            <p></p>
            <p><b></b></p>
            <a href="#">Ver Proyecto</a>
        </div>
    </div>
</section>

<section id="skills-contact" style="margin-bottom:-15rem;">
    <h2 style="margin-top:-15rem; margin-bottom:8rem;">Habilidades</h2>
    <div class="skills-grid">
        <div class="col-md-3 col-6 skill">
            <img src="./img/descargajs.png" alt="JavaScript Logo" class="img-fluid" style="max-width: 60px;">
            <p>JavaScript</p>
        </div>
        <div class="col-md-3 col-6 skill">
            <img src="./img/descargaphp.png" alt="PHP Logo" class="img-fluid" style="max-width: 60px;">
            <p>PHP</p>
        </div>
        <div class="col-md-3 col-6 skill">
            <img src="./img/descargasymf.jpg" alt="Symfony Logo" class="img-fluid" style="max-width: 60px;">
            <p>Symfony</p>
        </div>
        <div class="col-md-3 col-6 skill">
            <img src="./img/descargacss.png" alt="CSS Logo" class="img-fluid" style="max-width: 60px;">
            <p>CSS</p>
        </div>
        <div class="col-md-3 col-6 skill">
            <img src="./img/descargabss.png" alt="Bootstrap Logo" class="img-fluid" style="max-width: 60px;">
            <p>Bootstrap</p>
        </div>
        <div class="col-md-3 col-6 skill">
            <img src="./img/descargamysql.png" alt="MySQL Logo" class="img-fluid" style="max-width: 60px;">
            <p>MySQL</p>
        </div>
        <div class="col-md-3 col-6 skill">
            <img src="./img/descargagit.png" alt="Git Logo" class="img-fluid" style="max-width: 60px;">
            <p>Git</p>
        </div>
    </div>
</section>

<section id="contact">
    <h2 style="margin-top:-25rem; margin-bottom:8rem;">Contacto</h2>
    <div class="contact-info">
        <p>Correo Electrónico: <a href="mailto:gabriel.tureac07@gmail.com">gabriel.tureac07@gmail.com</a></p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/gabriel-tureac-240b97251/">Mi LinkedIn</a></p>
        <p><a href="./GT-CV_Res.pdf" download>Ver CV</a></p>
    </div>
</section>

<footer>
    &copy; 2025 El portafolio de Gabriel
</footer>
</body>
</html>
