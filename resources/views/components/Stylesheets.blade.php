@section('components.Stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-4.1.2/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/helpers.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">    
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}" />

    @yield('stylesheets')
@endsection