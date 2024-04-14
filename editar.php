<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php

  include("conexion.php");

  if(!isset($_POST["bot_actualizar"])){
  $id=$_GET['id'];
  $curso=$_GET['curso'];
  $materia=$_GET['materia'];
  $avance=$_GET['avance'];
  $fecha=$_GET['fecha'];
  }
  else{
    $id=$_POST["id"];
    $curso=$_POST["curso"];
    $materia=$_POST["materia"];
    $avance=$_POST["avance"];
    $fecha=$_POST["fecha"];

    $sql="UPDATE progreso SET curso=:micurso,materia=:mimateria,avance=:miavance,fecha=:mifecha  WHERE id=:miid";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":miid"=>$id,":micurso"=>$curso,":mimateria"=>$materia,":miavance"=>$avance,":mifecha"=>$fecha));
    header("Location:index.php");
  }

?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
    </tr>
    <tr>
      <td>curso</td>
      <td><label for="curso"></label>
      <input type="text" name="curso" id="curso" value="<?php echo $curso?>"></td>
    </tr>
    <tr>
      <td>materia</td>
      <td><label for="materia"></label>
      <input type="text" name="materia" id="materia" value="<?php echo $materia?>"></td>
    </tr>
    <tr>
      <td>avance</td>
      <td><label for="avance"></label>
      <input type="text" name="avance" id="avance"  value="<?php echo $avance?>"></td>
    </tr>
    <tr>
      <td>fecha</td>
      <td><label for="fecha"></label>
      <input type="text" name="fecha" id="fecha"  value="<?php echo $fecha?>"></td>
    </tr>


    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>