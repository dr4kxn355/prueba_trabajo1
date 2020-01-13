<!DOCTYPE html>
<html>
    <head>
        <title>Prueba trabajo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h2>Editar</h2>
            <form class="form-horizontal" action="{{route('store')}}" method="post">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="age">Edad:</label>
                    <div class="col-sm-10">          
                        <input type="number" class="form-control" id="age" placeholder="Edad" name="age" min="5" max="90" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="country">País:</label>
                    <div class="col-sm-10">  
                        <select class="form-control" id="country" name="country">
                            <option value="mexico">México</option>
                            <option value="argentina">Argentina</option>
                            <option value="españa">España</option>
                        </select>       
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </form>
            
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="{{route('index')}}"><button type="button" class="btn btn-primary">Regresar a lista</button></a>
                </div>
            </div>
        </div>
    </body>
</html>