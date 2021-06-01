<!doctype html>
<html lang="en">
    <head>
        <title>Syscov</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}"><h5><i class="fas fa-shield-virus"></i>Syscov</h5></a>
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
                    <a class="nav-link active" href="{{url('/agregaVacuna')}}"><i class="far fa-edit"></i>Registro de Vacunas</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="containerLeft" style="float: left; width: 30%; height:650px; background-color:rgb(52, 58, 64);">
            <ul class="list-group">
                <a href="/muestraUsuario" style="color: black;"><li class="list-group-item" style="background-color:white; border-top-right-radius: 25px;border-bottom-right-radius: 25px" aria-current="true"><h4><i class="fas fa-syringe"></i> Lista de Empleados</h4></li></a>
                <a href="/muestraVacuna" style="color: white;" ><li class="list-group-item" style="background-color:rgb(52, 58, 64);"><h4><i class="fas fa-users"></i> Lista de Vacunas</h4></li></a>
                <a href="/muestraVacunados" style="color: black;"><li class="list-group-item" style="background-color:white; border-top-right-radius: 25px;border-bottom-right-radius: 25px" aria-current="true"><h4><i class="fas fa-syringe"></i> Lista de Vacunados</h4></li></a>
            </ul>
        </div>

        <div class="containerRight" style="float: left; width: 70%; height:650px;">
        <h1 Align="center">Aquí se registra la vacuna suministrada a cada empleado</h1>
            <form action="/conteoVacunado" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="col-form-label">Nombre Empleado</label>
                            <select class="form-control" name="Nombre" id="exampleFormControlSelect1">
                                @foreach($Usuario as $p)
                                <option name="Nombre"> {{ $p->Nombre }} {{$p->ApellidoP}} {{$p->ApellidoM}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="col-form-label">Nombre Vacuna</label>
                            <select class="form-control" name="Vacuna" id="exampleFormControlSelect1">
                                <option name="Vacuna" value="Sin Vacuna"> Sin Vacuna </option>
                                @foreach($Vacuna as $u)
                                <option name="Vacuna"> {{ $u->Nombre }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label class="col-form-label">Fecha de Aplicación</label>
                            <input type="date" name="FechaAplicacion" placeholder="Inserte fecha de aplicación dd/mm/aaaa" id="">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label class="col-form-label">Desea Vacunarse?</label>
                            <select class="form-control" name="Decision" id="exampleFormControlSelect1">
                                <option name="Decision" value="1"> Si se vacunó </option>
                                <option name="Decision" value="2"> No se vacunó </option>
                            </select>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-info"
                        style="width: 90%; margin-left:5%; margin-bottom: 5%;">Enviar</button>
            </div>
            </form>
        </div>

        
        

        <div class="row">
            <div class="col-2">
                <div class="tableC" style="">
                <table class="table table-success table-striped" style="margin-left:15%; border-radius: 10px; box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
        -webkit-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
        -moz-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Dirección</th>  
                            <th>Telefono</th>              
                        </tr>  
                    </thead>
                        <tbody>
                        @foreach($Usuario as $Usuario)
                            <tr>
                                <td>{{$Usuario->id}}</td>
                                <td>{{$Usuario->Nombre}}</td>
                                <td>{{$Usuario->ApellidoP}}</td>
                                <td>{{$Usuario->ApellidoM}}</td>
                                <td>{{$Usuario->Direccion}}</td>
                                <td>{{$Usuario->Telefono}}</td>
                            </tr> 
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>

        <div class="col-2">
        
        </div>

        <div class="col-2">
            <div class="tableC" style="">
                <table class="table table-success table-striped" style="margin-left:160%; border-radius: 10px; box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
        -webkit-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
        -moz-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);">
                    <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>fecha de llegada</th>
                            </tr>  
                        </thead>
                        <tbody>
                            @foreach($Vacuna as $Vacuna)
                            <tr>
                                <td>{{$Vacuna->id}}</td>
                                <!--<td><img src="{{ asset('/storage/images/'.$Vacuna->Foto) }}"  width="180" height="100"></td>-->
                                <td>{{$Vacuna->Nombre}}</td>
                                <td>{{$Vacuna->Fecha_Llegada}}</td>
                            </tr> 
                            @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>