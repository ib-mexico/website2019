<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{$_PAGE_TITLE}} | @yield('title', '*** TITLE ***')</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Tech Mag template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('components.Stylesheets')
</head>

<body>
    <div class="super_container">
        @yield('components.Header')

        @yield('components.Menu')

        @yield('home_intro','*** HOME_INTRO ***')
        
        <div class="content_container">
            @yield('content', '*** CONTENT ***')
        </div>
        
        @yield('components.Footer')

        <div class="icon-float">
            <a href="https://get.teamviewer.com/qs_ibmexico" target="_blank" title="Soporte Teamviewer">
                <img src="{{ asset('images/ico/teamviewer_2.png') }}" />
            </a>
        </div>
    </div>
    
    @yield('components.Scripts')
</body>
</html>