<!DOCTYPE html>
<html>
    <head>
        <title>Prueba trabajo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script>
            function confirmarEliminar(id){
                if (window.confirm("¿Eliminar registro con ID "+id+"?")) { 
                    var url = '{{ route("eliminar", ":id") }}';
                    url = url.replace(':id', id);
                    window.location.href=url;
                }
            }
        </script>
    </head>
    <body>
    <div class="container">
        @if(isset($success))
            <script>alert("{{$success}}")</script>
        @endif
        <h2>Clientes</h2>
        <a href="{{route('crear')}}"><button class="btn btn-info btn-xs">Nuevo cliente</button></a>
        <div class="table-responsive">          
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>País</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($cliente as $client)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->age}}</td>
                            <td>{{$client->country}}</td>
                            <td>
                            <a href="{{route('editar',$client->id)}}"><button class="btn btn-info btn-xs">Editar</button></a>
                            <a onclick="confirmarEliminar({{$client->id}})"><button class="btn btn-warning btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </body>
</html>