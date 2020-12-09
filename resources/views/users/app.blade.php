<html>
    <head>
        <title>App Name - @yield('title')</title>
        y
        @livewireStyles
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        @livewireScripts
    </body>
</html>
