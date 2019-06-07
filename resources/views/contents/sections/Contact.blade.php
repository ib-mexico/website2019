@section('title', 'Contacto')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_responsive.css') }}" />
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
                            <div class="home_title">Contacto</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="{{ URL::to('/') }}">Inicio</a></li>
                                    <li>Contacto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Contact -->
	<div class="contact">
        <div class="container">
            <div class="row">
                
                <!-- Contact Content -->
                <div class="col-lg-4 contact_col">
                    <div class="contact_content">
                        <div class="contact_title">Cont&aacute;ctanos</div>
                        <div class="contact_text">
                            <p> Ponte en contacto con nosotros y en breve nos comunicaremos contigo con el fin de proporcionarte la mejor experiencia con nosotros.</p>
                        </div>
                        <div class="contact_social">
                            <ul class="contact_social_list d-flex flex-row align-items-center justify-content-start">
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="contact_info">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                        <div class="contact_info_icon"><img src="images/icon_9.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_content">Marcelino Cabieses #407, Villahermosa, Tab, MX.</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                        <div class="contact_info_icon"><img src="images/icon_10.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_content">+52 (993)351-1916</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                        <div class="contact_info_icon"><img src="images/icon_11.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_content">vht@ib-mexico.com</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8 contact_col">
                    <div class="contact_form_container">
                        <div class="contact_title">Envíanos un mensaje</div>
                        <form action="#" id="contact_form" class="contact_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="contact_input" placeholder="Nombre" required="required">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="contact_input" placeholder="E-mail" required="required">
                                </div>
                            </div>
                            <textarea class="contact_input contact_textarea" placeholder="Mensaje" required="required"></textarea>
                            <button class="contact_button trans_200">enviar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Google Map -->
    <div class="google_map_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact_map">
                        <!-- Google Map -->
                        <div class="map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBAXf_8P0LJOOqTxI8ECa8Ntpvb0JPcKbE"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection


@include('components.Header')
@include('components.Menu')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')