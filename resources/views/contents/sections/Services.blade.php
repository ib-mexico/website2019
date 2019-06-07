@section('title', 'Servicios')

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
                            <div class="home_title">Servicios</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="{{ URL::to('/') }}">Inicio</a></li>
                                    <li>Servicios</li>
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
<div class="intro">
    <div class="container">
        <div class="center">
            <h2>Nuestros servicios</h2>
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <div class="feature-wrap">
                    <i class="fa fa-bolt"></i>
                    <h2>Calidad de Energía</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-wrap">
                    <i class="fa fa-globe"></i>
                    <h2>Networking</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-wrap">
                    <i class="fa fa-wifi"></i>
                    <h2>Conectividad</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-wrap">
                    <i class="fa fa-phone"></i>
                    <h2>Comunicaciones Unificadas</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-wrap">
                    <i class="fa fa-laptop"></i>
                    <h2>Hardware</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-wrap">
                    <i class="fa fa-code"></i>
                    <h2>Programación y Diseño</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-3-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>

                    <div class="media-body">
                        <h2>¿Tienes alguna pregunta o necesitas un presupuesto personalizado?</h2>
                        <p>Nuestro equipo de atención a cliente con gusto te atenderá para aclarar todas tus dudas y proporcionarte un presupuesto acorde a tus necesidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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