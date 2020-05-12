<?php
if (isset($_GET["id_taller"]) && !empty($_GET["id_taller"])) {

    require_once "../configABM.php";
    $sql = "DELETE FROM talleres WHERE id = ?";

    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_taller"]);
        if ($stmt->execute()) {
            header("location: ABMtaller.php");
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