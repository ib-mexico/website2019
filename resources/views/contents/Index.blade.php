@section('title', 'Inside Business México S.A. de C.V.')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
@endsection

@section('home_intro')
    <!-- Home -->
    <div class="home">
        <!-- Home Slider -->
        <div class="home_slider_container">
            @if(sizeof($lstSliders) > 0)
                <div class="owl-carousel owl-theme home_slider">
                    @foreach($lstSliders as $item)
                    <!-- Slide -->
                    <div class="owl-item home_slider_item">
                        <div class="background_image" style="background-image:url({{ Storage::disk('s3')->url($item->file) }})"></div>
                        @if($item->title != null)
                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                <div class="home_title">{{ $item->title }}</div>
                                <div class="home_text">{{ $item->body }}</div>
                                @if($item->url_redirect != null)
                                    <div class="home_button trans_200"><a href="{{$item->url_redirect}}" target="_blank">leer más</a></div>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>

                @if(sizeof($lstSliders) > 1)
                <!-- Home Slider Navigation -->
                <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left trans_200" aria-hidden="true"></i></div>
                <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right trans_200" aria-hidden="true"></i></div>
                @endif
            @endif
        </div>
    </div>

    <!-- Intro -->
    <div class="intro">
        <div class="container">
            <div class="row">
                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('images/calidad-energia.jpg') }}" alt="">
                        <div class="intro_content intro_color_1 trans_200"><a href="#">calidad de energía</a></div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('images/networking.jpg') }}" alt="">
                        <div class="intro_content intro_color_2 trans_200"><a href="#">networking</a></div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('images/conectividad.jpg') }}" alt="">
                        <div class="intro_content intro_color_3 trans_200"><a href="#">conectividad</a></div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 3em">
                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('images/comunicaciones-unificadas.jpg') }}" alt="">
                        <div class="intro_content intro_color_4 trans_200"><a href="#">comunicaciones unificadas</a></div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('images/hardware.jpg') }}" alt="">
                        <div class="intro_content intro_color_5 trans_200"><a href="#">hardware</a></div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('images/programacion.jpg') }}" alt="">
                        <div class="intro_content intro_color_6 trans_200"><a href="#">programación y diseño</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Featured Title -->
    <div class="featured_title">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="section_title">Posts Destacados</div>
                            <div class="section_subtitle">Art&iacute;culos seleccionados</div>
                        </div>
                        <div class="section_bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="main_content">
                    <!-- Featured -->
                    @if(sizeof($lstFeatured) > 0)
                        <div class="featured">
                            <div class="row">
                                <div class="{{ ((sizeof($lstFeatured) > 1)?'col-lg-8':'col-lg-12') }}">
                                    <!-- Post -->
                                    <div class="post_item post_v_large d-flex flex-column align-items-start justify-content-start">
                                        <div class="post_image"><img src="{{ Storage::disk('s3')->url($lstFeatured[0]->file) }}" alt="#"></div>
                                        <div class="post_content">
                                            <div class="post_category cat_technology"><a href="{{ URL::to('categoria/'.$lstFeatured[0]->category->slug) }}">{{ $lstFeatured[0]->category->category }}</a></div>
                                            <div class="post_title"><a href="{{ URL::to('/'.$lstFeatured[0]->slug) }}">{{ $lstFeatured[0]->title }}</a></div>
                                            <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                                <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                    <div><div class="post_author_image"><img src="{{ asset('images/author_1.jpg') }}" alt=""></div></div>
                                                    <div class="post_author_name"><a href="#">{{ $lstFeatured[0]->user->name }} {{ $lstFeatured[0]->user->last_name }}</a></div>
                                                </div>
                                                <div class="post_date"><a href="#">{{ $lstFeatured[0]->created_at }}</a></div>
                                                <div class="post_comments ml-auto"><a href="#">0 comments</a></div>
                                            </div>
                                            <div class="post_text">
                                                <p>{{ $lstFeatured[0]->excerpt }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if(sizeof($lstFeatured) > 1)
                                    <div class="col-lg-4">                            
                                        <!-- Post -->
                                        <div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
                                            <div class="post_image"><img src="{{ Storage::disk('s3')->url($lstFeatured[1]->file) }}" alt="#"></div>
                                            <div class="post_content">
                                                <div class="post_category cat_world"><a href="{{ URL::to('categoria/'.$lstFeatured[1]->category->slug) }}">{{ $lstFeatured[1]->category->category }}</a></div>
                                                <div class="post_title"><a href="{{ URL::to('/post/'.$lstFeatured[1]->slug) }}">{{ $lstFeatured[1]->title }}</a></div>
                                                <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                                    <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                        <div><div class="post_author_image"><img src="{{ asset('images/author_1.jpg') }}" alt=""></div></div>
                                                        <div class="post_author_name"><a href="#">{{ $lstFeatured[1]->user->name }} {{ $lstFeatured[1]->user->last_name }}</a></div>
                                                    </div>
                                                    <div class="post_date"><a href="#">{{ $lstFeatured[1]->created_at }}</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        @if(sizeof($lstFeatured) > 2)
                                            <!-- Post -->
                                            <div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
                                                <div class="post_image"><img src="{{ Storage::disk('s3')->url($lstFeatured[2]->file) }}" alt="#"></div>
                                                <div class="post_content">
                                                    <div class="post_category cat_technology"><a href="{{ URL::to('categoria/'.$lstFeatured[2]->category->slug) }}">{{ $lstFeatured[2]->category->category }}</a></div>
                                                    <div class="post_title"><a href="{{ URL::to('/post/'.$lstFeatured[2]->slug) }}">{{ $lstFeatured[2]->title }}</a></div>
                                                    <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                                        <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                            <div><div class="post_author_image"><img src="{{ asset('images/author_1.jpg') }}" alt=""></div></div>
                                                            <div class="post_author_name"><a href="#">{{ $lstFeatured[2]->user->name }} {{ $lstFeatured[2]->user->last_name }}</a></div>
                                                        </div>
                                                        <div class="post_date"><a href="#">{{ $lstFeatured[2]->created_at }}</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Technology -->
                    <div class="technology">
                        <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="section_title">Tecnología</div>
                                <div class="section_subtitle">Artículos seleccionados</div>
                            </div>
                            <div class="section_bar"></div>
                        </div>

                        <div class="technology_content">
                            
                            @foreach($lstPosts as $post)
                                <!-- Post -->
                                <div class="post_item post_h_large">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="post_image"><img src="{{ Storage::disk('s3')->url($post->file) }}" alt="#"></div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="post_content">
                                                <div class="post_category cat_technology"><a href="{{ URL::to('categoria/'.$post->category->slug) }}">{{ $post->category->category }}</a></div>
                                                <div class="post_title"><a href="{{ URL::to('/post/'.$post->slug) }}">{{ $post->title }}</a></div>
                                                <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                                    <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                        <div><div class="post_author_image"><img src="{{ asset('images/author_1.jpg') }}" alt=""></div></div>
                                                        <div class="post_author_name"><a href="#">{{ $post->user->name }} {{ $post->user->last_name }}</a></div>
                                                    </div>
                                                    <div class="post_date"><a href="#">{{ $post->created_at }}</a></div>
                                                    <div class="post_comments ml-auto"><a href="#">0 comentarios</a></div>
                                                </div>
                                                <div class="post_text">
                                                    <p>{{ $post->excerpt }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            @endforeach

                        </div>
                    </div>

                    @if(sizeof($lstPosts) > 0)
                        <!-- Load more button -->
                        <div class="load_more">
                            <div class="load_more_button"><a href="#">cargar más</a></div>
                        </div>
                    @endif

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">

                    <!-- Newsletter -->
                    <div class="sidebar_newsletter">
                        <div class="sidebar_title">Suscr&iacute;bete a nuestro bolet&iacute;n</div>
                        <form action="#" id="newsletter_form" class="newsletter_form">
                            <input type="email" class="newsletter_input" placeholder="Tu e-mail aquí" required="required">
                            <button class="newsletter_button">suscribir</button>
                        </form>
                    </div>

                    <!-- Extra -->
                    <div class="sidebar_extra">
                        <a href="#">
                            <div class="sidebar_title">Anuncio</div>
                            <div class="sidebar_extra_container">
                                <div class="background_image" style="background-image:url({{ asset('images/extra_1.jpg') }})"></div>
                                <div class="sidebar_extra_content">
                                    <div class="sidebar_extra_title">30%</div>
                                    <div class="sidebar_extra_title">Desc.</div>
                                    <div class="sidebar_extra_subtitle">Pide ahora</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Latest Posts -->
                    <div class="sidebar_latest">
                        <div class="sidebar_title">&Uacute;ltimos Posts</div>
                        <div class="latest_posts">
                            
                            <!-- Latest Post -->
                            @foreach($lstLatestPosts as $post)
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="latest_post_image"><img src="{{ Storage::disk('s3')->url($post->file) }}" alt="#"></div></div>
                                    <div class="latest_post_content">
                                        <div class="post_category_small cat_video"><a href="{{ URL::to('categoria/'.$post->category->slug) }}">{{ $post->category->category }}</a></div>
                                        <div class="latest_post_title"><a href="{{ URL::to('/post/'.$post->slug) }}">{{ $post->title }}</a></div>
                                        <div class="latest_post_date">{{ $post->created_at }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Most Viewed -->
                    <div class="most_viewed">
                        <div class="sidebar_title">M&aacute;s Vistos</div>
                        <div class="most_viewed_items">
                            
                            <!-- Most Viewed Item -->
                            @foreach($lstMostViewed as $index => $item)
                                <div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="most_viewed_num">0{{$index+1}}.</div></div>
                                    <div class="most_viewed_content">
                                        <div class="post_category_small cat_video"><a href="{{ URL::to('categoria/'.$item->category->slug) }}">{{ $item->category->category }}</a></div>
                                        <div class="most_viewed_title"><a href="{{ URL::to('/post/'.$post->slug) }}">{{ $item->title }}</a></div>
                                        <div class="most_viewed_date"><a href="#">{{ $item->created_at }}</a></div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="tags">
                        <div class="sidebar_title">Tags</div>
                        <div class="tags_content d-flex flex-row align-items-start justify-content-start flex-wrap">
                            @foreach($lstTags as $tag)
                                <div class="tag"><a href="etiqueta/{{$tag->slug}}">{{ $tag->tag}}</a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection


@include('components.Header')
@include('components.Menu')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')