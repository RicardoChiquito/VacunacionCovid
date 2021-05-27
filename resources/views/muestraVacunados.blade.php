<!doctype html>
<html lang="en">
    <head>
    <title>Regsitro de Vacunas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}"><i class="fas fa-shield-virus"></i>Syscov</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 58%">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('/')}}"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('/agregaUsuario')}}"><i class="fas fa-user-edit"></i> Registro de Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link active" href="{{url('/agregaVacuna')}}"><i class="far fa-edit"></i>Registro de Usuarios</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="containerLeft" style="float: left; width: 30%; height:650px; background-color:rgb(52, 58, 64);">
        <ul class="list-group">
            <a href="/muestraUsuario"  style="color: black;"><li class="list-group-item" style="background-color:white); border-top-right-radius: 25px;border-bottom-right-radius: 25px" aria-current="true"><h4><i class="fas fa-users"></i> Lista de Empleados</h4></li></a>
            <a href="/muestraVacuna" style="color: white;"><li class="list-group-item" style="background-color:rgb(52, 58, 64);"><h4><i class="fas fa-syringe"></i> Lista de Vacunas</h4></li></a>
        </ul>
    </div>

    <div class="containerRight" style="float: right; width: 70%; height:650px;">
    <h2 style="margin-left: 5%; margin-top: 5%"><i class="fas fa-address-book"></i> Lista de Empleados Vacunados</h2>

        <div class="tableC" style="">
        <table class="table table-success table-striped" style="width:90%; margin-left:5%; margin-top:1%; border-radius: 10px; box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
-webkit-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre del Empleado</th>
                    <th>Vacuna Suministrada</th>
                    <th>Fecha de Aplicación</th>
                </tr>  
            </thead>
                <tbody>
                @foreach($Vacunado as $Vacunado)
                    <tr>
                        <td>{{$Vacunado->id}}</td>
                        <td>{{$Vacunado->Nombre}}</td>
                        <td>{{$Vacunado->Vacuna}}</td>
                        <td>{{$Vacunado->FechaAplicacion}}</td>
                        <td><h6><a href="/editar2/{{$Vacunado->id}}" style="color:green;"><i class="far fa-edit"></i> Editar</a></h6></td>
                        <td><h7><a href="/borrar2/{{$Vacunado->id}}" style="color:red;"><i class="far fa-trash-alt"></i>Eliminar</a></h7></td>
                    </tr> 
                    @endforeach
                </tbody>
        </table>
        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>