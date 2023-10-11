<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Maxim Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->

        <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">

        <!-- Fuentes-icon CSS Files -->
        <link rel="stylesheet" href="{{ asset('fonts/css/all.min.css') }}">

        <!-- Template Main CSS File -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

        <!-- =======================================================
          * Template Name: Maxim
          * Updated: Jul 27 2023 with Bootstrap v5.3.1
          * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
          * Author: BootstrapMade.com
          * License: https://bootstrapmade.com/license/
          ======================================================== -->
    </head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="{{ url('/') }}">Le Café des mots</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Acerca de</a></li>
                    <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Productos</a></li>
                    <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1 class="fuente-titulos">Bienvenidos a le café des mots</h1>
            <h2 class="fuente-titulos">"Donde el sabor nace de un libro y se convierte en un postre"</h2>
            <a href="#about" class="btn-get-started scrollto">Iniciar</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                        <img src="{{ asset('img/logo_bistro.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-5 pt-5 pt-lg-1">
                        <h3 data-aos="fade-up" class="fuente-titulos-s"><b>Acerca de nosotros</b></h3>
                        <p data-aos="fade-up">
                            “Le café des mots” en español El café de las palabras. Ofrecemos un lugar para disfrutar de
                            deliciosos postres tradicionales franceses y bebidas, y a su vez, un espacio para poder leer
                            y adquirir nuevos conocimientos a través del inmenso mundo de la literatura, con la
                            colección especial de libros expuestos en nuestra biblioteca.
                        </p>
                        {{-- <div class="icon-box" data-aos="fade-up">
                            <i class="bx bx-receipt"></i>
                            <h4>Corporis voluptates sit</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div> --}}
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class='bx bx-coffee'></i>
                            <h4 class="fuente-titulos-s"><b>Visión</b></h4>
                            <p>Nuestra visión es convertirnos en un lugar emblemático y reconocido en la comunidad
                                amante de la repostería y la cultura. Aspiramos a ser un punto de encuentro donde la
                                gente pueda disfrutar de los placeres simples de la vida: desde un postre recién
                                horneado y una taza de café, hasta la emoción de descubrir un nuevo mundo a través de
                                las páginas de un libro.

                            </p>
                        </div>
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class='bx bx-book-open'></i>
                            <h4 class="fuente-titulos-s"><b>Misión</b></h4>
                            <p>Nuestra misión es deleitar los sentidos y enriquecer las mentes al ofrecer una
                                experiencia única, que combina la exquisitez de la repostería francesa,con el placer de
                                la lectura. Valoramos la excelencia en la calidad de nuestros productos, el servicio
                                atento y la promoción de la cultura francesa gastronómica y literaria.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Steps Section ======= -->
        {{-- <section id="steps" class="steps section-bg">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
                        <span>01</span>
                        <h4>Lorem Ipsum</h4>
                        <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">
                        <span>02</span>
                        <h4>Repellat Nihil</h4>
                        <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire
                            leno para dest</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="200">
                        <span>03</span>
                        <h4> Ad ad velit qui</h4>
                        <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="300">
                        <span>04</span>
                        <h4>Repellendus molestiae</h4>
                        <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider
                            lando casa</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="400">
                        <span>05</span>
                        <h4>Sapiente Magnam</h4>
                        <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est
                            quibusdam</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="500">
                        <span>06</span>
                        <h4>Facilis Impedit</h4>
                        <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae
                            voluptatibus corporis sequi</p>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Steps Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <h4>Local</h4>
                                    <p>Ofrecemos un ambiente acogedor para nuestros clientes, un lugar para disfrutar de
                                        nuestros productos</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <h4>Postres/bebidas</h4>
                                    <p>Contamos con una variedad de postres franceses y bebidas para nuestros
                                        consumidores.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    <h4>Biblioteca</h4>
                                    <p>Nuestra área de biblioteca contiene una gran variedad de libros de literatura
                                        francesa y de libros que despertaran tu interés por la lectura.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                    <h4>Estudio/trabajo</h4>
                                    <p>Nuestro local es un lugar acogedor y relajante para realizar tus actividades
                                        escolares o laborales, mientras disfrutas de un postre y una bebida.</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 ml-auto" data-aos="fade-left">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <figure>
                                    <img src="{{ asset('img/local.jpeg') }}" alt="no hay" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <figure>
                                    <img src="{{ asset('img/Postres_bebidas.jpeg') }}" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <figure>
                                    <img src="{{ asset('img/Biblioteca.jpeg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <figure>
                                    <img src="{{ asset('img/Estudio_trabajo.jpeg') }}" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="fuente-titulos-s"><b>Servicios</b></h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon">
                                {{-- <i class="bx bxl-dribbble"></i> --}}
                                <i class="bi bi-bag-heart"></i>
                            </div>
                            <h4 class="title"><a href="">Postres</a></h4>
                            <p class="description">Ofrecemos variedad de postres franceses tradicionales que puedes
                                disfrutar en nuestro local.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon">
                                {{-- <i class="bx bx-file"></i> --}}
                                <i class="bi bi-cup"></i>
                            </div>
                            <h4 class="title"><a href="">Bebidas</a></h4>
                            <p class="description">Existe una variedad de bebidas para escoger y acompañar con tu
                                postre de elección.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon">
                                {{-- <i class="bx bx-tachometer"></i> --}}
                                <i class="bi bi-book"></i>
                            </div>
                            <h4 class="title"><a href="">Biblioteca</a></h4>
                            <p class="description">Contamos con un espacio para explorar el mundo de la literatura
                                francesa y disfrutar de un buen libro con un postre.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                            <div class="icon">
                                {{-- <i class="bx bx-world"></i> --}}
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h4 class="title"><a href="">Estudio/trabajo</a></h4>
                            <p class="description">Nuestro local es ideal y acogedor para estudiar o trabajar.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="fuente-titulos-s"><b>Reseñas</b></h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div> --}}
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Me parece un lugar bastante interesante para probar postres de una cultura diferente
                                    y conocer de la literatura francesa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Un lugar muy innovador, donde las personas de todas las edades pueden ir y disfrutar
                                    de un postre y un buen libro, esto crea un hábito muy bueno para nuestra sociedad
                                    actual.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    El local me parece muy lindo y amplio, el área de biblioteca es muy acogedora y el
                                    servicio al cliente es muy bueno!!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Me encanta la temática lleva el local, cómo combina los elementos franceses, la
                                    iluminación, los postres y la biblioteca. Todo es muy lindo, un lugar al que
                                    regresaría definitivamente!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="fuente-titulos-s"><b>Productos</b></h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-app">Postres</li>
                            <li data-filter=".filter-card">Bebidas</li>
                            <li data-filter=".filter-web">Libros</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    @foreach ($libros as $libro)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/libros/' . $libro->imagen) }}" class="img-fluid"
                                    alt="{{ $libro->nombre }}">
                                <div class="portfolio-info">
                                    <h4>{{ $libro->nombre }}</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('storage/libros/' . $libro->imagen) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $libro->nombre . ' <br>' . $libro->descripcion }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($postres as $postre)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/postres/' . $postre->imagen) }}" class="img-fluid"
                                    alt="{{ $postre->nombre }}">
                                <div class="portfolio-info">
                                    <h4>{{ $postre->nombre }}</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('storage/postres/' . $postre->imagen) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $postre->nombre . ' <br>' . $postre->descripcion . ' <br>' . '$ ' . $postre->precio }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($bebidas as $bebida)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/bebidas/' . $bebida->imagen) }}" class="img-fluid"
                                    alt="{{ $bebida->nombre }}">
                                <div class="portfolio-info">
                                    <h4>{{ $bebida->nombre }}</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('storage/bebidas/' . $bebida->imagen) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $bebida->nombre . ' <br>' . $bebida->descripcion . ' <br>' . '$ ' . $bebida->precio }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="fuente-titulos-s"><b>Equipo de Trabajo</b></h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row justify-content-center">

                    <div class="col-xl-2 col-lg-3 col-md-4" data-aos="fade-up">
                        <div class="member">
                            <img src="{{ asset('img/team/perfil_1.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Oscar Urquilla</h4>
                                    <span>Jefe de equipo</span>
                                </div>
                                <!-- <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('img/team/perfil_2.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Rebeca Paredes</h4>
                                    <span>Gerente General</span>
                                </div>
                                <!--<div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="{{ asset('img/team/perfil_3.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Cesia Vanegas</h4>
                                    <span>Directora de Marketing</span>
                                    <!-- </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="{{ asset('img/team/perfil_5.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Karla Landaverde</h4>
                                    <span>Administrativo</span>
                                    <!-- </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="{{ asset('img/team/perfil_4.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Yancy Recinos</h4>
                                    <span>Operario</span>
                                </div>
                                <!-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>    

        </section><!-- End Team Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="fuente-titulos-s"><b>Preguntas frecuentes</b></h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="faq-list">
                    <ul>
                        {{-- <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">¿Hay servicio a domicilio? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    sí, existe servicio a domicilio en nuestro local con Uber eats y Pedidos ya.
                                </p>
                            </div>
                        </li> --}}

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">¿Qué tipos de libros tienen
                                disponibles? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Tenemos libros para todos los gustos, ofrecemos libros infantiles, libros
                                    históricos, novela narrativa,
                                    novelas de ficción y de no ficción, libros juveniles, entre otros.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">¿Tiene algún costo extra acceder a la
                                biblioteca? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    No, al consumir cualquiera de nuestros productos tienes total acceso a nuestra
                                    biblioteca,
                                    ya que impulsamos y motivamos el hábito de leer al ofrecer los libros de manera
                                    gratuita mientras se encuentren dentro del local.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">¿Horarios de atención? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    De lunes a sábados 8.00 am a 8.00 pm <br>
                                    Domingo 7.00 am a 12.00 pm
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">¿cuál se el tipo de comida ofrece su
                                local? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    El tipo de comida que ofrece nuestro local son postres tradicionales de Francia,
                                    y contamos con diferentes tipos de postres como lo son: Marcarons,
                                    crême brule y crepas dulces, entre otros. Todo esto con el fin de que nuestro
                                    visitante
                                    conozcan nuevos sabores de un país diferente.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="fuente-titulos-s"><b>Contacto</b></h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row no-gutters justify-content-center" data-aos="fade-up">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Ubicación:</h4>
                                <p>Paseo Venecia soyapango</p>
                            </div>

                            <div class="email mt-4">
                                <i class="bi bi-envelope"></i>
                                <h4>Correo:</h4>
                                <p>lecafedesmots23@gmail.com</p>
                            </div>

                            <div class="phone mt-4">
                                <i class="bi bi-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>+503 7962-2449</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5 d-flex align-items-stretch">
                        {{-- <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" allowfullscreen></iframe> --}}
                        <iframe style="border:0; width: 100%; height: 270px;" frameborder="0" allowfullscreen
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=plaza venecia soyapango&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="{{ route('contacto.store') }}" method="POST" role="form"
                            class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nombre" class="form-control" id="nombre"
                                        placeholder="Nombre">
                                    @if ($errors->has('nombre'))
                                        <span class="text-danger">{{ $errors->first('nombre') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="titulo" id="titulo"
                                    placeholder="Título">
                                @if ($errors->has('titulo'))
                                    <span class="text-danger">{{ $errors->first('titulo') }}</span>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="5" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3 class="fuente-titulos-s"><b>Le café des mots</b></h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Maxim</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ url('vendor/aos/aos.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('vendor/php-email-form/validate.js') }}"></script>

    <!-- Fuentes-icon CSS Files -->
    <script src="{{ url('fonts/js/all.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('js/main.js') }}"></script>
    {{-- <script>
        url = '{{ request()->path() }}'
        $.ajax({
            type: "GET", // Usa POST para enviar datos al servidor
            url: url + 'libros_r',
            dataType: "json", // Espera una respuesta JSON
            success: function(response) {

                // Recorre los datos JSON y crea los elementos HTML
                $.each(response, function(index, libro) {
                    var portfolioItem = `
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/libros') }}/${libro.imagen}" class="img-fluid" alt="${libro.nombre}">
                            <div class="portfolio-info">
                                <h4>${libro.nombre}</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('storage/libros') }}/${libro.imagen}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="${libro.nombre}"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;

                    // Agrega el elemento generado al contenedor correspondiente
                    $(".productos").append(portfolioItem);
                });

            },
            error: function(error) {
                // Si ocurre un error en la solicitud AJAX, puedes manejarlo aquí
                console.error("Error en la solicitud AJAX:", error);
            }
        });
    </script> --}}

</body>

</html>
