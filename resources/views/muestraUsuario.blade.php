
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Regalos Sandy</title>
<style>
    html, body {
        background-color: #848484;
        color: black;
        font-style: oblique;
        font-family: cursive;
        font-weight: 10px;
        font-size:18px;
        height: 100px;
        margin: 0;
        align-items: center;
        text-align: center;
        justify-content: center;
    }	
    .centrado{
        text-align:center;
        font-style: oblique;
        font-family: cursive;
        font-weight: 10px;
        font-size:35px;
    }
    .btn-primary{
        align-items: center;
        text-align: center;
        justify-content: center;
    }
	
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="centrado">Listado de Productos</p><br>
             <table class="table table-hover table-dark" >
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Dirección</th>  
                        <th>Telefono</th>                      
                        <th>Editar Producto</th>
                        <th>Quitar Producto</th>
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
                        <td><a href="/editar2/{{$Usuario->id}}">Editar</a></td>
                        <td><a href="/borrar2/{{$Usuario->id}}">Eliminar</a></td>
                       
                    </tr> 
                     @endforeach
                </tbody>
            </table>
            <a href="{{url('/agregaUsuario')}}">
               <button type="button" class="btn btn-primary  btn btn-dark" >Regresar</button>
            </a>
            
        </div>
    </div>
</div>
