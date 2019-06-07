@section('title', 'Nosotros')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about_responsive.css') }}" />
@endsection

@section('home_intro')
    <!-- Home -->
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about.jpg') }}" data-speed="0.8"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Nosotros</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="{{ URL::to('/') }}">Inicio</a></li>
                                    <li>Nosotros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <div class="intro">
        <div class="container">
            <div class="row">

                <!-- Intro Content -->
                <div class="col-lg-8 intro_col">
                    <div class="row">
                        <div class="intro_content post_h_large">
                            <div class="post_content">
                                <div class="post_category cat_about"><a href="category.html">Acerca de nosotros</a></div>
                                <div class="post_title"><a href="single.html">Antecedentes</a></div>
                                <div class="post_text">
                                    <p style="text-align: justify;">Se inician labores en Diciembre de 2008, comercializando productos y servicios de telecomunicaciones. Hoy 9 años despues, incursionando en el mercado como integradores especializados en telecomunicaciones con alianzas con los principales fabricantes como son: Panasonic, Fortinet, Total Ground, entre otros.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-4">
                        <div class="intro_content post_h_large">
                            <div class="post_content">
                                <div class="post_title"><a href="single.html">Equipo de Trabajo</a></div>
                                <div class="post_text">
                                    <p style="text-align: justify;">Estamos integrados por un grupo de personas profesionales, especialistas, innovadoras y vanguardistas, con la única finalidad de ofrecerle los mejores productos y servicios para el mejor desarrollo de su empresa. La integración de marcas líderes en el mercado de las telecomunicaciones nos permite incrementar la productividad de su empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Intro Image -->
                <div class="col-lg-4 intro_col">
                    <div class="intro_image">
                        <img src="images/about_intro.jpg" alt="https://unsplash.com/@rawpixel">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Boxes -->
	<div class="boxes d-flex flex-md-row align-items-start justify-content-start flex-wrap">
        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="images/icon_1.svg" alt="Valores"></div>
                <div class="box_text">
                    <div class="box_title">Valores</div>
                    <div class="box_subtitle">Bien fortalecidos</div>
                </div>
            </div>
        </div>

        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="images/icon_2.svg" alt="Tecnologia"></div>
                <div class="box_text">
                    <div class="box_title">La mejor tecnología</div>
                    <div class="box_subtitle">Manejamos productos de calidad</div>
                </div>
            </div>
        </div>

        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="images/icon_3.svg" alt="Certificado"></div>
                <div class="box_text">
                    <div class="box_title">Personal Certificado</div>
                    <div class="box_subtitle">Capacitados y especializados</div>
                </div>
            </div>
        </div>

        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="images/icon_4.svg" alt="Cobertura"></div>
                <div class="box_text">
                    <div class="box_title">Cobertura</div>
                    <div class="box_subtitle">Centro - Sur</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Milestones -->
	<div class="milestones">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/milestones.jpg') }}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_5.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="15">0</div>
                            <div class="milestone_text">Reconocimientos</div>
                        </div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_6.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="10">0</div>
                            <div class="milestone_text">Nuevas Publicaciones</div>
                        </div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_7.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="200" data-sign-after="+">0</div>
                            <div class="milestone_text">Proyectos Realizados</div>
                        </div>
                        
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_8.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="750" data-sign-after="+">0</div>
                            <div class="milestone_text">Clientes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Extras -->
	<div class="about_extras">
        <div class="container">
            <div class="row">
                <!-- Tabs -->
                <div class="col-lg-6">                    
                    <div class="tabs">
                        <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
                            <div class="tab active">Misión</div>
                            <div class="tab">Visión</div>
                        </div>
                        <div class="tab_panels">
                            <div class="tab_panel active">
                                <div class="tab_panel_content">
                                    <div class="tab_text">
                                        <p>Atender a empresas o particulares en sus necesidades relacionadas a las tecnologías de la información proporcionando los mejores productos y soluciones integrales de valor agregado, que les permitan administrar correctamente sus recursos haciendo rendir su inversión al máximo, y así les permitan crecer y desarrollarse entendiendo que el éxito de ambos esta conjuntamente relacionado.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_panel">
                                <div class="tab_panel_content">
                                    <div class="tab_text">
                                        <p>Consolidar la presencia de la empresa en el mercado local y nacional como la más importante en calidad de servicios y productos; proporcionando soluciones integrales de valor agregado, considerando a cada uno de nuestros clientes como un socio estratégico, ya que el éxito de nuestra compañía será un reflejo del éxito de nuestros clientes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordions -->
                <div class="col-lg-6">
                    <div class="accordions">

                        <!-- Accordion -->
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center active"><div>Trabajo en equipo</div></div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Promoviendo y apoyando un equipo homogéneo, polivalente e interdepartamental.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Accordion -->
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center"><div>Colaboración</div></div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion -->
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center"><div>Servicio</div></div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Cumplimos con nuestros compromisos y nos hacemos responsables de nuestro rendimiento en todas nuestras decisiones y acciones, basándonos en una gran voluntad de servicio por y para nuestros clientes.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion -->
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center"><div>Transparencia</div></div>
                            <div class="accordion_panel">
                                <div>
                                    <p>La implicación y compromiso del personal no sería posible sin una absoluta transparencia en los procesos, disponiendo el personal de la máxima información de la empresa.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Accordion -->
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center"><div>Integridad y Ética</div></div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Promovemos un compromiso social y cumplimos nuestra normativa interna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion -->
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center"><div>Formación</div></div>
                            <div class="accordion_panel">
                                <div>
                                    <p>La empresa se preocupa de la formación continua en todos los ámbitos.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection

@section('content')
    
@endsection

@section('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endsection


@include('components.Header')
@include('components.Menu')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')