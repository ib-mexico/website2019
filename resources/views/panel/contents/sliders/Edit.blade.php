@section('title', 'Sliders')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    @if(Session::has('error_message'))
        <div class="alert alert-danger col-md-12 col-sm-12 alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('error_title' )}}!</strong> {{ Session::get('error_message' )}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    </div>
</div>

{!! Form::open(['route' => 'update-slider', 'method' => 'POST', 'files' => true]) !!}
    <input type="hidden" name="hddPkSlider" value="{{$objSlider->pk_slider}}" />
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title">Imágen actual</h4>
                    <p class="card-description">Las proporciones de esta imágen no son las reales.</p>
                    <img src="{{Storage::disk('s3')->url($objSlider->file)}}" width="80%" />
                </div>
            </div> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modificar Slider</h4>
                    <p class="card-description">La imágen cargada se mostrará en el slider principal de la página web</p>
                    
                    <div class="form-group">
                        <label for="txtTitle">Título</label>
                        <input type="text" class="form-control" id="txtTitle" name="txtTitle" placeholder="Título del slider" value="{{ $objSlider->title }}" />
                    </div>
                
                    <div class="form-group">
                        <label for="txtBody">Contenido</label>
                        <textarea class="form-control" id="txtBody" name="txtBody" rows="2">{!! $objSlider->body !!}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="txtUrl">URL (Opcional)</label>
                        <input class="form-control" id="txtUrl" name="txtUrl" placeholder="http://www.dominio.com/ejemplo" />
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
                            <h4 class="card-title">Imagen del Slider</h4>
                            <p class="card-description">La imagen debe ser (1920 x 790)</p>
                            <div class="form-group">
                                <label>Imágen</label>
                                <input type="file" name="image" class="form-control" />
                            </div> 
                            
                            <hr />

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
{!! Form::close() !!}
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

        });        
    </script>
@endsection

@include('panel.components.Navbar')
@include('panel.components.Sidebar')
@include('panel.components.Footer')
@include('panel.components.Scripts')
@include('panel.components.Stylesheets')

@extends('panel.components.Main')