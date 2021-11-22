@extends('layouts.plantilla')

@section('title','habitaciones')
@section('content')
<div class="container">
    <style>
        *{padding: 5px;margin:0px}body{background-color:#ffff;font-family: sans-serif;position: absolute;}.container{display: grid;grid-template-columns: repeat(1,1fr);width: 90%;margin-left: auto;margin-right: auto;margin-top: 3em;margin-bottom: 3em;}.boton{background-color: rgb(240, 192, 34);border: aliceblue;}@media screen and(min-width: 960px){.container{grid-template-columns: repeat(3, 1fr);}}.container{max-width: 1000px;}#boton:hover{cursor: pointer;}
        }
    </style>
    <form action="#" method="GET">
    </div>
    <div class="item">
        <img src="public/imagenes/suite.jpg" alt="" class="item-img">
        <div class="item-text">
            <h3>Junior suite:</h3>
            <p>dos o más habitaciones dobles con sus correspondientes baños y un salón en común.</p>
            <li><a href="habitaciones/create">reservar</a></li>
        </div>
    </div>
    <div class="item">
        <img src="" alt="" class="item-img">
        <div class="item-text">
            <h3>Individuales:</h3>
            <p>desde 6 m2 útiles en un hotel de 1 estrella y desde 10 m2 en otro de 5 estrellas</p>
            <li><a href="habitaciones/create">reservar</a></li>
        </div>
    </div>
    <div class="item">
        <img src="" alt="" class="item-img">
        <div class="item-text">
            <h3>Dobles: </h3>
            <p>desde 11 m2 en 1 estrella y desde 16,5 m2 en 5 estrellas</p>
            <li><a href="habitaciones/create">reservar</a></li>
        </div>
    </div>
    <div class="item">
        <img src="" alt="" class="item-img">
        <div class="item-text">
            <h3>Habitaciones matrimoniales:</h3>
            <p>en referencia a las habitaciones dobles donde las dos plazas para dormir se sitúan en una cama matrimonial, para diferenciarlas de las dobles con dos camas separadas</p>
            <li><a href="habitaciones/create">reservar</a></li>
        </div>
    </div>
    <div class="item">
        <img src="" alt="" class="item-img">
        <div class="item-text">
            <h3>Habitaciones familiares:</h3>
            <p>se diferencian de las demás por ser espaciosas y admitir la posibilidad de camas supletorias, incluidas camas individuales pequeñas para niños</p>
            <li><a href="habitaciones/create">reservar</a></li>
        </div>
    </div>
    <div class="item">
        <img src="" alt="" class="item-img">
        <div class="item-text">
            <h3>Suite principal:</h3>
            <p>la más lujosa del complejo hotelero, con más espacio y servicios que el resto</p>
            <li><a href="habitaciones/create">reservar</a></li>
        </div>
    </div>
</div>
</form>
@endsection
<?php

?>