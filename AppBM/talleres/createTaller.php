<?php
require_once "../configABM.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    if (isset($_POST['nombre_taller']) && isset($_POST['descripcion'])) 
    {
        $sql = "INSERT INTO talleres (nombre, descripcion) VALUES (?,?)";

        if ($stmt = $link->prepare($sql)) 
        {
            $stmt->bind_param("ss", $_POST['nombre_taller'], $_POST['descripcion']);
            
            if ($stmt->execute()) 
            {
                header("location: ABMtaller.php");
                exit();
            } 
            else 
            {
                echo "Error! intente nuevamente.";
            }
            $stmt->close();
        }
    }

    $link->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Añadiendo Taller</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<IMG SRC="../../images/BA2016.png" ALT="logo" width="233" height="60">
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Crear Taller</h2>
                </div>
                <p>Llene este formulario para añadir un taller a la base de datos.</p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <div class="form-group">
                        <label>Nombre Taller:</label>
                        <input type="text" name="nombre_taller" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" required>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="ABMtaller.php" class="btn btn-default">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>