<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agrega Productos</title>
</head>
<body>
    
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

    <form class="form-register" action="/envioV" method="POST" enctype="multipart/form-data">
        @csrf
        <h1> Formulario de Usuario </h1>
        <h2>Nombre:</h2>
        <input class="controls2" type="text" name="Nombre" placeholder="Ingresa el Nombre"/><br>
        <h2>vacuna</h2>
        <input class="controls2"  type="text" name="Fecha_Llegada" placeholder="Ingresa fecha de llegada"/><br>
        <br><br><button class="btn btn-primary btn btn-dark" type="submit">Agregar</button>
        <a href="{{url('/')}}">
            <button type="button" class="btn btn-primary btn btn-dark">Regresar</button>
        </a>
        <a href="{{url('/muestraVacuna')}}">
        <button type="button" class="btn btn-primary btn btn-dark">Ver vacunas</button>
    </form>    
  
</body>
</html>