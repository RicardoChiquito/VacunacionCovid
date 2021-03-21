<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" href="app.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="stylePagina.css"!-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"!-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Agrega Productos</title>
</head>
<body>
@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    html, body {
    background-color: #A9F5F2;;
    color: black;
    font-family: 'Nunito', sans-serif;
    font-weight: 10px;
    font-size:18px;
    height: 100px;
    margin: 0;
    }
</style>
@section('content')
    <form class="form-register2" action="/envio" method="POST" enctype="multipart/form-data">
        @csrf
        <h1> Formulario de Producto </h1>
        <h2>Nombre del Producto:</h2>
        <input class="controls2" type="text" name="Nombre" placeholder="Ingresa el Nombre del Producto"/><br>
        <h2>Descripcion:</h2>
        <input class="controls2"  type="text" name="Descripcion" placeholder="Descripcion del Producto"/><br>
        <h2>Numero de Piezas:</h2>
        <input class="controls2"  type="text" name="NumeroProductos" placeholder="Numero de Productos"/><br>
        <h2>Costo:</h2>
        <input class="controls2"  type="text" name="Precio" placeholder="Costo del Producto"/><br>
        <h2>Imagen del Producto:</h2>
        <input type="file"class="controls2" name="arch" id="arch" accept="image/png, image/jpeg">
        <br><br><button class="btn btn-primary btn btn-dark" type="submit">Agregar</button>
        <a href="{{url('/home')}}">
            <button type="button" class="btn btn-primary btn btn-dark">Regresar</button>
        </a>
    </form>    

@endsection   
</body>
</html>