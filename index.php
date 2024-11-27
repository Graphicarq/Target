<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_shape.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="img/favi.png" type="image/x-icon">
  <title>Target HR</title>
</head>
<body>
  <!-- Cabecera -->
  <header>
    <a href="#hero-section" class="logo">
      <img src="img/logo.svg" alt="logo de la compañia">
      </div>
      <div class="navbar">
        <nav>
          <a href="#hero-section" class="nav-link underline-hover">Inicio</a>
          <a href="#servicios" class="nav-link underline-hover">Servicios</a>
          <a href="#nosotros" class="nav-link underline-hover">Nosotros</a>
          <a href="#industrias" class="nav-link underline-hover">Industrias</a>
          <a href="#empleo" class="nav-link underline-hover">Empleo</a>
          <a class="cta" id="btn-abrir-modal" action="#" onsubmit="return false;">Contacto</a>
        </nav>
      </div>
      <div class="hamburger" id="hamburger">
        <a action="#" class="nav_menu" onsubmit="return false;">
          <img src="./img/menu.svg" class="nav_icon" id="btn-abrir-dropdown">
        </a>
      </div>
    </a>
  </header>
  <!-- Fin de la Cabecera -->
  <!-- Hero -->
  <section id="hero-section">
    <div class="content_hero">
      <div class="hero">
        <h1><span style="color:#F07C0B">Impulsa tu empresa con el </span><span style="color:#00807F">talento
            adecuado</span></h1>
        <p>Bienvenido a Target Hr, líderes en headhunting especializado. Nos
          dedicamos a encontrar y seleccionar ejecutivos de alto nivel
          para impulsar el éxito de tu empresa.</p>
        <form>
          <a href="#contacto" class="btn_desk" id="btn">Contáctanos</a>
        </form>
        <form action="#" onsubmit="return false;">
          <button class="btn_dro" id="btn-abrir-modale">Contáctanos</button>
        </form>
      </div>
      <div class="hero_img">
        <img src="img/hero.png" alt="" tyle="position: absolute;" class="main_img">
      </div>
    </div>
  </section>
  <!-- Fin de Hero -->
  <!-- Sub hero -->
  <section id="sub_hero" class="container">
    <div class="card">
      <a href="empresa.php" class="card-item">
        <img src="img/empresa.jpg" alt="1">
        <h3>Potencia tu equipo<br>
          (Empresa)</h3>
        <p>Somos el lazo de confianza para atraer, fidelizar y potenciar el talento de tu equipo, en un vínculo de
          transparencia y confidencialidad. </p>
      </a>
    </div>
    <div class="card">
      <a href="persona.php" class="card-item">
        <img src="img/personal.jpg" alt="1">
        <h3>Potencia tu talento<br>
          (Persona)</h3>
        <p>Somos el lazo de confianza para atraer, fidelizar y potenciar el talento de tu equipo, en un vínculo de
          transparencia y confidencialidad. </p>
      </a>
    </div>
  </section>
  <img src="img/shape_serv.png" alt="" style="position: absolute;" class="shape_serv">
  <!-- Fin de Sub hero -->
  <!-- Servicios -->
  <section id="servicios" class="row">
    <div class="row">
      <h2 class="section-heading">Servicios</h2>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/seleccion.png" alt="1">
          </div>
          <h3>Selección</h3>
          <p>
            Le brindamos el personal idóneo para los puestos estratégicos
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/head_hunting.png" alt="1">
          </div>
          <h3>Head Hunting</h3>
          <p>
            El puesto clave a fin de su cultura y desarrollo organizacional
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/desarrollo humano.png" alt="1">
          </div>
          <h3>Desarrollo Humano</h3>
          <p>
            Desarrollo y fortalecimiento de su equipo de trabajo
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/outplacement.png" alt="1">
          </div>
          <h3>Outplacement & Coaching</h3>
          <p>
            Desarrollo de planes estratégicos personales y laborales
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/outsourcing.png" alt="1">
          </div>
          <h3>Outsourcing</h3>
          <p>
            Fortalecemos y dinamizamos su desarrolllo empresarial
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/payroll.png" alt="1">
          </div>
          <h3>Payroll</h3>
          <p>
            Brindamos soluciones tecnológicas a la medida de sus necesidades
          </p>
        </div>
      </div>
      <div class="content-image">
        <img src="img/Ellipse 25.png" alt="" style="position: absolute;" class="shape1">
        <img src="img/Ellipse 23.png" alt="" style="position: absolute;" class="shape2">
      </div>
    </div>
  </section>
  <!-- Fin de Servicios -->
  <!-- Nosotros -->
  <section id="nosotros">
    <div class="row">
      <h2 class="section-heading">¿Porqué trabajar con nosotros?</h2>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/check.png" alt="1">
          </div>
          <div id="exp" class="contador" style="--contarhasta:14"></div>
          <p>
            Experiencia
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/nps.png" alt="1">
          </div>
          <div id="nps" class="contador" style="--contarhasta:95"></div>
          <p>
            NPS
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/work.png" alt="1">
          </div>
          <div id="work" class="contador" style="--contarhasta:3000"></div>
          <p>
            Puestos de trabajo
          </p>
        </div>
      </div>
    </div>
  </section>
  <img src="img/Ellipse 23_mob.png" alt="" style="position: absolute;" class="shape_ind1">
  <img src="img/Ellipse 23_mob.png" alt="" style="position: absolute;" class="shape_ind">
  <!-- Fin de Nosotros -->
  <!-- Industrias -->
  <section id="industrias">
    <div class="row">
      <h2 class="section-heading">Industrias</h2>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/Banca.svg" alt="1">
          </div>
          <h3>Banca y Servicios</h3>
          <p>
            Optimizamos la búsqueda de talento para instituciones financieras líderes.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/Inmobiliaria.svg" alt="1">
          </div>
          <h3>Ing. de Construcción</h3>
          <p>
            Conectamos con profesionales clave en el sector inmobiliario.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/Tecnologia.svg" alt="1">
          </div>
          <h3>Innovación en tecnología</h3>
          <p>
            Impulsamos la innovación mediante reclutamiento especializado en tecnología.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/Mineria.svg" alt="1">
          </div>
          <h3>Minería y Petróleo</h3>
          <p>
            Reclutamos expertos para impulsar el crecimiento sostenible en minería.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/masivo.png" alt="1">
          </div>
          <h3>Masivo y Retail</h3>
          <p>
            Facilitamos la contratación de talento en la industria de consumo.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <img src="img/Consumo_masivo.svg" alt="1">
          </div>
          <h3>Agroindustria</h3>
          <p>
            Fortalecemos equipos para el crecimiento agrícola y agroindustrial.
          </p>
        </div>
      </div>
      <div class="content-image">
        <img src="img/Ellipse 24.png" alt="" style="position: absolute;" class="shape1">
        <img src="img/Ellipse 21.png" alt="" style="position: absolute;" class="shape2">
      </div>
    </div>
  </section>
  <!--Fin de Industrias -->
  <!-- Empleo -->
  <section id="empleo" class="container-empleo">
    <div class="row">
      <h2>Buscar empleo</h2>
    </div>
    <div class="col-empleo">
      <div class="info">
        <h3>Explora nuevas oportunidades profesionales</h3>
        <p>
          En Target HR, creemos en el poder del talento. Nuestro portal de empleo te ofrece la oportunidad de encontrar
          el
          trabajo ideal que se alinee con tus habilidades, experiencia y aspiraciones. Únete a nuestra comunidad de
          profesionales y descubre un mundo de posibilidades para tu carrera.
        </p>
        <form action="#" onsubmit="return false;">
          <button id="btn-abrir-modalcv">Subir CV</button>
        </form>
      </div>
      <div class="job-list">
        <h3>Empleos</h3>
        <a href="#" class="job-card">
          <p style="text-align: left;"><strong>Nombre del puesto</strong></p>
          <p style="text-align: right;">Fecha de publicación</p>
          <p style="text-align: left;">Empresa - Ubicación</p>
        </a>
        <a href="#" class="job-card">
          <p style="text-align: left;"><strong>Nombre del puesto</strong></p>
          <p style="text-align: right;">Fecha de publicación</p>
          <p style="text-align: left;">Empresa - Ubicación</p>
        </a>
        <a href="#" class="job-card">
          <p style="text-align: left;"><strong>Nombre del puesto</strong></p>
          <p style="text-align: right;">Fecha de publicación</p>
          <p style="text-align: left;">Empresa - Ubicación</p>
        </a>
        <a href="#" class="explore-btn">Explorar más empleos <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="content-image">
        <img src="img/Ellipse3.png" alt="" style="position: absolute;" class="shape3">
      </div>
      <div class="job-list2">
        <h3>Empleos</h3>
        <a href="#" class="job-card2">
          <p><strong>Nombre del puesto</strong></p>
          <p>Empresa - Ubicación</p>
          <p>Fecha de publicaciónn</p>
        </a>
        <a href="#" class="job-card2">
          <p><strong>Nombre del puesto</strong></p>
          <p>Empresa - Ubicación</p>
          <p>Fecha de publicaciónn</p>
        </a>
        <a href="#" class="job-card2">
          <p><strong>Nombre del puesto</strong></p>
          <p>Empresa - Ubicación</p>
          <p>Fecha de publicaciónn</p>
        </a>
        <a href="#" class="explore-btn">Explorar más empleos <i class="fas fa-arrow-right"></i></a>
  </section>
  <!-- Fin de Empleo -->
  <!-- Contanto -->
  <section id="contacto" class="container-form">
    <div class="contactanos">
      <div class="info-form">
        <h2>¡Contáctanos hoy mismo!</h2>
        <p>
          Estamos aquí para ayudarte en cada paso del camino. Si tienes alguna pregunta, comentario o simplemente
          quieres
          saber más sobre nuestros servicios, no dudes en ponerte en contacto con nosotros. Nuestro equipo de expertos
          está listo para atenderte y brindarte la mejor solución para tus necesidades de reclutamiento y selección de
          personal.
        </p>
        <a href="tel:994037392"> <i class="fa fa-phone">
          </i>994 037 392</a>
        <a> <i class="fa fa-envelope">
          </i>plataforma@targethr.com.pe / plataforma@thr.com.pe</a>
        <a
          href="https://www.google.com.pe/maps/place/Av.+Circunvalaci%C3%B3n+del+Golf+los+Incas+206,+Santiago+de+Surco+15023/@-12.0777695,-76.9588513,17z/data=!4m16!1m9!3m8!1s0x9105c6fea1c24223:0x5227f0ef13ab3c44!2sAv.+Circunvalaci%C3%B3n+del+Golf+los+Incas+206,+Santiago+de+Surco+15023!3b1!8m2!3d-12.0778496!4d-76.958809!10e5!16s%2Fg%2F11fn4l344z!3m5!1s0x9105c6fea1c24223:0x5227f0ef13ab3c44!8m2!3d-12.0778496!4d-76.958809!16s%2Fg%2F11fn4l344z?hl=es-419&entry=ttu&g_ep=EgoyMDI0MTEwNS4wIKXMDSoASAFQAw%3D%3D">
          <i class="fa fa-map-marker-alt">
          </i>Av. Circunvalación del Golf los Incas 206, Lima, PE</a>
      </div>
      <div class="contact-form">
        <h2>Contáctanos</h2>
        <p>
          Completa el formulario y nos pondremos en contacto contigo lo más pronto posible
        </p>
        <form action="https://formsubmit.co/plataforma@targethr.com.pe" method="POST">
          <p class="block">
            <label for="name">Nombre completo</label>
            <input type="text" name="Nombre" required>
          </p>
          <p>
            <label for="email">Email</label>
            <input type="email" name="email" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
          </p>
          <p>
            <label for="phone">Número de celular</label>
            <input type="tel" name="Celular" id="phone" required pattern="[0-9]+">
          </p>
          <p class="block">
            <label for="message">Mensaje</label>
            <textarea name="Mensaje" id="message" cols="30" rows="5"></textarea>
          </p>
          <p class="block">
            <input type="checkbox" id="terms" name="Acepto los términos y condiciones" required>
            <label for="terms">He leído y acepto las condiciones de privacidad y tratamiento de mis datos
              personales</label>
          </p>
          <p class="block">
            <button type="submit">
              Enviar
            </button>
          </p>
          <p class="block">
            <input type="hidden" name="_next" value="https://te.tingosac.com">
            <input type="hidden" name="_captcha" value="false">
          </p>
        </form>
        <div class="content-image">
          <img src="img/Ellipse7.png" alt="" style="position: absolute;" class="shape3">
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de Contanto -->
  <!-- Modal Contacto -->
  <dialog id="modal">
    <div class="modal-content">
      <span class="close" id="btn-cerrar-modal">&times;</span>
      <h2>Contáctanos</h2>
      <p>
        Completa el formulario y nos pondremos en contacto contigo lo más pronto posible
      </p>
      <form action="https://formsubmit.co/plataforma@targethr.com.pe" method="POST">
        <p class="block">
          <label for="name">Nombre completo</label>
          <input type="text" name="Nombre" required>
        </p>
        <p>
          <label for="email">Email</label>
          <input type="email" name="Email" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
        </p>
        <p>
          <label for="phone">Número de celular</label>
          <input type="tel" name="Celular" id="phone" required pattern="[0-9]+">
        </p>
        <p class="block">
          <label for="message">Mensaje</label>
          <textarea name="Mensaje" id="message" cols="10" rows="5"></textarea>
        </p>
        <p class="block">
          <input type="checkbox" id="terms" name="Acepto los términos y condiciones" required>
          <label for="terms">He leído y acepto las condiciones de privacidad y tratamiento de mis datos
            personales</label>
        </p>
        <p class="block">
          <button type="submit">
            Enviar
          </button>
        </p>
        <p>
          <input type="hidden" name="_next" value="https://te.tingosac.com">
          <input type="hidden" name="_captcha" value="false">
        </p>
      </form>
    </div>
  </dialog>
  <!-- Fin de Modal Contacto -->
  <!-- Modal call action -->
  <dialog id="modale">
    <div class="modale-content">
      <span class="close" id="btn-cerrar-modale">&times;</span>
      <h2>Contáctanos</h2>
      <p>
        Completa el formulario y nos pondremos en contacto contigo lo más pronto posible
      </p>
      <form action="https://formsubmit.co/plataforma@targethr.com.pe" method="POST">
        <p class="block">
          <label for="name">Nombre completo</label>
          <input type="text" name="Nombre" required>
        </p>
        <p>
          <label for="email">Email</label>
          <input type="email" name="email" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
        </p>
        <p>
          <label for="phone">Número de celular</label>
          <input type="tel" name="phone" id="Celular" required pattern="[0-9]+">
        </p>
        <p class="block">
          <label for="message">Mensaje</label>
          <textarea name="Mensaje" id="message" cols="10" rows="5"></textarea>
        </p>
        <p class="block">
          <input type="checkbox" id="terms" name="Acepto los términos y condiciones" required>
          <label for="terms">He leído y acepto las condiciones de privacidad y tratamiento de mis datos
            personales</label>
        </p>
        <p class="block">
          <button type="submit">
            Enviar
          </button>
        </p>
        <p class="block">
          <input type="hidden" name="_next" value="https://te.tingosac.com">
          <input type="hidden" name="_captcha" value="false">
        </p>
      </form>
    </div>
  </dialog>
  <!--Fin de Modal call action -->
  <!-- Modal Subir CV -->
  <dialog id="modalcv">
    <div class="modalcv-content">
      <div class="close">
        <img src="img/Frame4197.png" id="btn-cerrar-modalcv">
      </div>
      <form id="uploadForm" class="dropzone-box" enctype="multipart/form-data" method="POST" action="send_mail.php">
        <div class="dropzone-area">
          <div class="icon-wrapper">
            <img src="img/Vector.png" alt="1">
          </div>
          <h2>Sube tu CV aquí</h2>
          <p>Admitimos archivos PDF o Word de hasta 100 MB</p>
          <div class="file-upload-icon"></div>
          <input type="file" name="uploaded-file" id="input-file" accept=".pdf,.doc,.docx" required>
        </div>
        <div id="preview"></div>
      </form>
    </div>
  </dialog>
  <!-- Fin Modal Subir CV -->
  <!-- Modal Subir CV responsive -->
  <dialog id="modalcv2">
    <div class="modalcv-content">
      <div class="close">
        <img src="img/Frame4197.png" id="btn-cerrar-modalcv2">
      </div>
      <form id="uploadForm" class="dropzone-box" enctype="multipart/form-data" method="POST" action="send_mail.php">
        <div class="dropzone-area">
          <div class="icon-wrapper">
            <img src="img/Vector.png" alt="1">
          </div>
          <h2>Sube tu CV aquí</h2>
          <p>Admitimos archivos PDF o Word de hasta 100 MB</p>
          <div class="file-upload-icon"></div>
          <input type="file" name="uploaded-file" id="input-file" accept=".pdf,.doc,.docx" required>
        </div>
        <div id="preview"></div>
      </form>
    </div>
  </dialog>
  <!-- Final Modal Subir CV responsive -->
  <!-- Modal Dropdown -->
  <dialog id="modal_dropdown">
    <div class="dropdown-content">
      <div class="close">
        <img src="img/close.png" id="btn-cerrar-dropdown">
      </div>
      <ul class="dropdown" id="menu-dropdown">
        <li class="dropdown_list">
          <a id="block" href="#hero-section" class="dropdown_link">
            <span class="dropdown__span">Inicio</span>
          </a>
        </li>
        <hr class="separator">
        <li class="dropdown_list">
          <a href="#servicios" class="dropdown_link" data-bs-toggle="collapse">
            <span class="dropdown__span">Servicios</span>
            <img src="./img/expand_more.png" class="dropdown__arrow">
            <input type="checkbox" class="dropdown__check">
          </a>
          <div class="dropdown__content">
            <ul class="dropdown-sub">
              <li class="dropdown__li">
                <a id="block" href="#servicios" class="dropdown__anchor">Outsourcing</a>
              </li>
              <li class="dropdown__li">
                <a id="block" href="#servicios" class="dropdown__anchor">Selección</a>
              </li>
              <li class="dropdown__li">
                <a id="block" href="#servicios" class="dropdown__anchor">Desarrollo HUmano</a>
              </li>
              <li class="dropdown__li">
                <a id="block" href="#servicios" class="dropdown__anchor">Payroll</a>
              </li>
              <li class="dropdown__li">
                <a id="block" href="#servicios" class="dropdown__anchor">Head Hunting</a>
              </li>
              <li class="dropdown__li">
                <a id="block" href="#servicios" class="dropdown__anchor">Outplacement & Coaching</a>
              </li>
            </ul>
          </div>
        </li>
        <hr class="separator">
        <li class="dropdown_list">
          <a id="block" href="#nosotros" class="dropdown_link" id="btn-cerrar-dropdown">
            <span class="dropdown__span">Nosotros</span>
          </a>
        </li>
        <hr class="separator">
        <li class="dropdown_list">
          <a id="block" href="#industrias" class="dropdown_link">
            <span class="dropdown__span">Industrias</span>
          </a>
        </li>
        <hr class="separator">
        <li class="dropdown_list">
          <a href="#" class="dropdown_link">
            <span class="dropdown__span">Empleo</span>
            <img src="./img/expand_more.png" class="dropdown__arrow">
            <input type="checkbox" class="dropdown__check">
          </a>
          <div class="dropdown__content">
            <ul class="dropdown-sub">
              <li class="dropdown__li">
                <a action="#" id="btn-abrir-modalcv2" class="dropdown__anchor">Subir CV</a>
              </li>
              <li class="dropdown__li">
                <a id="block" href="#empleo" class="dropdown__anchor">Ver empleos</a>
              </li>
            </ul>
          </div>
        </li>
        <hr class="separator">
      </ul>
      <form action="#">
        <button class="btn_drop" id="btn-abrir-modal-mob">Contacto</button>
      </form>
    </div>
    </div>
  </dialog>
  <img src="img/shape_comta.png" alt="" style="position: absolute;" class="shape_cont">
  <img src="img/shape_cont.png" alt="" style="position: absolute;" class="shape_conta">
  <!-- Fin Modal Dropdown -->
  <!-- Footer -->
  <footer class="footer">
    <div class="container-footer">
      <div class="footer-row">
        <div class="footer-logo">
          <a href="index.php" class="logo">
            <img src="img/logo_blanco.png" alt="logo de la compañia">
          </a>
          <div class="social-icons">
            <a href="https://www.facebook.com/targethrperu" title="Facebook" target="_blank"><i
                class="fab fa-facebook-square"></i></a>
            <a href="https://www.linkedin.com/company/thrperu/mycompany/"><i class="fab fa-linkedin"></i></a>
            <a href="https://wa.me/+51994037392?text=Hola"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="footer-text">
          <h3>Horario de atención:<br>Lunes - Viernes<br>9am - 6pm</h3>
        </div>
        <div class="footer-links">
          <h3>Servicios</h3>
          <ul>
            <li><a class="foo" href="#servicios">Outsourcing</a></li>
            <li><a class="foo" href="#servicios">Payroll</a></li>
            <li><a class="foo" href="#servicios">Selección</a></li>
            <li><a class="foo" href="#servicios">Head Hunting</a></li>
            <li><a class="foo" href="#servicios">Desarrollo Humano</a></li>
            <li><a class="foo" href="#servicios">Outplacement & Coaching</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="#nosotros"><strong>Nosotros</strong></a></li>
            <li><a href="#industrias"><strong>Industrias</strong></a></li>
            <li><a href="#empleo"><strong>Buscar Empleos</strong></a></li>
            <li><a href="#contacto"><strong>Contacto</strong></a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h3>Legales</h3>
          <ul>
            <li><a class="foo">Políticas de privacidad</a></li>
            <li><a class="foo">Términos y condiciones</a></li>
            <li><a><strong>Libro de reclamaciones</strong></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Fin de Footer -->
  <!-- Footer responsive -->
  <footer class="footer2">
    <div class="container-footer2">
      <div class="footer-row2">
        <div class="footer-logo2">
          <a href="index.php" class="logo">
            <img src="img/logo_blanco.png" alt="logo de la compañia">
          </a>
          <div class="social-icons2">
            <a href="https://www.facebook.com/targethrperu"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.linkedin.com/company/thrperu/mycompany/"><i class="fab fa-linkedin"></i></a>
            <a href="https://wa.me/+51994037392?text=Hola"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="footer-text2">
          <h3>Horario de atención:<br>Lunes - Viernes<br>9am - 6pm</h3>
        </div>
        <div class="footer-links2">
          <h3>Servicios</h3>
          <ul>
            <li><a class="foo2" href="#servicios">Outsourcing</a></li>
            <li><a class="foo2" href="#servicios">Payroll</a></li>
            <li><a class="foo2" href="#servicios">Selección</a></li>
            <li><a class="foo2" href="#servicios">Head Hunting</a></li>
            <li><a class="foo2" href="#servicios">Desarrollo Humano</a></li>
            <li><a class="foo2" href="#servicios">Outplacement & Coaching</a></li>
          </ul>
        </div>
        <div class="footer-links3">
          <ul>
            <li><a href="#nosotros"><strong>Nosotros</strong></a></li>
            <li><a href="#industrias"><strong>Industrias</strong></a></li>
            <li><a href="#empleo"><strong>Buscar Empleos</strong></a></li>
            <li><a href="#contacto"><strong>Contacto</strong></a></li>
          </ul>
        </div>
        <div class="footer-links4">
          <h3>Legales</h3>
          <ul>
            <li><a class="foo2" href="#">Políticas de privacidad</a></li>
            <li><a class="foo2" href="#">Términos y condiciones</a></li>
            <li><a href="#"><strong>Libro de reclamaciones</strong></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Fin de Footer responsive -->
  <!-- Botón whatsapp -->
  <a href="https://wa.me/+51994037392?text=Buenas, me gustaría tener mayor información sobre sus servicios"
    class="float-wa" target="_blank">
    <img src="img/Component37.png" style="margin-top:16px;"></i>
  </a>
  <!-- Fin Botón whatsapp -->
  <script src="js/script.js"></script>
  <script src="js/script2.js"></script>
  <script src="js/script_mobile.js"></script>
  <script src="js/input-file.js"></script>
  <script type='text/javascript'>
    document.oncontextmenu = function () { return false } 
  </script>
</body>
</html>