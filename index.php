<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="font_awesome_4_7_0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@1,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Home</title>
  </head>
  <body>
    <nav class="nav-bar">
      <ul>
        <li>
          <a class="scroll" href="#container_home">Inico</a>
        </li>
        <li>
          <a class="scroll" href="#contaner_about">Sobre mí</a>
        </li>
        <li>
          <a class="scroll" href="#title_gral_portfolios">Portafolio</a>
        </li>
        <li>
          <a class="scroll" href="#container_form_contactme">Contacto</a>
        </li>
      </ul>
    </nav>

    <section id="container_home" class="container_home">
      <section class="body_home">
        <h1 id="title_main"></h1>
        <p class="soft_skills_main">
          <span>html</span>
          <span>css</span>
          <span>javascript</span>
          <span>php</span>
          <span>mysql</span>
        </p>
        <hr />
        <section class="buttons_home">
          <button type="button">
            <i class="fa fa-github"></i>
            <span>Github</span>
          </button>
          <button type="button">
            <i id="linkedin" class="fa fa-linkedin"></i>
            <span>Linkedin</span>
          </button>
          <button type="button">
            <i id="youtube" class="fa fa-youtube-play"></i>
            <span>Youtube</span>
          </button>
          <button type="button">
            <i id="mi_blog" class="fa fa-globe"></i>
            <span>Mi blog</span>
          </button>
        </section>
      </section>
    </section>

    <section id="contaner_about" class="contaner_about">
      <h2>Acerca De Mí</h2>
      <section class="container_about_description">
        <h2>Desarroladdor web fullstack especializado en php</h2>
        <p>
          Hola, mi nombre es Emmanuel soy programador web php con 3 años de experiencia.
          He manejado las siguientes tecnologías:
        </p>
        <ul class="list_hard_skills">
          <li>
            html
          </li>
          <li>
            css
          </li>
          <li>
            javascript
          </li>
          <li>
            php
          </li>
          <li>
            mysql
          </li>
          <li>
            angular
          </li>
          <li>
            typescript
          </li>
          <li>
            ionic
          </li>
          <li>
            nodejs
          </li>
          <li>
            github
          </li>
          <li>
            Linux
          </li>
        </ul>
        <p>
          Soy una persona muy apaasionada a su profesión, para mi programar es mi forma de mantenerme
          entretenido. Me gusta todo lo que es tecnología.
        </p>
        <p>
          Mi mayor deseo es poder especializarme en PHP y las tecnologías de javascript.
          Y tambien irme adentrando al pentesting de aplicaciones web, es decir testear aplicaciones webs
          para corregir fallos de seguridad.
        </p>
        <p>
          Mis pasatiempos son; ver videos de entretenimiento, ocio, programación o seguridad informática.
          Salir a dar la vuelta para poder despejarme mi mente (lo hago cuando ando algo saturado de trabajo
          o solo por pasar el rato)
        </p>
      </section>
    </section>

    <h2 id="title_gral_portfolios">Proyectos realizados</h2>
    <section class="container_portfolio">
      <section class="box_project">
        <img src="img/programacion.jpg" alt="imagen_proyecto">
        <h4>Titulo del proyecto</h4>
        <span>html</span>
        <span>css</span>
        <span>javascript</span>
        <span>php</span>
        <span>mysql</span>
        <button>Explorar</button>
      </section>
      <section class="box_project">
        <img src="img/programacion.jpg" alt="imagen_proyecto">
        <h4>Titulo del proyecto</h4>
        <span>html</span>
        <span>css</span>
        <span>javascript</span>
        <span>php</span>
        <span>mysql</span>
        <button>Explorar</button>
      </section>
      <section class="box_project">
        <img src="img/programacion.jpg" alt="imagen_proyecto">
        <h4>Titulo del proyecto</h4>
        <span>html</span>
        <span>css</span>
        <span>javascript</span>
        <span>php</span>
        <span>mysql</span>
        <button>Explorar</button>
      </section>

      <section class="box_project">
        <img src="img/programacion.jpg" alt="imagen_proyecto">
        <h4>Titulo del proyecto</h4>
        <span>html</span>
        <span>css</span>
        <span>javascript</span>
        <span>php</span>
        <span>mysql</span>
        <button>Explorar</button>
      </section>
      <section class="box_project">
        <img src="img/programacion.jpg" alt="imagen_proyecto">
        <h4>Titulo del proyecto</h4>
        <span>html</span>
        <span>css</span>
        <span>javascript</span>
        <span>php</span>
        <span>mysql</span>
        <button>Explorar</button>
      </section>
      <section class="box_project">
        <img src="img/programacion.jpg" alt="imagen_proyecto">
        <h4>Titulo del proyecto</h4>
        <span>html</span>
        <span>css</span>
        <span>javascript</span>
        <span>php</span>
        <span>mysql</span>
        <button>Explorar</button>
      </section>
    </section>

    <section id="container_form_contactme" class="container_form_contactme">
      <h2>Contactame</h2>
      <form id="form_contactme">
        <label for="name">Nombre<span class="symbol_require"> * </span></label>
        <input type="text" name="name">
        <label for="email">Correo<span class="symbol_require"> * </span></label>
        <input type="email" name="email">
        <label for="subject">Asunto del correo<span class="symbol_require"> * </span></label>
        <input type="text" name="subject">
        <label for="message">Mensaje del correo<span class="symbol_require"> * </span></label>
        <textarea name="message" id="message"></textarea>
        <div class="message_require">
          <span>*</span> Todos los campos son requeridos
        </div>
        <button>Enviar Mensaje</button>
      </form>
    </section>

    <script src="js/index.js"></script>
  </body>

</html>
