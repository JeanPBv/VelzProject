<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PetWellness</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets/img/logos/pet-logo.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('petwellness') }}" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logos/pet-logo.png" alt="PetWellness Logo" class="logo-img">
        <h1 class="sitename">PetWellness</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#inicio" class="active">Inicio</a></li>
          <li><a href="#general">General</a></li>
          <li><a href="#alimentacion">Alimentación</a></li>
          <li><a href="#higiene">Higiene</a></li>
          <li><a href="#salud">Salud</a></li>
          <li><a href="#adopcion">Adopción</a></li>
          <li><a target="_blank" href="https://www.elconfidencial.com/alma-corazon-vida/2024-03-09/guia-tutores-padres-primerizos-mascotas_3845147/">¿Primerizo?</a></li>
          <li class="dropdown"><a href="#"><span>Extras</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#noticias">Noticias</a></li>
              <li><a href="#preguntas">P. Frecuentes</a></li>
              <li><a href="#testimonios">Testimonios</a></li>
              <li><a href="#emergencias">Emergencias</a></li>
              <li class="dropdown"><a href="#"><span>Más</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#nosotros">Sobre Nosotros</a></li>
                  <li><a href="#equipo">Team</a></li>
                  <li><a href="#contacto">Contáctanos</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Sección de Inicio -->
    <section id="inicio" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Porque tus mascotas merecen lo mejor</h1>
            <p>Transformando el cuidado de las mascotas, un paso a la vez hasta lograr el objetivo.</p>
            <div class="d-flex">
              <a href="#general" class="btn-get-started">Empezar</a>
              <a href="https://www.youtube.com/watch?v=wnjS5zbb43Y" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Mirar Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/foto-principal.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients-ong/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients-ong/9.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section>

    <!-- Sección de Aspectos Generales -->
    <section id="general" class="section why-us" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Aspectos generales</span><strong> que deberías tener en cuenta</strong></h3>
              <p class="justified-text">
                Conocer bien a las mascotas es fundamental para proporcionarles el mejor cuidado posible. A continuación, te presentamos aspectos clave sobre los tipos de mascotas, sus cuidados básicos y sus características para ayudarte a tomar decisiones informadas.
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item">

                <h3><span>01</span> ¿Qué tipos de mascotas son las más comunes en el hogar?</h3>
                <div class="faq-content">
                  <p class="justified-text">Existen diversas especies de mascotas, cada una con sus propias necesidades y características. Entre las más comunes se encuentran los perros, gatos, peces, aves y roedores. Los perros son conocidos por su lealtad y energía, mientras que los gatos son más independientes y requieren menos espacio. Los peces y aves pueden ser ideales para hogares con menos espacio, y los roedores, como hamsters y conejos, son perfectos para quienes buscan una mascota pequeña. Conoce más sobre las características y necesidades de cada tipo de mascota en 
                    <a href="https://concepto.de/animales-domesticos/" target="_blank">PetSmart</a>.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>02</span> ¿Cuáles son los cuidados básicos que requiere cada tipo de mascota?</h3>
                <div class="faq-content">
                  <p class="justified-text">El cuidado adecuado de una mascota depende de su tipo. Los perros y gatos necesitan una dieta balanceada, ejercicio regular, y visitas periódicas al veterinario. Los peces requieren un acuario limpio y agua adecuada a su especie, mientras que las aves necesitan una jaula adecuada y una dieta variada. Los roedores deben tener una jaula espaciosa y material para roer. Cada tipo de mascota tiene necesidades específicas que debes conocer para asegurar su bienestar. Consulta guías completas sobre cuidados básicos en 
                    <a href="https://www.petys.com/blog-de-expertos/cuidados-basicos-de-las-mascotas" target="_blank">Pety's</a>.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>03</span> ¿Qué características debes considerar al elegir una mascota?</h3>
                <div class="faq-content">
                  <p class="justified-text">Al elegir una mascota, es fundamental considerar sus características específicas. Los perros varían en tamaño, temperamento y nivel de actividad, lo que puede influir en su adaptación a tu hogar. Los gatos tienen diferentes personalidades y requerimientos de cuidado. Los peces y aves tienen necesidades particulares en cuanto a ambiente y alimentación. Es esencial investigar y entender las características y necesidades de la mascota que estás considerando para asegurarte de que se adapte bien a tu estilo de vida. Encuentra más información detallada sobre la elección de mascotas en 
                    <a href="https://www.significados.com/animales-domesticos-que-son-ejemplos-y-caracteristicas/" target="_blank">Pet Enciclopedia</a>.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section>

    <!-- Sección de Alimentacion-->
    <section id="alimentacion" class="call-to-action section dark-background">

      <img src="assets/img/fondo-alimenticio.jpg"" alt="">

      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Alimentación para Perros</h3>
            <p class="justified-text">Los perros necesitan una dieta equilibrada que incluya proteínas, grasas, carbohidratos, vitaminas y minerales. Es importante elegir un alimento de calidad y evitar darles comida humana que pueda ser tóxica para ellos, como el chocolate o las uvas.</p>
          </div>
          <div class="col-xl-3 d-flex justify-content-center align-items-center">
            <a target="_blank" class="cta-btn align-middle" href="https://www.dogalia.com/wp-content/uploads/paginas_alimenta-mejor-a-tu-mejor-amigo-rick-woodford.pdf">Guía Alimenticia</a>
          </div>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Alimentación para Gatos</h3>
            <p class="justified-text">Los gatos son carnívoros estrictos, por lo que su dieta debe estar compuesta principalmente de proteínas animales. Elige alimentos de alta calidad que contengan taurina, un aminoácido esencial para su salud. Evita darles alimentos que contengan cebolla, ajo o chocolate.</p>
          </div>
          <div class="col-xl-3 d-flex justify-content-center align-items-center">
            <a target="_blank" class="cta-btn align-middle" href="https://vetpoblenou.com/blog/wp-content/uploads/2017/04/La-alimentaci%C3%B3n-de-su-gato-o-gatito.pdf">Guía Alimenticia</a>
          </div>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Alimentación para Hámsters</h3>
            <p class="justified-text"> Los hámsters necesitan una dieta basada en semillas, granos, frutas y vegetales. Es importante proporcionarles alimentos frescos y variados para garantizar que reciban todos los nutrientes que necesitan. Evita darles alimentos cítricos o procesados.</p>
          </div>
          <div class="col-xl-3 d-flex justify-content-center align-items-center">
            <a target="_blank" class="cta-btn align-middle" href="https://www.laanunciataikerketa.com/trabajos/hamsters/ali.pdf">Guía Alimenticia</a>
          </div>
        </div>
      </div>

    </section>

    <!-- Sección Higiene -->
    <section id="higiene" class="team section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Higiene para las mascotas</h2>
        <p>Guías de higiene para mantener a tu mascota limpia y saludable.</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/mascotas/perro.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info text-center mx-auto">
                <h4>Cuidados básicos para Perros</h4>
                <span>Limpieza, Cuidados e Higiene</span>
                <p>Mantén a tu perro limpio, saludable y feliz con nuestras recomendaciones de higiene.</p>
                <div class="social2">
                  <a target="_blank" href="https://lajungladetimo.com/wp-content/uploads/2021/06/PERRO.pdf"><i class="bi bi-file-earmark-pdf"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/mascotas/gato.png" class="img-fluid" alt=""></div>
              <div class="member-info text-center mx-auto">
                <h4>Cuidados básicos para Gatos</h4>
                <span>Limpieza, Cuidados e Higiene</span>
                <p>Consejos y prácticas para mantener la higiene óptima de tu gato.</p>
                <div class="social2">
                  <a target="_blank" href="https://lajungladetimo.com/wp-content/uploads/2021/06/GATO.pdf"><i class="bi bi-file-earmark-pdf"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/mascotas/hamster.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info text-center mx-auto">
                <h4>Cuidados básicos para Hámsters</h4>
                <span>Limpieza, Cuidados e Higiene</span>
                <p>Todo lo que necesitas saber para mantener a tu hámster limpio y saludable.</p>
                <div class="social2">
                  <a target="_blank" href="https://lajungladetimo.com/wp-content/uploads/2021/06/HAMSTER.pdf"><i class="bi bi-file-earmark-pdf"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/mascotas/canario.jpg" class="img-fluid" alt=""></div>
              <div class="member-info text-center mx-auto">
                <h4>Cuidados básicos para Canarios</h4>
                <span>Limpieza, Cuidados e Higiene</span>
                <p>Mantén a tu canario en las mejores condiciones de higiene.</p>
                <div class="social2">
                  <a target="_blank" href="https://lajungladetimo.com/wp-content/uploads/2021/06/CANARIO.pdf"><i class="bi bi-file-earmark-pdf"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- Sección de Salud-->
    <section id="salud" class="skills section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="assets/img/salud-mascota.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Vacunas y Tratamientos Esenciales para la Salud de tu Mascota</h3>
            <p class="fst-italic justified-text">
              Mantener al día el calendario de vacunas y tratamientos de tu mascota es crucial para prevenir enfermedades graves y mantener su bienestar.
            </p>

            <div class="skills-content skills-animation">

              <div class="progress">
                <span class="skill"><span>Vacunas Esenciales</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Desparasitación</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Tratamientos Preventivos</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Chequeos Regulares</span> <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>

          </div>
        </div>

      </div>

    </section>

    <!-- Sección de Adopción -->
    <section id="adopcion" class="services section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Adopción</h2>
        <p>Guía completa para adoptar una mascota: cómo hacerlo, dónde encontrar tu futuro amigo, y qué preparativos necesitas hacer.</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hand-thumbs-up icon"></i></div>
              <h4><a target="_blank" href="https://www.mapfre.es/particulares/seguros-animales/articulos/como-adoptar-una-mascota/" class="stretched-link">¿Cómo Adoptar?</a></h4>
              <p class="justified-text">Aprende el proceso paso a paso para adoptar una mascota, desde la solicitud hasta la integración en tu hogar.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-house-door icon"></i></div>
              <h4><a target="_blank" href="https://www.wuf.pe/adopta" class="stretched-link">¿Dónde Adoptar?</a></h4>
              <p class="justified-text">Encuentra refugios, centros de adopción y organizaciones locales donde puedes encontrar tu nueva mascota.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-check-circle icon"></i></div>
              <h4><a target="_blank" href="https://purina.com.pe/purina/perros/mascotas-en-adopcion-beneficios-y-requisitos-para-adoptar-un-perro-o-gato" class="stretched-link">Requisitos</a></h4>
              <p class="justified-text">Descubre qué requisitos debes cumplir antes de adoptar, incluyendo documentación y condiciones del hogar.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-gear icon"></i></div>
              <h4><a target="_blank" href="https://www.elcorreo.com/de-tiendas/mascotas/primera-mascota-debes-saber-dar-bienvenida-nuevo-20240118180306-ntrc.html?ref=https%3A%2F%2Fwww.elcorreo.com%2Fde-tiendas%2Fmascotas%2Fprimera-mascota-debes-saber-dar-bienvenida-nuevo-20240118180306-ntrc.html" class="stretched-link">Preparativos</a></h4>
              <p class="justified-text">Prepárate para la llegada de tu nueva mascota con los elementos esenciales y ajustes en tu hogar.</p>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- Sección de Noticias -->
    <section id="noticias" class="pricing section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Noticias</h2>
        <p>Últimas actualizaciones y artículos sobre el cuidado de mascotas y más.</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Mascotas felinas, medicina y arte</h3>
              <p><i class="bi bi-calendar"></i> 12 de Junio 2019</p>
              <p><i class="bi bi-file-earmark-pdf"></i> Articulo</p>
              <p><i class="bi bi-database"></i> Scopus</p>
              <p class="text-center">
                <a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85062609202&origin=resultslist&sort=plf-f&src=s&sid=61e0698ae38a5f71085f921a1b79d6c5&sot=b&sdt=cl&cluster=scolang%2C%22Spanish%22%2Ct&s=TITLE%28mascotas%29&sl=15&sessionSearchId=61e0698ae38a5f71085f921a1b79d6c5&relpos=19" class="buy-btn">Leer más</a>
              </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item">
              <h3>Presencia de Bacterias en alimento balanceado</h3>
              <p><i class="bi bi-calendar"></i> 18 de Agosto 2022</p>
              <p><i class="bi bi-file-earmark-pdf"></i> Articulo</p>
              <p><i class="bi bi-database"></i> Scopus</p>
              <p class="text-center">
                <a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85172860367&origin=resultslist&sort=plf-f&src=s&sid=61e0698ae38a5f71085f921a1b79d6c5&sot=b&sdt=cl&cluster=scolang%2C%22Spanish%22%2Ct&s=TITLE%28mascotas%29&sl=15&sessionSearchId=61e0698ae38a5f71085f921a1b79d6c5&relpos=8" class="buy-btn">Leer más</a>
              </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Análisis del apego familiar al viajar con Mascotas</h3>
              <p><i class="bi bi-calendar"></i> 05 de Junio 2023</p>
              <p><i class="bi bi-file-earmark-pdf"></i> Articulo</p>
              <p><i class="bi bi-database"></i> Scopus</p>
              <p class="text-center">
                <a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85167460051&origin=resultslist&sort=plf-f&src=s&sid=61e0698ae38a5f71085f921a1b79d6c5&sot=b&sdt=b&s=TITLE%28mascotas%29&sl=15&sessionSearchId=61e0698ae38a5f71085f921a1b79d6c5&relpos=5" class="buy-btn">Leer más</a>
              </p>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- Sección Preguntas Frecuentes-->
    <section id="preguntas" class="faq-2 section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Preguntas Frecuentes</h2>
        <p>Encuentra respuestas a las preguntas más comunes sobre nuestros servicios. Si necesitas más información, no dudes en contactarnos.</p>
      </div>

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>¿Cuál es el objetivo de este proyecto de concientización?</h3>
                <div class="faq-content">
                  <p class="justified-text">El objetivo de nuestro proyecto es educar a los propietarios de mascotas sobre la importancia del cuidado adecuado de los animales domésticos. Queremos promover prácticas responsables y proporcionar información útil para asegurar el bienestar y la salud de las mascotas.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>¿Dónde puedo encontrar recursos adicionales sobre el cuidado de mascotas?</h3>
                <div class="faq-content">
                  <p class="justified-text">En nuestra web, encontrarás una sección dedicada a recursos educativos que incluye guías, artículos y consejos sobre el cuidado de diferentes tipos de mascotas. También puedes consultar nuestra sección de blogs y noticias para obtener las últimas actualizaciones y recomendaciones.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>¿Qué tipo de información ofrece esta web sobre el cuidado de mascotas?</h3>
                <div class="faq-content">
                  <p class="justified-text">Nuestra web proporciona una variedad de recursos educativos sobre el cuidado de mascotas, incluyendo guías prácticas, artículos informativos, consejos de expertos y recomendaciones para mantener a tus animales domésticos saludables y felices. También abordamos temas específicos como nutrición, ejercicio, cuidados veterinarios y prevención de enfermedades.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>¿Cómo puedo contactar con el equipo del proyecto?</h3>
                <div class="faq-content">
                  <p class="justified-text">Puedes ponerte en contacto con nuestro equipo a través del correo PetWellness@gmail.com, estamos disponibles para responder cualquier pregunta que puedas tener sobre el proyecto y el cuidado de mascotas.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>¿Cómo puedo saber si mi mascota necesita atención veterinaria especial?</h3>
                <div class="faq-content">
                  <p class="justified-text">Si notas cualquier cambio inusual en el comportamiento, el apetito o la apariencia de tu mascota, como pérdida de peso, cambios en el pelaje, o síntomas de enfermedad, es importante consultar a un veterinario. En nuestra web, ofrecemos consejos generales y señales de alerta que pueden indicar la necesidad de atención veterinaria, pero siempre es recomendable buscar la evaluación profesional de un veterinario para un diagnóstico preciso.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- Sección Testimonios -->
    <section id="testimonios" class="testimonials section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonios</h2>
        <p>Lo que dicen nuestros usuarios acerca de la plataforma de PetWellness</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Carlos Pérez</h3>
                <h4>Veterinario</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>PetWellness es una herramienta invaluable para los dueños de mascotas. Proporciona información clara y útil sobre el cuidado de nuestros amigos peludos. ¡Muy recomendado!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Alicia Fernández</h3>
                <h4>Adoptante de Mascotas</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Gracias a PetWellness, aprendí a cuidar de mi perro de una manera mucho más efectiva. Los consejos y recursos han sido de gran ayuda para mantener a mi mascota saludable y feliz.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Laura Gómez</h3>
                <h4>Entrenadora de Mascotas</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>PetWellness ofrece una plataforma excelente para educar a los dueños de mascotas. La información es precisa y accesible, y los recursos son invaluables para cualquier persona que quiera mejorar el bienestar de sus animales.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Jorge Luna</h3>
                <h4>Rescatista de Animales</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>PetWellness ha sido fundamental en mi trabajo con animales rescatados. La plataforma ofrece recursos valiosos que facilitan la adaptación y el cuidado de los animales en sus nuevos hogares.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Mario López</h3>
                <h4>Influencer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>La información y los consejos en PetWellness son de primera clase. Como influencer, aprecio el contenido bien investigado y útil que ayuda a mis lectores a mejorar la vida de sus mascotas.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>

    <!-- Sección Emergencias -->
    <section id="emergencias" class="about section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Emergencias</h2>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p class="justified-text">¿Sabes qué hacer si tu mascota sufre un accidente o una emergencia médica? Imagina que estás en el parque jugando con tu compañero y, de repente, pisa un cristal roto y comienza a sangrar. ¿Sabes cómo detener la hemorragia y mantenerlo calmado hasta que puedas llevarlo al veterinario? .....</p>
            <p class="text-center">
              <a target="_blank" href="https://animaliaformacion.com/guia-basica-primeros-auxilios-perros-gatos/" class="read-more"><span>Ir al Sitio Web</span><i class="bi bi-arrow-right"></i></a>
            </p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p class="justified-text">Todos los días, el Centro de Medicina Veterinaria recibe llamadas y correos electrónicos de dueños de mascotas, como usted, sobre muchos temas diferentes. Algunos temas serios incluyen qué hacer cuando una mascota se mete en cosas que no debería, qué hacer si una mascota recibe demasiada .....</p>
            <p class="text-center">
              <a target="_blank" href="https://www.fda.gov/animal-veterinary/animal-health-literacy/quien-debe-llamar-si-tiene-una-emergencia-con-su-mascota" class="read-more"><span>Ir al Sitio Web</span><i class="bi bi-arrow-right"></i></a>
            </p>
          </div>

        </div>

      </div>

    </section>

    <!-- Sección Sobre Nosotros -->
    <section id="nosotros" class="about section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Sobre Nosotros</h2>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="justified-text">
              En PetWellness, estamos comprometidos con la promoción del bienestar de las mascotas domésticas en Trujillo, Perú. Nuestra misión es educar a los dueños de mascotas sobre prácticas responsables y proporcionar recursos valiosos para asegurar una tenencia adecuada y saludable.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Ofrecemos información actualizada sobre el cuidado de las mascotas.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Proporcionamos guías y consejos prácticos para el bienestar animal.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Se comparten las experiencias y consejos para principiantes.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p class="justified-text">En PetWellness, creemos que cada mascota merece un cuidado excelente. Trabajamos para crear una comunidad informada y comprometida con el bienestar animal, ofreciendo recursos educativos y actualizaciones sobre temas relevantes. Únete a nosotros para hacer una diferencia significativa en la vida de las mascotas y sus dueños.</p>
            <a href="#" class="read-more"><span>Leer más</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section>

    <!-- Sección Equipo -->
    <section id="equipo" class="team section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Equipo</h2>
        <p>Grupo N°5 - Computación Visual y Accesibilidad Aumentada</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/avatar-man.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Bocanegra Valencia, Jean</h4>
                <span>Scrum Master</span>
                <p>Estudiante de 9° ciclo - Ing. Computación y Sistemas</p>
                <div class="social">
                  <a target="_blank" href="https://www.facebook.com/jeanpierre.bocanegra"><i class="bi bi-facebook"></i></a>
                  <a target="_blank" href="https://www.instagram.com/jeanpbv/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/avatar-woman.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Diaz Esquivel, Vivian</h4>
                <span>Scrum Developer</span>
                <p>Estudiante de 9° ciclo - Ing. Computación y Sistemas</p>
                <div class="social">
                  <a target="_blank" href="https://www.facebook.com/vivianlucero.diazesquivel"><i class="bi bi-facebook"></i></a>
                  <a target="_blank" href="https://www.instagram.com/ludies_29.05.01/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/avatar-man.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Gabriel Corro, Eduardo</h4>
                <span>Scrum Developer</span>
                <p>Estudiante de 9° ciclo - Ing. Computación y Sistemas</p>
                <div class="social">
                  <a target="_blank" href="https://www.facebook.com/profile.php?id=526377373"><i class="bi bi-facebook"></i></a>
                  <a target="_blank" href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/avatar-woman.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Guzmán Nolasco, Xiomara</h4>
                <span>Scrum Developer</span>
                <p>Estudiante de 9° ciclo - Ing. Computación y Sistemas</p>
                <div class="social">
                  <a target="_blank" href="https://www.facebook.com/xiomara.guzmannolasco"><i class="bi bi-facebook"></i></a>
                  <a target="_blank" href="https://www.instagram.com/xiomaragn15/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/avatar-man.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Perez Vasquéz, Michael</h4>
                <span>Scrum Developer</span>
                <p>Estudiante de 9° ciclo - Ing. Computación y Sistemas</p>
                <div class="social">
                  <a target="_blank" href="https://www.facebook.com/profile.php?id=100005298347383"><i class="bi bi-facebook"></i></a>
                  <a target="_blank" href="https://www.instagram.com/michelperez3065/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="contact section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Contáctanos</h2>
        <p>Si tienes alguna duda no dudes en comunicarte con nosotros</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-7 mx-auto">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Dirección</h3>
                  <p>Universidad Privada Antenor Orrego, Av. América Sur 3145, Trujillo 13008</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Teléfono</h3>
                  <p>+51 987351246</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Correo Electrónico</h3>
                  <p>PetWellness@gmail.com</p>
                </div>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d987.437158748348!2d-79.03217311565876!3d-8.127054554167389!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1725766874113!5m2!1ses!2spe" width="100%" height="450" style="border-radius: 40px;" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-5">
            <div id="contact-form" data-url="{{ route('contacts-store') }}">
                <form action="{{ route('contacts-store') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                    <div class="col-md-6">
                    <label for="name-field" class="pb-2">Ingresa tu nombre</label>
                    <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-6">
                    <label for="email-field" class="pb-2">Ingresa tu Email</label>
                    <input type="email" class="form-control" name="email" id="email-field" required="">
                    </div>

                    <div class="col-md-12">
                    <label for="subject-field" class="pb-2">Asunto</label>
                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                    </div>

                    <div class="col-md-12">
                    <label for="message-field" class="pb-2">Mensaje</label>
                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                    <div class="loading">Cargando</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>

                    <button type="submit">Enviar mensaje</button>
                    </div>

                </div>
                </form>
            </div>
            </div>

        </div>

      </div>

    </section>

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('petwellness') }}" class="d-flex align-items-center">
            <span class="sitename">PetWellness</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Av. América Sur 3145</p>
            <p>Trujillo 13008</p>
            <p class="mt-3"><strong>Teléfono:</strong> <span>++51 987351246</span></p>
            <p><strong>Correo Electrónico:</strong> <span>PetWellness@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Enlaces útiles</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#inicio">Inicio</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#nosotros">Sobre Nosotros</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#adopcion">Adopción</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Términos y Condiciones</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Otras Fundaciones</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://www.aspca.org/">ASPCA</a></li>
            <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://refugiohuellasdeamor.com/">Huellas de Amor</a></li>
            <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://www.vozanimalperu.com/">Voz Animal</a></li>
            <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://www.worldanimalprotection.org/">World Animal Protection</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Síguenos</h4>
          <p>En estás redes sociales puedes conocer nuestro día a día, el cuidado responsable nunca acaba!.</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-tiktok"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PetWellness</strong> <span>Reservados todos los derechos</span></p>
      <div class="credits">
        Grupo N°5
      </div>
    </div>

  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js"></script>
  

  <script src="assets/js/main.js"></script>

</body>

</html>