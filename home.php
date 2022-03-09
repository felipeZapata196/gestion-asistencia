<!DOCTYPE html>
<html>

<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

    <?php
    include("con_db.php");
    include_once "nav.php";




    $sentencia = "SELECT * FROM listaalumnos";
    $consulta = mysqli_query($conex, $sentencia);
    $numeroConsultas = ($consulta);



    ?>

    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Alumnos</h1>
        </div>
        <div class="col-12">
            <a href="employee_add.php" class="btn btn-info mb-2">Add new employee <i class="fa fa-plus"></i></a>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dni</th>
                            <th>Nombre Alumno</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($fila = mysqli_fetch_array($consulta)) {
                            $nombreAlumno = $fila['nombreAlumno'];
                            $dni = $fila['dni'];

                        ?>
                            <tr>
                                <td>
                                    <?php echo "$dni<br>" ?>
                                </td>
                                <td>
                                    <?php echo  "$nombreAlumno<br>" ?>
                                </td>


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</body>

</html>