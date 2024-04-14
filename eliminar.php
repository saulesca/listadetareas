<?php
    include("conexion.php");
    $id=$_GET["id"];
    $base->query("DELETE FROM progreso WHERE id='$id'");
    header("Location:index.php");
?>