<?php
require_once "../configABM.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    if (isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['email'])) 
    {
        $sql = "INSERT INTO alumnos(usuario, password, email) VALUES (?,?,?)";

        if ($stmt = $link->prepare($sql)) 
        {
            $stmt->bind_param("ssi", $_POST['usuario'], $_POST['password'], $_POST['email']);
            
            if ($stmt->execute()) 
            {
                header("location: AluBM.php");
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
    <title>Añadiendo usuario</title>
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
                    <h2>Crear Usuario</h2>
                </div>
                <p>Llene este formulario para añadir un usuario a la base de datos.</p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="AluBM.php" class="btn btn-default">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>