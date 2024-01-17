
<?php
    /*puedo hacer localhost/actualizar.php/id=1
    para comprobar que me devuelve en el formulario los datos del id=1
    */
    include("conexion.php");

    $id = $_GET['id'];
    
    $sql= "SELECT * FROM tareas WHERE id = $id";

    $resultado=mysqli_query($conn,$sql);

    $fila = mysqli_fetch_assoc($resultado);

    $nombre=$fila['nombre'];
    $descripcion=$fila['descripcion'];
    $fecha=$fila['fecha'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>CRUD FETCH</title>
</head>
<body>
    <div class="container-fluid" >
        <div class="row pl-5">
            <div class="col bg-dark text-light">
                <h1>API FETCH</h1>
            </div>
        </div>
    </div class="Contaier">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <form>
                    <input type="hidden" id="id" value="<?php echo $id;?>">


                    <div class="mb-3">
                        <label for="nombre">Tarea</label>
                        <input type="text" class="form-control" id="nombre" value="<?php echo $nombre;?>">
                    </div>
                
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Añade descripcion aqui..." id="descripcion" style="height: 300px"> <?php echo $descripcion;?></textarea>
                        <label for="descripcion"> Descripcion </label>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" value="<?php echo $fecha;?>">
                    </div>
                    

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button" class="btn btn-primary" id="actualizar">Actualizar</button>                    
                    </div>
                    
                </form>
            </div>
            <div class="col">

            </div>
        </div>
    <div>

    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="script2.js"></script>

</body>
</html>