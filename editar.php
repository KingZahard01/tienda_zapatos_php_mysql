<?php

include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
    if (isset($_POST['enviar'])) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $rol = $_POST['rol'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];

        $sql = "UPDATE empleado SET name = '".$nombre."', rol = '".$rol."', direccion = '".$direccion."', telefono =  '".$telefono."' WHERE id = '".$id."';";
        $resultado = mysqli_query($conn,$sql);

        if ($resultado) {

            echo "<script language='JavaScript'>
                    alert('Los datos se actualizaron correctamente');
                    location.assign('workers.php');
                    </script>
            ";
        }else{
            echo "<script language='JavaScript'>
                    alert('Los datos No se actualizaron');
                    location.assign('workers.php');
                    </script>
            ";
        }

    }else{
        $id = $_GET['id'];
        $sql = "SELECT * FROM empleado WHERE id='".$id."'";
        $resultado = mysqli_query($conn,$sql);
        
        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila['name'];
        $rol = $fila['rol'];
        $direccion = $fila['direccion'];
        $telefono = $fila['telefono'];

?>

    <h1>Editar empleado</h1>
    <form action= "<?= $_SERVER['PHP_SELF']?>" method="post">
        <label>NOMBRE:</label>
        <input type="text" name = "nombre" value = "<?php echo $nombre; ?>"> <br>
        <label>DIRECCION:</label>
        <input type="text" name = "direccion" value = "<?php echo $direccion; ?>"> <br>
        <label>TELEFONO:</label>
        <input type="text" name = "telefono" value = "<?php echo $telefono; ?>"> <br>
        <label>ROL:</label>
        <input type="text" name ="rol" value = "<?php echo $rol; ?>"> <br>
        <input type="hidden" name = "id" value = "<?php echo $id; ?>">

        <input type="submit" name = "enviar" value = "ACTUALIZAR">
        <a href="workers.php">Regresar</a>
    </form>
    <?php
    }?>

</body>
</html>