<?php
require_once "../configABM.php";

if (isset($_GET['id_taller'])) {
    $sql = "SELECT * FROM talleres WHERE id = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_taller"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $param_nombre_taller = $row["nombre"];
                $param_descripcion = $row["descripcion"];
            } else {
                echo "Error! Datos no encontrados";
                exit();
            }
        } else {
            echo "Error! Por favor intente mas tarde.";
            exit();
        }
        $stmt->close();
    }
} else {
    header("location: ABMtaller.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["nombre_taller"]) && !empty($_POST["descripcion"])) {

        $sql = "UPDATE talleres SET nombre = ?, descripcion = ? WHERE id = ?";
        if ($stmt = $link->prepare($sql)) {

            $stmt->bind_param("ssi", $_POST["nombre_taller"], $_POST["descripcion"], $_GET["id_taller"]);
            $stmt->execute();
            if ($stmt->error) {
                echo "Error!" . $stmt->error;
                exit();
            } else {
                header("location: ABMtaller.php");
                exit();
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
    <title>actualizar datos de usuario</title>
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
               <div class="card" style="margin-top:20px;">
                   <div class="card-body">
                       <div class="page-header">
                           <h2>actualizar datos del taller</h2>
                       </div>
                       <p>modifique los datos necesarios.</p>
                       <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                           <div class="form-group">
                               <label>Nombre</label>
                               <input type="text" name="nombre_taller" class="form-control" required value="<?php echo $param_nombre_taller; ?>">
                           </div>
                           <div class="form-group">
                               <label>Descripcion</label>
                               <textarea name="descripcion" class="form-control" required ><?php echo $param_descripcion; ?></textarea>
                           </div>
                           <input type="submit" class="btn btn-primary" value="Submit">
                           <a href="ABMtaller.php" class="btn btn-default">Cancel</a>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>