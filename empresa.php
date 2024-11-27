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
        <a href="index.php" class="logo">
            <img src="img/logo.svg" alt="logo de la compañia">
            </div>
            <div class="navbar">
                <nav>
                    <a href="index.php" class="nav-link underline-hover">Inicio</a>
                    <a href="index.php#servicios" class="nav-link underline-hover">Servicios</a>
                    <a href="index.php#nosotros" class="nav-link underline-hover">Nosotros</a>
                    <a href="index.php#industrias" class="nav-link underline-hover">Industrias</a>
                    <a href="index.php#empleo" class="nav-link underline-hover">Empleo</a>
                    <a class="cta" id="btn-abrir-modal" action="#" onsubmit="return false;">Contacto</a>
                </nav>
            </div>
            <div class="hamburger" id="hamburger">
                <a action="#" class="nav_menu" onsubmit="return false;">
                    <img src="./img/menu.svg" class="nav_icon" id="btn-abrir-dropdown">
                </a>
            </div>
    </header>
    <!-- Fin de Cabecera -->
    <!-- Hero -->
    <section id="hero-empresa"></div>
    </section>
    <!-- Fin de Hero -->
    <!-- Hero Mobile -->
    <section id="hero-empresa-mob">
        <div class="cont_empresa_mob">
            <img src="img/heading_mob.png" alt="">
        </div>
    </section>
    <!-- Fin de Hero Mobile -->
    <!-- Nosotros -->
    <section id="ab_emp" class="cont-emp">
        <div class="col-emp">
            <div class="info">
                <h3>¿Por qué debes trabajar con nosotros?</h3>
                <hr class="separator">
                <p>
                    Nuestra pasión por el reclutamiento estratégico y el desarrollo profesional garantiza resultados
                    excepcionales para tu empresa. Con un enfoque personalizado y una amplia gama de servicios, estamos
                    comprometidos a encontrar y desarrollar el talento que tu empresa necesita para prosperar.
                </p>
            </div>
            <div class="hero_img">
                <img src="img/img_emp.jpg" alt="" tyle="position: absolute;" class="main_img">
            </div>
        </div>
    </section>
    <!-- Fin de Nosotros -->
    <!-- Servicios -->
    <section id="servicios_emp">
        <div class="row">
            <h2 class="section-heading">Servicios</h2>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <img src="img/eval.png" alt="1">
                    </div>
                    <h3>Talent Hunting</h3>
                    <p>
                        Identificamos y reclutamos a los mejores candidatos que se adaptan a tu cultura y necesidades.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <img src="img/seleccion.png" alt="1">
                    </div>
                    <h3>Evaluación de Talento</h3>
                    <p>
                        Evaluamos las habilidades y competencias de tus empleados para impulsar su desarrollo.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <img src="img/outplacement.png" alt="1">
                    </div>
                    <h3>Outplacement</h3>
                    <p>
                        Apoyamos a tus empleados en transición con programas de recolocación efectivos.
                    </p>
                </div>
            </div>
            <div class="content-image">
                <img src="img/Ellipse 25.png" alt="" style="position: absolute;" class="shape1">
                <img src="img/Ellipse1.png" alt="" style="position: absolute;" class="shape2">
                <img src="img/25.png" alt="" style="position: absolute;" class="shape3">
            </div>
        </div>
    </section>
    <img src="img/emp_call.png" alt="" style="position: absolute;" class="shape_emp_call">
    <!--Fin de Servicios -->
    <!-- call action -->
    <section id="call_emp">
        <h3>¡Descubre cómo podemos llevar tu empresa al siguiente nivel hoy mismo!</h3>
        <form action="#" onsubmit="return false;">
            <button class="btn" id="btn-abrir-modale">Contáctanos</button>
        </form>
    </section>
    <!-- Fin de call action -->
    <!-- Modal header -->
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
                    <input type="email" name="email" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
                </p>
                <p>
                    <label for="phone">Número de celular</label>
                    <input type="tel" name="Celular" id="Celular" required pattern="[0-9]+">
                </p>
                <p class="block">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message" cols="10" rows="5"></textarea>
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
    <!-- Fin de Modal header -->
    <!-- Modal Subir CV -->
    <dialog id="modalcv3">
        <div class="modalcv-content">
            <div class="close">
                <img src="img/Frame4197.png" id="btn-cerrar-modalcv3">
            </div>
            <form action="send_mail.php" method="POST" enctype="multipart/form-data" id="uploadForm"
                class="dropzone-box">
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
    <!-- Fin de Modal Subir CV -->
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
                    <input type="tel" name="Celular" id="Celular" required pattern="[0-9]+">
                </p>
                <p class="block">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message" cols="10" rows="5"></textarea>
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
    <!-- Fin de Modal call action -->
    <!-- Modal Dropdown -->
    <dialog id="modal_dropdown">
        <div class="dropdown-content">
            <div class="close">
                <img src="img/close.png" id="btn-cerrar-dropdown">
            </div>
            <ul class="dropdown" id="menu-dropdown">
                <li class="dropdown_list">
                    <a href="index.php" class="dropdown_link">
                        <span class="dropdown__span">Inicio</span>
                    </a>
                </li>
                <hr class="separator">
                <li class="dropdown_list">
                    <a href="index.php" class="dropdown_link">
                        <span class="dropdown__span">Servicios</span>
                        <img src="./img/expand_more.png" class="dropdown__arrow">
                        <input type="checkbox" class="dropdown__check">
                    </a>
                    <div class="dropdown__content">
                        <ul class="dropdown-sub">
                            <li class="dropdown__li">
                                <a href="index.php#servicios" class="dropdown__anchor">Outsourcing</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="index.php#servicios" class="dropdown__anchor">Selección</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="index.php#servicios" class="dropdown__anchor">Desarrollo HUmano</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="index.php#servicios" class="dropdown__anchor">Payroll</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="index.php#servicios" class="dropdown__anchor">Head Hunting</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="index.php#servicios" class="dropdown__anchor">Outplacement & Coaching</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr class="separator">
                <li class="dropdown_list">
                    <a href="index.php#nosotros" class="dropdown_link">
                        <span class="dropdown__span">Nosotros</span>
                    </a>
                </li>
                <hr class="separator">
                <li class="dropdown_list">
                    <a href="index.php#industrias" class="dropdown_link">
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
                                <a action="#" id="btn-abrir-modalcv3" class="dropdown__anchor"
                                    onsubmit="return false">Subir CV</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="index.php#empleos" class="dropdown__anchor">Ver empleos</a>
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
    <!-- Fin de Modal Dropdown -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container-footer">
            <div class="footer-row">
                <div class="footer-logo">
                    <a href="#" class="logo">
                        <img src="img/logo_blanco.png" alt="logo de la compañia">
                    </a>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/targethrperu" title="Facebook" target="_blank"><i class="fab fa-facebook-square"></i></a>
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
                        <li><a class="foo" href="index.php#servicios">Outsourcing</a></li>
                        <li><a class="foo" href="index.php#servicios">Payroll</a></li>
                        <li><a class="foo" href="index.php#servicios">Selección</a></li>
                        <li><a class="foo" href="index.php#servicios">Head Hunting</a></li>
                        <li><a class="foo" href="index.php#servicios">Desarrollo Humano</a></li>
                        <li><a class="foo" href="index.php#servicios">Outplacement & Coaching</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="index.php#nosotros"><strong>Nosotros</strong></a></li>
                        <li><a href="index.php#industrias"><strong>Industrias</strong></a></li>
                        <li><a href="index.php#empleo"><strong>Buscar Empleos</strong></a></li>
                        <li><a href="index.php#contacto"><strong>Contacto</strong></a></li>
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
    <!-- Footer Responsive -->
    <footer class="footer2">
        <div class="container-footer2">
            <div class="footer-row2">
                <div class="footer-logo2">
                    <a href="#" class="logo">
                        <img src="img/logo_blanco.png" alt="logo de la compañia">
                    </a>
                    <div class="social-icons2">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-text2">
                    <h3>Horario de atención:<br>Lunes - Viernes<br>9am - 6pm</h3>
                </div>
                <div class="footer-links2">
                    <h3>Servicios</h3>
                    <ul>
                        <li><a class="foo2" href="index.php#servicios">Outsourcing</a></li>
                        <li><a class="foo2" href="index.php#servicios">Payroll</a></li>
                        <li><a class="foo2" href="index.php#servicios">Selección</a></li>
                        <li><a class="foo2" href="index.php#servicios">Head Hunting</a></li>
                        <li><a class="foo2" href="index.php#servicios">Desarrollo Humano</a></li>
                        <li><a class="foo2" href="index.php#servicios">Outplacement & Coaching</a></li>
                    </ul>
                </div>
                <div class="footer-links3">
                    <ul>
                        <li><a href="index.php#nosotros"><strong>Nosotros</strong></a></li>
                        <li><a href="index.php#industrias"><strong>Industrias</strong></a></li>
                        <li><a href="index.php#empleo"><strong>Buscar Empleos</strong></a></li>
                        <li><a href="index.php#contacto"><strong>Contacto</strong></a></li>
                    </ul>
                </div>
                <div class="footer-links4">
                    <h3>Legales</h3>
                    <ul>
                        <li><a class="foo2">Políticas de privacidad</a></li>
                        <li><a class="foo2">Términos y condiciones</a></li>
                        <li><a><strong>Libro de reclamaciones</strong></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fin de Footer Responsive -->
    <!-- Whatsapp -->
    <a href="https://wa.me/+51994037392?text=Buenas, me gustaría tener mayor información sobre sus servicios" class="float-wa" target="_blank">
        <img src="img/Component37.png" style="margin-top:16px;"></i>
    </a>
    <!-- Fin de Whatsapp -->
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/script_mobile.js"></script>
    <script src="js/script_emp.js"></script>
    <script src="js/input-file.js"></script>
    <script type='text/javascript'>
        document.oncontextmenu = function () { return false } 
    </script>
</body>
</html>