@extends('layouts.plantilla')

@section('title','reservas')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container">
<style>.estilo{text-align: justify;}form{width: 570px;margin: auto;background:rgba(197, 192, 192, 0.4);padding: 10px 20px;box-sizing: border-box;border-radius: 7px;}input{width: 100%;}#boton{background: rgb(56, 54, 54);padding: 5px;}.xd{color: white;}#boton:hover{cursor: pointer}</style>
<br><br><br><br>
<form action="" method="GET" class="estilo">
    <label for="">RESERVAR HABITACION</label><br>
    <label for=""><h6>*campos obligatorios</h6></label><br>
    <label for="">Nombres
        <input type="text" name="nombres" value="{{ old('nombres')}}" placeholder="sans" required>
    </label>
    <label for="">Apellidos
        <input type="text" name="apellidos" value="{{ old('apellidos')}}" placeholder="serif" required>
    </label><br>
    <label for="">Correo electronico
        <input type="email" name="email" value="{{ old('correo')}}" placeholder="ejemplo@gmail.com" required>
    </label>
    <label for="">Telefono
        <input type="number" name="telefono" value="{{ old('telefono')}}" required><br>
    </label><br>
    <label for="">DETALLES DE PAGO</label><br>
    <label for=""><h6>*seleccione el metodo de pago</h6></label><br>
    <label for="">
        <input type="radio" name="tarjeta" value="{{ old('tarjeta')}}">
        Tarjeta de credito o debito
    </label><br>
    <label for="">
        <input type="radio" name="tarjeta" value="{{ old('tarjeta')}}">
        Paypal
    </label><br>
    <label for=""><h6>*campos obligatorios</h6></label><br>
    <label for="">Nombres
        <input type="text" name="tnombres" value="{{ old('tnombres')}}" placeholder="sans" required>
    </label>
    <label for="">Apellidos
        <input type="text" name="tapellidos" value="{{ old('tapellidos')}}" placeholder="serif" required>
    </label><br>
    <label for="">Numero de tarjeta
        <input type="number" name="tnumero" value="{{ old('tnumero')}}" placeholder="0000 0000 0000 0000" required>
    </label>
    <label for="">Fecha de caducidad
        <input type="date" name="tcaducidad" value="{{ old('tcaducidad')}}" placeholder="MM/AA" required>
    </label><br>
    <label for="">Codigo de seguridad
        <input type="number" name="tcodigo" value="{{ old('tcodigo')}}" placeholder="000" required>
    </label><br>
    <label for=""><h6>*Terminos de la reserva</h6></label><br>
    <label for="">
        <p>Al hacer clic en “Confirmar esta reserva”, declaras que has leído y aceptas nuestros términos, condiciones y la política de privacidad</p>
    </label><br>
    <label for="">
        <input class="xd" type="submit" value="Confirmar esta reserva" id="boton">
    </label>
    

</form>
</div>
@endsection
