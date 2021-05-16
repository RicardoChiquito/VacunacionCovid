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
            <a class="navbar-brand" href="#"><h5><i class="fas fa-shield-virus"></i>Syscov</h5></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 58%">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-edit"></i> Registro de Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link active" href="#"><i class="far fa-edit"></i>Registro de Vacunas</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="containerLeft" style="float: left; width: 30%; height:650px; background-color:rgb(52, 58, 64);">
        <ul class="list-group">
            <a href="/" style="color: white;"><li class="list-group-item" style="background-color:rgb(52, 58, 64);"><h4><i class="fas fa-syringe"></i> Lista de Empleados</h4></li></a>
            <a href="/" style="color: white;"><li class="list-group-item" style="background-color:rgb(52, 58, 64);"><h4><i class="fas fa-users"></i> Lista de Vacunas</h4></li></a>
            <li class="list-group-item" style="background-color:rgb(52, 58, 64);"><h4 style="color: white;"><i class="fas fa-thermometer"></i> Editar Empleado</h4></li>
            <li class="list-group-item" style="background-color:white; border-radius: 25px;border-bottom-right-radius: 25px" aria-current="true"><h4><i class="fas fa-user-edit"></i> Editar Vacuna</h4></li>

        </ul>
    </div>
    <div class="containerRight" style="float: right; width: 70%; height:650px;">
      <div class="containerCard" style="margin-left:5%; margin-top:5%;">
        <div class="row">
          <!--Card Izq-->
          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="../img/vaccine.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Datos Actuales</h5>
                  <div class="row">
                    <div class="col-6"><h6>Nombre:</h6></div>
                    <div class="col-6"><h6 style="color:rgb(0, 0, 153);">{{$Vacuna->Nombre}}</h6></div>
                    <div class="col-6"><h6>Fecha de Llegada:</h6></div>
                    <div class="col-6"><h6 style="color:rgb(0, 0, 153);">{{$Vacuna->Fecha_Llegada}}</h6></div>
                  </div>
              </div>
            </div>
          </div>
          <!-- Card Derecha -->
          <div class="col-5">
            <div class="card" style="width: 36rem; margin-left:16%;">
              <div class="card-body">
                <h5 class="card-title">Nuevos datos del empleado</h5>
                <p class="card-text">Llene con la nueva información del empleado</p>
                <form class="form-register3" action="guardaEdicion" method="POST" enctype="multipart/form-data">
                @csrf
                  <input type="hidden" name="id" value="{{$Vacuna->id}}">
                    <div class="row">
                      <div class="col-12">
                      <h4>Nombre</h4>
                        <input class="controls2" style="width: 100%;" type="text" name="Nombre" value="{{$Vacuna->Nombre}}"/>
                        <h4>Fecha de Llegada:</h4>
                        <input class="controls2" style="width: 100%;" type="text" name="Fecha_Llegada" value="{{$Vacuna->Fecha_Llegada}}"/>
                        <div class="buttons" style="margin-top: 3%">
                          <div class="row">
                            <div class="col-6" ><button style="width: 100%;" type="submit" class="btn btn-success"><i class="fas fa-check"></i> Editar</button>
                          <a href="{{url('/muestraVacuna')}}"></div>
                            <div class="col-6"><button style="width: 100%;" type="button" class="btn btn-danger"><i class="fas fa-undo"></i> Regresar</button></a></div>
                          </div>  
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Fin Derecha -->
        </div>
      </div>
    </div>

</body>
</html>