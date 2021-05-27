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
            <a class="navbar-brand" href="/"><i class="fas fa-shield-virus"></i>Syscov</a>
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

    <div class="containerLeft" style="float: left; width: 40%; height:650px;">
        <img src="../img/img2.jpg" alt="" srcset="" style="width:100%;height: 100%;">
    </div>

    <div class="containerRight" style="float: right; width: 60%; height:650px;">
        <div class="card" style="width: 45rem; margin: 5%; ">
            <div class="card-body" style="box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
-webkit-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 16px 3px rgba(0,0,0,0.75); border-radius:10px;">
                <h1><i class="fas fa-pills"></i> Registro de Vacunas</h1>
                <br>
                <h6 class="card-subtitle mb-2 text-muted">Deben ser registrados los datos mas importantes de la vacuna</h6>
                <!--Esto corresponde a la parte del registro en la base de datos-->
                <form class="form-register" action="/envioV" method="POST" enctype="multipart/form-data">
                @csrf
                    <h3><i class="fas fa-pen"></i> Nombre de la Vacuna:</h3>
                    <input class="controls2" type="text" style="width:100%; border-radius:10px; margin-bottom:5%;" name="Nombre" placeholder="Ingresa el Nombre de la vacuna"/><br>
                    <h3><i class="fas fa-calendar-alt"></i> Información de la Vacuna</h3>
                    <input class="controls2"  type="date" style="width:100%; border-radius:10px;" name="Fecha_Llegada" placeholder="Ingresa fecha de llegada con el formato dd/mm/aaaa"/><br>
                    
                    <div class="buttomn" style ="margin-top: 5%">
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-success" style="width:100%" type="submit"><i class="fas fa-check"></i> Agregar</button>
                            </div>
                            <div class="col-4">
                                <a href="{{url('/')}}"><button type="button" style="width:100%" class="btn btn-danger"><i class="fas fa-undo"></i> Regresar</button></a>
                            </div>
                            <div class="col-4">
                                <a href="{{url('/muestraVacuna')}}"><button type="button" style="width:100%" class="btn btn-primary btn btn-dark"><i class="fas fa-list-ul"></i> Ver vacunas</button>
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