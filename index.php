<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php

  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  
  include("conexion.php");
  
  $conexion=$base->query("SELECT * FROM progreso");
  
  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);

  if(isset($_POST["cr"])){
    
    $curso=$_POST["Cur"];
    $materia=$_POST["Mat"];
    $avance=$_POST["Ava"];
    $fecha=$_POST["Fec"];
    
    $sql="INSERT INTO progreso (curso,materia,avance,fecha) VALUES (:cur, :mat, :ava, :fec)";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":cur"=>$curso,":mat"=>$materia,":ava"=>$avance,":fec"=>$fecha));
    header("Location:index.php");
  }

?>

<h1><span class="subtitulo">Recordatorios</span></h1>

  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table width="50%" border="0" align="center">
      <tr >
        <td class="primera_fila">id</td>
        <td class="primera_fila">curso</td>
        <td class="primera_fila">materia</td>
        <td class="primera_fila">avance</td>
        <td class="primera_fila">fecha</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr> 
    
      <?php 
      foreach($registros as $mat):
      ?>
      <tr>
        <td><?php echo $mat->id; ?></td>
        <td><?php echo $mat->curso; ?></td>
        <td><?php echo $mat->materia; ?></td>
        <td><?php echo $mat->avance; ?></td>
        <td><?php echo $mat->fecha; ?></td>
        <td class="bot"><a href="eliminar.php?id=<?php echo $mat->id ?> ">   <input type='button' name='del' id='del' value='Borrar'>   </a></td>
        <td class='bot'><a href="editar.php? id=<?php echo $mat->id ?> & curso=<?php echo $mat->curso ?>  & materia=<?php echo $mat->materia ?>  &  avance=<?php echo $mat->avance ?> &  fecha=<?php echo $mat->fecha ?>">   <input type='button' name='up' id='up' value='Actualizar'>  </a></td>
      </tr>   
      <?php 
        endforeach; 
      ?>
      
      <tr>
        <td></td>
          <td><input type='text' name='Cur' size='10' class='centrado'></td>
          <td><input type='text' name='Mat' size='10' class='centrado'></td>
          <td><input type='text' name='Ava' size='10' class='centrado'></td>
          <td><input type='text' name='Fec' size='10' class='centrado'></td>
          
          <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
      </tr>
      
      
    </table>
  </form>
<p>&nbsp;</p>
</body>
</html>