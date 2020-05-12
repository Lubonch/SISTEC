<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {

    require_once "../configABM.php";
    $sql = "DELETE FROM alumnos WHERE id = ?";

    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id"]);
        if ($stmt->execute()) {
            header("location: AluBM.php");
            exit();
        } else {
            echo "Error! intente de nuevo mas tarde.";
        }
    }
    $stmt->close();
    $link->close();
} else {
    echo "Error! intente de nuevo mas tarde.";
}
?>