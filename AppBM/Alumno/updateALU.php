<?php
require_once "../configABM.php";

if (isset($_GET['id'])) {
    $sql = "SELECT * FROM alumnos WHERE id = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $param_usuario = $row["usuario"];
                $param_password = $row["password"];
                $param_email = $row["email"];
            } else {
                echo "Error! Datos no encontrados";
                exit();
            }
        } else {
            echo "Error! intente de nuevo mas tarde.";
            exit();
        }
        $stmt->close();
    }
} else {
    header("location: AluBM.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {

        $sql = "UPDATE alumnos SET usuario = ?, password = ?, email = ? WHERE id = ?";
        if ($stmt = $link->prepare($sql)) {

            $stmt->bind_param("sssi", $_POST["usuario"], $_POST["password"], $_POST["email"], $_GET["id"]);
            $stmt->execute();
            if ($stmt->error) {
                echo "Error!" . $stmt->error;
                exit();
            } else {
                header("location: AluBM.php");
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
                           <h2>actualizar datos de usuario</h2>
                       </div>
                       <p>modifique los datos necesarios.</p>
                       <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                           <div class="form-group">
                               <label>Usuario</label>
                               <input type="text" name="usuario" class="form-control" required value="<?php echo $param_usuario; ?>">
                           </div>
                           <div class="form-group">
                               <label>Contraseña</label>
                               <textarea name="password" class="form-control" required ><?php echo $param_password; ?></textarea>
                           </div>
                           <div class="form-group">
                               <label>email</label>
                               <input type="text" name="email" class="form-control" value="<?php echo $param_email; ?>" required>
                           </div>
                           <input type="submit" class="btn btn-primary" value="Submit">
                           <a href="AluBM.php" class="btn btn-default">Cancel</a>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>