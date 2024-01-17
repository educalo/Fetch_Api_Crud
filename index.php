<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>CRUD FETCH</title>
</head>
<body>
    <div class="container" >
        <div class="row mt-3">
            <div class="col-4">
            <form>
                <div class="mb-3">
                    <label for="nombre">Tarea</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
            
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Añade descripcion aqui..." id="descripcion" style="height: 300px"></textarea>
                    <label for="descripcion"> Descripcion </label>
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="fecha">
                </div>
                

                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary" id="insertar">Grabar</button>                    
                </div>
                
            </form>
            </div>
            <div class="col-8">
            <table class="table">
                <thead>
                    <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Tarea</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="cuerpoTabla">

                </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>
</html>