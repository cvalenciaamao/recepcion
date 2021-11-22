<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Styles -->
        
        <style>
            body{font-family: Arial, Helvetica, sans-serif,;background: #353635; text-align:initial;}.menu{list-style: none;padding:1px;background:#f3a807;width: 1000%;max-width: 1180px;position: absolute; left: 93px;}.menu li a{text-decoration: none;color: white;padding:10px;display: block;}.menu li{display: inline-block;text-align: center; left: 100px;}.menu li a:hover{background:#e9c422;}.titulo{text-align: center;}.item-text{max-width: 100%;display: block;}
        </style>
    </head>
    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <ul class="menu">
                         <h1>HOTEL SAN BLAS___</h1>
                         
                        <li><a href="#">INICIO</a></li>
                        <li><a href="#">INFORMACION GENERAL</a></li> 
                        <li><a href="#">OFERTAS</a></li>
                        <li><a href="Habitacion">HABITACIONES</a></li>
                        <li><a href="#">RESTAURANTES</a></li> 
                        <li><a href="#">CONTACTOS</a></li>
                        <li><a href="#">INICIE SESION O INSCRIBASE</a></li> 
                </ul>
            </div>
        </div>
        <br>
        @yield('content')
        
    </body>
</html>