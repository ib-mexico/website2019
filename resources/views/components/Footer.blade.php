@section('components.Footer')
    <!-- Footer -->
    <footer class="footer">
        <div class="footer_social">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <ul class="footer_social_list d-flex flex-row align-items-center justify-content-center">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_content">
            <!-- Image credit: https://unsplash.com/@badashphotos -->
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/footer.jpg') }}" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo"><span>IB</span>-México</div>
                                <div class="logo_sub">Soluciones a la medida</div>
                            </a>
                        </div>
                        <div class="footer_nav_container text-center">
                            <nav class="footer_nav">
                                <ul class="footer_nav_list d-flex flex-md-row flex-column align-items-center justify-content-start">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Quiénes Somos</a></li>
                                    <li><a href="#">Servicios</a></li>
                                    <li><a href="#">Hosting</a></li>
                                    <li><a href="#">Sucursales</a></li>
                                    <li><a href="#">contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="copyright">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Inside Business México powered by <a href="https://colorlib.com" class="powered" target="_blank">Colorlib</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection