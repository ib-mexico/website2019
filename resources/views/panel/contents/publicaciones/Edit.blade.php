@section('title', 'Publicaciones')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
@endsection

@section('content')
{!! Form::open(['route' => 'update-post', 'method' => 'PUT', 'files' => true]) !!}
    <input type="hidden" name="hddPkPost" value="{{$objPost->pk_post}}" />

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modificar Publicaci&oacute;n</h4>
                    <p class="card-description">Información General</p>
                    
                    <div class="form-group">
                        <label for="txtTitle">Título</label>
                        <input type="text" class="form-control" id="txtTitle" name="txtTitle" placeholder="Título del post" value="{{$objPost->title}}" required />
                    </div>
                
                    <div class="form-group">
                        <label for="txtSlug">URL Amigable</label>
                        <input type="text" class="form-control" id="txtSlug" name="txtSlug" placeholder="esto-es-un-ejemplo" value="{{$objPost->slug}}" required/>
                    </div>

                    <div class="form-group">
                        <label for="txtExcerpt">Extracto</label>
                        <textarea class="form-control" id="txtExcerpt" name="txtExcerpt" rows="2" required>{{$objPost->excerpt}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="txtBody">Contenido</label>
                        <textarea class="form-control" id="txtBody" name="txtBody" rows="5">{!!$objPost->body!!}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="cmbCategory">Categoría</label>
                        <select class="form-control" id="cmbCategory" name="cmbCategory">
                            @foreach($categories as $item)
                                <option value="{{$item->pk_category}}">{{ $item->category }}</option>
                            @endforeach
                        </select>
                    </div>                    
                    
                    <button type="submit" class="btn btn-success mr-2">Guardar</button>
                    <button class="btn btn-light">Cancelar</button>                    
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Imagen de la Publicación</h4>
                            <p class="card-description">La imagen deben ser (960 x 750)</p>
                            <div class="form-group">
                                <label>Imágen</label>
                                <input type="file" name="image" class="form-control" />
                            </div>                                    
                        </div>
                    </div>
                </div>

                <div class="col-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Estatus</h4>
                            <p class="card-description">Selecciona el estatus que tendrá la publicación al ser creada</p>

                            <div class="form-group">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus1" value="PUBLISHED" checked> Publicado
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus2" value="DRAFT"> Borrador
                                    </label>
                                </div>
                            </div>

                            <hr />

                            <h4 class="card-title">Tags</h4>
                            <div class="form-group">
                                <label for="cmbTags">Selecciona las etiquetas a relacionar</label>
                                <select id="cmbTags" name="cmbTags[]" class="form-control select2-multiple" multiple="multiple">
                                    @foreach($tags as $item)
                                        <option value="{{$item->pk_tag}}">{{ $item->tag }}</option>
                                    @endforeach
                                </select> 
                            </div>

                            <hr />
                            <h4 class="card-title">Post Destacado</h4>
                            <p class="card-description">Selecciona si la publicación será destacada en la página web</p>

                            <div class="form-group">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rdHighlight" id="rdHighlight1" value="0" checked> No
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rdHighlight" id="rdHighlight2" value="1"> Sí
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@endsection

@section('scripts')
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    {{--<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>--}}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=o3myw93jxyb8rtmkdckvyptqgdkxf69orqm77h57frjjt5v0"></script>
    <script src="{{ asset('assets/vendors/jquery-stringtoslug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#txtTitle, #txtSlug").stringToSlug({
                callback: function(text) {
                    $("#txtSlug").val(text);
                }
            })

            $('.select2-multiple').select2();
            
            tinymce.init({
                selector: '#txtBody',
                theme: 'modern',
                height: 400,
                plugins: [
		            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		            'searchreplace wordcount visualblocks visualchars code fullscreen',
		            'insertdatetime media nonbreaking save table contextmenu directionality',
		            'emoticons template paste textcolor colorpicker textpattern imagetools'
		        ],
		        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		        toolbar2: 'print preview media | forecolor backcolor emoticons',
		        image_advtab: true
            });
        });        
    </script>
@endsection

@include('panel.components.Navbar')
@include('panel.components.Sidebar')
@include('panel.components.Footer')
@include('panel.components.Scripts')
@include('panel.components.Stylesheets')

@extends('panel.components.Main')