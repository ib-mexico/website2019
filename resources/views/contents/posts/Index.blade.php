@section('title', $post->title)

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/single.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/single_responsive.css') }}" />
@endsection

@section('home_intro')
    <!-- Home -->
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ Storage::disk('s3')->url($post->file) }}" data-speed="0.8"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">{{ $post->title }}</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="{{ URL::to('/') }}">Inicio</a></li>
                                    <li><a href="#">{{ $post->category->category }}</a></li>
                                    <li>{{ $post->title }}</li>
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
    <div class="container">
        <div class="row">
            <!-- Single Post -->
            <div class="col-lg-9">

                <div class="single_post">
                    <div class="post_image"><img src="{{ Storage::disk('s3')->url($post->file) }}" alt="#"></div>
                    <div class="post_content">
                        <div class="post_category cat_technology"><a href="/categoria/{{$post->category->slug}}">{{ $post->category->category }}</a></div>
                        <div class="post_title"><a href="#">{{ $post->title }}</a></div>
                        <div class="post_info d-flex flex-row align-items-center justify-content-start">
                            <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                <div><div class="post_author_image"><img src="/images/author_1.jpg" alt=""></div></div>
                                <div class="post_author_name"><a href="#">{{$post->user->name}} {{$post->user->last_name}}</a></div>
                            </div>
                            <div class="post_date"><a href="#">{{ $post->created_at }}</a></div>
                            <div class="post_comments_num ml-auto"><a href="#">0 comentarios</a></div>
                        </div>
                        <div class="post_text">
                            <p>{!! $post->body !!}</p>                            
                        </div>
                    </div>

                    <!-- Social Share -->
                    <div class="post_share d-flex flex-row align-items-center justify-content-start">
                        <div class="post_share_title">Compartir:</div>
                        <ul class="post_share_list d-flex flex-row align-items-center justify-content-center">
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    
                    <!-- Comments -->
                    <div class="post_comments_container">
                        <div class="post_comments_title">1 Comentario</div>

                        <!-- Comments -->
                        <div class="post_comments">                        
                            <ul class="post_comments_list">
                                
                                <!-- Comment -->
                                <li class="comment">
                                    <div class="comment_info d-flex flex-row align-items-center justify-content-start">
                                        <div><div class="comment_image"><img src="/images/comment_1.jpg" alt=""></div></div>
                                        <div class="comment_author"><a href="#">James Williams</a></div>
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_text">
                                            <p>Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum.</p>
                                        </div>
                                        <div class="comment_reply"><a href="#">Reply</a></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Reply  -->
                    <div class="reply_form_container">
                        <div class="reply_form_title">Dejar un comentario</div>
                        <form action="#" id="reply_form" class="reply_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="reply_input" placeholder="Nombre" required="required">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="reply_input" placeholder="E-mail" required="required">
                                </div>
                            </div>
                            <textarea class="reply_input reply_textarea" placeholder="Mensaje" required="required"></textarea>
                            <button class="reply_button trans_200">Enviar</button>
                        </form>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">

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
                                        <div class="latest_post_title"><a href="{{ URL::to('/'.$post->slug) }}">{{ $post->title }}</a></div>
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
                                        <div class="most_viewed_title"><a href="{{ URL::to('/'.$post->slug) }}">{{ $item->title }}</a></div>
                                        <div class="most_viewed_date"><a href="#">{{ $item->created_at }}</a></div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- Extra -->
                    <div class="sidebar_extra">
                        <a href="#">
                            <div class="sidebar_title">Advertisement</div>
                            <div class="sidebar_extra_container">
                                <div class="background_image" style="background-image:url(images/extra_2.jpg)"></div>
                                <div class="sidebar_extra_content">
                                    <div class="sidebar_extra_title">30%</div>
                                    <div class="sidebar_extra_title">off</div>
                                    <div class="sidebar_extra_subtitle">Buy online now</div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/single.js') }}"></script>
@endsection


@include('components.Header')
@include('components.Menu')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')