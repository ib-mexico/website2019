@section('components.Header')
    <!-- Header -->
    <header class="header">
        <!-- Header bar -->
        <div class="header_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_bar_content d-flex flex-row align-items-center justify-content-start">
                            <div class="sub_button text-center"><a href="#">Suscribete</a><div class="d-flex flex-row align-items-start justify-content-start"><div></div><div></div><div></div></div></div>
                            <div class="header_social ml-auto">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justfy-content-start">
                            <div class="logo_container">
                                <a href="#">
                                    <div class="logo"><img src="{{ asset('images/IB-MEXICO.jpg') }}" class="img-responsive" /></div>
                                    <div class="logo_sub">Soluciones a la medida</div>
                                </a>
                            </div>
                            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">
                                <a href="#">
                                    <div class="background_image" style="background-image:url({{ asset('images/extra.jpg') }}"></div>
                                    <div class="header_extra_content">
                                        <div class="header_extra_title">descuentos hasta del 50%</div>
                                        <div class="header_extra_subtitle">Semana HotWeek</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Navigation & Search -->
        <div class="header_nav_container" id="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                            
                            <!-- Logo -->
                            <div class="logo_container">
                                <a href="#">
                                    <div class="logo"><img src="{{ asset('images/IB-MEXICO.jpg') }}" width="250px" /></div>
                                    <div class="logo_sub">Soluciones a la medida</div>
                                </a>
                            </div>

                            <!-- Navigation -->
                            <nav class="main_nav">
                                <ul class="main_nav_list d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="{{ URL::to('/') }}">inicio</a></li>
                                    <li><a href="{{ URL::to('/nosotros') }}">Quiénes somos</a></li>
                                    <li><a href="{{ URL::to('/servicios') }}">Servicios</a></li>
                                    <li><a href="http://www.ib-mexico.com/hosting">hosting</a></li>
                                    <li><a href="#">Sucursales</a></li>									
                                    <li><a href="{{ URL::to('/contacto') }}">contacto</a></li>
                                </ul>
                            </nav>

                            <!-- Search -->
                            <div class="header_search_container ml-auto">
                                <div class="header_search">
                                    <form action="#" id="header_search_form" class="header_search_form d-flex flex-row align-items-center justfy-content-start">
                                        <div><div class="header_search_activation"><i class="fa fa-search" aria-hidden="true"></i></div></div>
                                        <input type="text" class="header_search_input" placeholder="Busqueda" required="required">
                                    </form>
                                </div>
                            </div>

                            <!-- Hamburger -->
                            <div class="hamburger ml-auto menu_mm"><i class="fa fa-bars  trans_200 menu_mm" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>		
        </div>
    </header>
@endsection