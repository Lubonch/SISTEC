<?php
require_once "../configABM.php";

if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $sql = "SELECT * FROM alumnos WHERE id = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $usuario = $row["usuario"];
                $password = $row["password"];
                $email = $row["email"];

            } else {
                echo "Error! intente de nuevo mas tarde.";
                exit();
            }

        } else {
            echo "Error! intente de nuevo mas tarde.";
            exit();
        }
        $stmt->close();
        $link->close();
    }
   
} else {
    echo "Error! intente de nuevo mas tarde.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
<IMG SRC="../../images/BA2016.png" ALT="logo" width="233" height="60">
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <div class="page-header">
                            <h1>Datos del Usuario</h1>
                        </div>
                        <div class="form-group">
                            <label >Usuario</label>
                            <p class="form-control-static"><?php echo $usuario; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <p class="form-control-static"><?php echo $password; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <p class="form-control-static"><?php echo $email; ?></p>
                        </div>
                        <p><a href="AluBM.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>