@section('components.Menu')
    <!-- Menu -->
    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Buscar" required="required">
                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="#">Inicio</a></li>
                    <li class="menu_mm"><a href="#">Qui&eacute;nes Somos</a></li>
                    <li class="menu_mm"><a href="#">Servicios</a></li>
                    <li class="menu_mm"><a href="#">Hosting</a></li>
                    <li class="menu_mm"><a href="#">Sucursales</a></li>
                    <li class="menu_mm"><a href="#">Contacto</a></li>
                </ul>
            </nav>
            <div class="menu_subscribe"><a href="#">Suscribir</a></div>
            <div class="menu_extra">
                <div class="menu_social">
                    <ul>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection