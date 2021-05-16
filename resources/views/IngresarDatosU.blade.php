<!doctype html>
<html lang="en">
    <head>
    <title>Regsitro de Usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uh3+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Syscov</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 65%">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#" style="text-decoration: underline">Regsitro de Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="#">Registro de Vacuna</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="containerLeft" style="float: left; width: 40%; height:650px;">
        <img src="../img/img1.jpg" alt="" srcset="" style="width:100%;height: 100%;">
    </div>

    <div class="containerRight" style="float: right; width: 60%; height:650px;">
        <div class="card" style="width: 45rem; margin: 5% ">
            <div class="card-body">
                <h1>Registro de Empleados</h1>
                <h6 class="card-subtitle mb-2 text-muted">Deben ser registrados los datos mas importantes de los empleados</h6>
                <!--Esto corresponde a la parte del registro en la base de datos-->
                <form class="form-register" action="/envio" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3>Nombre:</h3>
                    <input class="controls2" style= "width:100%; border-radius: 5px" type="text" name="Nombre" placeholder="Ingresa el Nombre"/><br>
                    <div class="apellidos">
                        <div class="row">
                            <div class="col-6">
                            <h2>ApellidoPaterno</h2>
                                <input class="controls2" style= "width:100%; border-radius: 5px" type="text" name="ApellidoP" placeholder="Ingresa tu Apellido Paterno"/><br>
                            </div>
                            <div class="col-6">
                                <h2>ApellidoMaterno:</h2>
                            <input class="controls2" style= "width:100%; border-radius: 5px" type="text" name="ApellidoM" placeholder="Ingresa tu Apellido Materno"/><br>
                            </div>
                        </div>
                    </div>
                    <h2>Direccion:</h2>
                    <input class="controls2" style= "width:100%; border-radius: 5px" type="text" name="Direccion" placeholder="Ingresa tu Direccion"/><br>
                    <h2>Telefono:</h2>
                    <input class="controls2" style= "width:100%; border-radius: 5px" type="text" name="Telefono" placeholder="Ingresa tu Telefono"/><br>
                    <div class="botones">
                        <div class="row" style = "margin-top: 5%">
                            <div class="col-4">
                            <button class="btn btn-success" style="width:100%;" type="submit">Agregar</button>
                            </div>
                            <div class="col-4">
                            <a href="{{url('/')}}"><button type="button" style="width:100%;" class="btn btn-danger"><i class="fas fa-undo-alt"></i>Regresar</button></a>
                            </div>
                            <div class="col-4">
                            <a href="{{url('/muestraUsuario')}}"><button type="button" style="width:100%;" class="btn btn-primary btn btn-dark">Ver Usuarios</button></a>
                            </div>
                        </div>
                    </div>
                </form>    
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