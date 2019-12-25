<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Somos Creándola | @yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta title="Diseño & Desarrollo de Apliaciones Web">
  <meta content="" name="Somos especialistas en procesos de transformación digital, queremos que las pymes en medellin tengan nuevas y mejores ventajas competitivas en sus nichos de mercado">
  <meta name="google-site-verification" content="aXPPo6iGfjZHLaJOndMhpt_fGRjuvLJIwTiLsAlANIA" />

  <!-- Favicons -->
  <link href="{{ asset('img/creandola.png') }}" rel="icon">
  <link href="{{ asset('img/creandola.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/modal-video/css/modal-video.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135290289-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-135290289-1');
    </script>
  
  
</head>
<!--Start of Tawk.to Script
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5c54e6dc6cb1ff3c14caccd6/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  End of Tawk.to Script-->
<body>

  @section('header')
  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><!--<img src="{{-- asset('img/creandola.png') --}}" style="width:45px; height: 45px;" alt="">--><a href="#body" class="scrollto"><span>Somos C</span>reándola</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container" class="navbar navbar-expand-lg">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about-us">Apps</a></li>
          <li><a href="#features">Servicios</a></li>
          <!--<li><a href="#screenshots">Apps</a></li> -->
          <!--<li><a href="#team">Team</a></li>-->
          <li><a href="#pricing">Cotizaciones</a></li>
          <li class="menu-has-children"><a href="">Usuarios</a>
            <ul>
              <li><a href="#">Clientes</a></li>
              <li><a href="videos/Senaejercicio_player.html">Tutoriales</a></li>
              <li><a href="./prueba">Equipo</a></li>
              <li><a href="AdminSomosCreandola/">Administración</a></li>
            </ul>
          </li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  @show
  <!--==========================
    Hero Section
  ============================-->
  @section('one-section')
  <section id="hero" class="wow fadeIn" style="top:35px;">
    <div class="hero-container">
      <h1>Desarollo de Aplicaciones Web</h1>
      <h2>Diseño & Desarrollo de aplicaciones web &amp; más...</h2>
      <img src="{{ asset('img/creandola.png') }}" style="width: 23%;" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Empecemos!!!</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div> 
    </div>
  </section><!-- #hero -->
  @show
  <!--==========================
    Get Started Section
  ============================-->
  @section('create-vritual-strategy')
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Diseño web </h2>
        <p class="separator">Creación de una estrategía digital.</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{ asset('img/svg/cloud.svg') }}" alt="img" class="img-fluid">
            <h4>Clientes potenciales</h4>
            <p>Segmentamos sus stakeholders para realizar campañas comerciales</p>
            <a href="#">Ver más</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{ asset('img/svg/planet.svg') }}" alt="img" class="img-fluid">
            <h4>Interface amigable</h4>
            <p>Que su sitio web sea amigable en la interación con sus clientes "Godwill"</p>
            <a href="#">Ver más</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{ asset('img/svg/asteroid.svg') }}" alt="img" class="img-fluid">
            <h4>Comunicación efectiva</h4>
            <p>Creamos multiples canales de acceso para usted y sus clientes</p>
            <a href="#">Ver más</a>

          </div>
        </div>

      </div>
    </div>

  </section>
  @show
  <!--==========================
    About Us Section
  ============================-->
  @section('movil-app')
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="{{ asset('img/about-img.png') }}" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>Fácil</span>Adaptable a dispositivos moviles </h2>
            <p>Construimos aplicaciones que ayudaran en la interación diara con sus clientes, nuestra tecnologia permite crear aplicaciones multiplataformas las cuales será accesibles desde cualquier dispositivo movil, ademas tus clientes tendran la posibilidad de contactarte al wahttsap o al chat de tu negocio.</p>

            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Diseño creativo</li>
              <li><i class="fa fa-angle-right"></i>Adaptable a otros dispositivos</li>
              <li><i class="fa fa-angle-right"></i>Fácil de usar</li>
              <li><i class="fa fa-angle-right"></i>Rápido</li>
              <li><i class="fa fa-angle-right"></i>Preciso</li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>
  @show
  <!--==========================
    Features Section
  ============================-->
  @section('services')
  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Nuestros servicios.</h2>
        <p class="separator">CRM para el control de su negocio!</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/paint-palette.svg') }}" alt="img" class="img-fluid">
            <h4>Diseño web</h4>
            <p>Sitios web amigables, dinamicos y rápidos, adaptables a su modelo de negocio</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/vector.svg') }}" alt="img" class="img-fluid">
            <h4>SEO</h4>
            <p>Posicionamos su marca, en internet buscan lo que usted hace, nosotros hacemos que lo encuentren</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/design-tool.svg') }}" alt="img" class="img-fluid">
            <h4>Informes Analitics</h4>
            <p>Implementamos herramientas de analitics para ver en una linea de tiempo la influencia de la herramienta en su empresa</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/asteroid.svg') }}" alt="img" class="img-fluid">
            <h4>Backups</h4>
            <p>Guardamos el backup de su negocio como respaldo de las operaciones realizadas diariamente</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/asteroid.svg') }}" alt="img" class="img-fluid">
            <h4>Informes</h4>
            <p>Informes en excel para que pueda descargar y manipular la información de su negocio</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/cloud-computing.svg') }}" alt="img" class="img-fluid">
            <h4>Soporte 24/7</h4>
            <p>Nuestro equipo de profesionales estan listos para ayudarle en el momento en que usted lo necesite</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/pixel.svg') }}" alt="img" class="img-fluid">
            <h4>Diseño corporativo</h4>
            <p>Diseño de la imagen corporativa, "gobierno coprorativo"</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ asset('img/svg/code.svg') }}" alt="img" class="img-fluid">
            <h4>Desarrollo a la medida</h4>
            <p>Nuestra aplicaciones estan desarrolladas a la medida, de acuerdo a sus necesidades</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  @show

  <!--==========================
    Screenshots Section
  ============================-->
  @section('moviles-show')
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Aplicaciones moviles</h2>
        <p class="separator">Fácil, agil y sin perdida de tiempo .</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="{{ asset('img/screen/1.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/2.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/3.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/4.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/5.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/6.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/7.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/8.jpg') }}" alt="img"></div>
        <div><img src="{{ asset('img/screen/9.jpg') }}" alt="img"></div>

      </div>
    </div>

  </section> 
  @show
  <!--==========================
    Video Section
  ============================-->
  @section('video')
  <section id="video" class="text-center wow fadeInUp">
    <div class="overlay">
      <div class="container-fluid container-full">

        <div class="row">
          <a href="#" class="js-modal-btn play-btn" data-video-id="s22ViV7tBKE"></a>
        </div>

      </div>
    </div>
  </section> 
  @show
  <!--==========================
    Team Section
  ============================-->
  @section('team')
  <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Team Member</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="{{ asset('img/team/yo2.png') }}" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

       <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/2.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/3.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/4.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> 
  @show


  <!--==========================
    Testimonials Section
  ============================-->
  @section('testimonials')
  <section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">
                  <div class="top-top">

                    <h2>Para que una pagina web?</h2>
                    <p>Una página web sirve como puntal para existir en Internet. Así de claro. La página web debe ser el centro de cualquier estrategia online. Sirve para darse a conocer entre todos aquellos que no conocen tu marca, empresa o PyME, o los productos o servicios que ofreces.</p>
                    <h4>Edwin Venté<span>Desarrollador</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Marketing efectivo</h2>
                    <p>4 pasos para un marketing efectivo. No desperdicies tu dinero en aplicar estrategias que no van con tu negocio. Mejor, define quién es tu público y cuándo desearían tu oferta. Muchos dueños de negocios me preguntan sobre cómo hacer marketing efectivo, en términos de costos y resultados.</p>
                    <h4>Marketing<span>https://www.entrepreneur.com/article/265584</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Cual es la importancia de las redes sociales</h2>
                    <p>El concepto de red social empresarial se refiere al uso de los medios de comunicación social por parte de una organización, tanto interna como externamente, para conectar personas que comparten intereses o actividades similares.</p>
                    <h4>Daniel Garcia<span>Motivación GYM</span></h4>

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  @show

  <!--==========================
    Pricing Table Section
  ============================-->
  @section('cotizaciones')
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Cotice su sitio web</h2>
        <p class="separator">Planes para pequeñas y grandes empresas .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>básico</h4>
              <h2>personas</h2>
              <ul class="list-unstyled">
                <li><b>Sitio</b> Web</li>
                <li><b>7/24</b> Soporte tecnico</li>
                <li><b>Empresa.</b>com. </li>
                <li>Email profesional</li>
                <li>1 Certificado de seguridad <i class="fa fa-lock"></i></li>
              </ul>
              <div class="table_btn">
                <a href="#contact" class="btn"><i class="fa fa-shopping-cart"></i> Cotizar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>estrategico</h4>
              <h2>pymes</h2>
              <ul class="list-unstyled">
                <li><b>sitio web +</b> App</li>
                <li><b>7/24</b> Soporte tecnico</li>
                <li><b>Online</b> ó en Servidor local </li>
                <li>Cuentas emal ilimitadas</li>
                <li>seguridad SSL <i class="fa fa-lock"></i></li>
              </ul>
              <div class="table_btn">
                <a href="#contact" class="btn"><i class="fa fa-shopping-cart"></i> Cotizar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>empresarial</h4>
              <h2>empresas</h2>
              <ul class="list-unstyled">
                <li><b>Apliacion hibrida</b> CRM</li>
                <li><b>7/24</b> Soporte tecnico</li>
                <li><b>40 GB</b> Almacenamiento</li>
                <li>Cuentas emal ilimitadas</li>
                <li>Full certificados <i class="fa fa-lock"></i></li>
              </ul>
              <div class="table_btn">
                <a href="#contact" class="btn"><i class="fa fa-shopping-cart"></i> Cotizar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>profeesional</h4>
              <h2>mundo digital</h2>
              <ul class="list-unstyled">
                <li><b>Web + App</b> +Rsocial</li>
                <li><b>7/24</b> Soporte Tecnico</li>
                <li><b>Almacenamiento</b> Ilimitado</li>
                <li>Cuentas emal ilimitadas</li>
                <li>Full certificados <i class="fa fa-lock"></i></li>
              </ul>
              <div class="table_btn">
                <a href="#contact" class="btn"><i class="fa fa-shopping-cart"></i> Cotizar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @show
  <!--==========================
    Blog Section
  ============================-->
  @section('noticias')
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Nuestros posts</h2>
        <p class="separator">Siguenos en las redes sociales y descubre las nuevas tendecias .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="{{ asset('img/blog/blog-image-1.jpg') }}" alt="diseño web" title="importancia de la pagina web"></a>
            <div class="content-blog">
              <h4><a href="#">Cual es la diferencia entre un sitio web gratuito y uno profesional?</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">Ver más</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="{{ asset('img/blog/blog-image-2.jpg') }}" class="img-responsive" alt="posicionamiento organico" title="herramientas de SEO"></a>
            <div class="content-blog">
              <h4><a href="#">Como puedo potencializar mi negocio con mi sitio web?</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">Ver más</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="{{ asset('img/blog/blog-image-3.jpg') }}" class="img-responsive" alt="clientes potenciales" title="marketing digital"></a>
            <div class="content-blog">
              <h4><a href="#">Como encontrar más clientes potenciales?</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">Ver más</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  @show

  <!--==========================
    Newsletter Section
  ============================-->
  @section('boletin')
  <section id="newsletter" class="newsletter text-center wow fadeInUp" style="height: 300px !important;">
    <div class="overlay padd-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Suscribete y obten descuentos | correo aquí" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribirse</button>

            </form>

          </div>
        </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>


      </div>
    </div>
  </section>
  @show

  <!--==========================
    Contact Section
  ============================-->
  @section('contact')
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Contácto</h2>
        <p class="separator">Cuentanos cuales son tus requerimientos, de esa forma podremos ayudarte a encontrar la mejor solución para tu negocio.</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Cra 73 #17-27<br>Belén San Bernardo (Medellín)</p>
            </div>

            <div class="email">
              <a href="mailto:comercial@somoscreandola.com?Subject=Cotización"><i class="fa fa-envelope"></i></a>
              <p>comercial@somoscreandola.com</p>
            </div>

            <div>
              <a href="https://api.whatsapp.com/send?phone=573023697923&text=Hola estuve viendo tus anuncios y requiero acesoría"><i class="fa fa-phone"></i></a>
              <p>+057 302 369 79 23</p>
            </div>
          </div>

          <div class="social-links">
            <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>-->
            <a href="https://www.facebook.com/Cre%C3%A1ndola-547771275743981/?modal=admin_todo_tour" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/somos_creandola/" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="https://api.whatsapp.com/send?phone=573023697923&text=Hola estuve viendo tus anuncios y requiero acesoría" class="linkedin"><i class="fa fa-phone"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form" id="formularioc">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form role="form" id="task-form">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Cúal es su nombre" data-rule="minlen:4" data-msg="Ups Falto colocar el nombre!" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Su email" data-rule="email" data-msg="Necesitamos su email para darle una respuesta!" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Que tipo de servicio necesitas?" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe una pequeña descripción de lo que necesitas!!!" placeholder="Escriba su mensaje ..."></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->
  @show

  <!--==========================
    Footer
  ============================-->
  @section('footer')
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#"><b style="color: green;">C</b>reándola</a>
            <p style="margin-top: -100px;">Ayudamos a las empresas a pasar a un siguente nivel, entendiendo la importancia de los medios de comunicación, las redes sociales y el internet.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Equipo</h4>

            <ul class="list-unstyled">
              <li><a href="https://github.com/edwinvente">Edwin Venté</a></li>
              <li><a href="https://github.com/Vente16">Jon Wilmar</a></li>
              <li><a href="#">Joezer Gabriel</a></li>
              <li><a href="#">Sebastian Garcia</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Tecnologías</h4>

            <ul class="list-unstyled">
              <li><a href="#">HTML 5</a></li>
              <li><a href="#">BOOSTRAP 4</a></li>
              <li><a href="#">Jquery</a></li>
              <li><a href="#">PHP</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Tecnologías</h4>

            <ul class="list-unstyled">
              <li><a href="#">Vue JS</a></li>
              <li><a href="#">Angular</a></li>
              <li><a href="#">Laravel</a></li>
              <li><a href="#">Javascript</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Aliados</h4>

            <ul class="list-unstyled">
              <li><a href="https://operadorturismocolombia.com/">Turismo en Medellín</a></li>
              <li><a href="https://proyectosycabinas.com/">Proyectos y Cabinas</a></li>
              <li><a href="https://www.vision2.net.com/">Visión 2</a></li>
              <li><a href="#">Google Analitics</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights 2020. Todos Los Derechos Reservados.</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          -->
          Diseñado por <a href="https://www.somoscreandola.com/">Somos Creándola</a>
        </div>
      </div>
    </div>

  </footer>
  @show

  <input type="hidden" class="servidor" value="<?=$_SERVER['SERVER_NAME']?>">

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries 
  <script src="{{-- asset('lib/jquery/jquery.min.js') --}}"></script>
  -->
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/floating-wpp.min.js') }}"></script>
  <script src="{{ asset('js/sweetalert2.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
  <script>
    $(function(){
      
      //crear la instancia de swwalert2
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })


      //whatsapp
      setTimeout(function(){ $('.floating-wpp-popup').addClass('active'); }, 4000);
      $('#myDiv').floatingWhatsApp({
          phone: '573023697923',
          popupMessage: 'Hola, En que podemos ayudarte?',
          showPopup: true
      });


      //formulario de contacto
       $('#task-form').on('submit', function(e){
             e.preventDefault();
             var content = $(this).serializeObject();
             getNewClient(content);
        });

        
        $.fn.serializeObject = function() {
            var obj = {};
            var arr = this.serializeArray();
            arr.forEach(function(item, index) {
              if (obj[item.name] === undefined) { // New
                  obj[item.name] = item.value || '';
              } else {                            // Existing
                  if (!obj[item.name].push) {
                    obj[item.name] = [obj[item.name]];
                  }
                obj[item.name].push(item.value || '');
              }
            });
              return obj;
          };




          function getNewClient(content)
          {
              //console.log(content) 127.0.0.1
              var url = $('.servidor').val();
              var endpoint = '';
              var token = $('#token').val();
              if (url == '127.0.0.1') {
                console.log('servidor local')
                endpoint = 'http://localhost:8000/contacto';
              }else{
                console.log('En producción')
                endpoint = 'http://somoscreandola.com/contacto';
              }
              content.token = token;
              //ajax con los datos para laravel
              $.ajax({
                url:endpoint,
                headers: {'X-CSRF-TOKEN': token},
                type:'get',
                dataType:'json',
                data:content,
                beforeSend: function(){
                  $.LoadingOverlay("show");
                },
                success: function(response){
                  console.log(response)
                  $.LoadingOverlay("hide");
                  if (response) {
                    Toast.fire({
                      icon: 'success',
                      title: 'Contización solicitada'
                    })
                  $('#task-form').trigger('reset');
                  }else{
                    Toast.fire({
                      icon: 'info',
                      title: 'Su cuenta de correo no esta disponible'
                    })
                  }
                }
              });
          }



    });
  </script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/modal-video/js/modal-video.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
