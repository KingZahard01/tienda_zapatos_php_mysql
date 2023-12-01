<?php

// Incluimos la conexión a la base de datos
include("db.php");
//if para agregar empleado
if (isset($_POST['register'])) {

  if (
    strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['role']) >= 1 &&
    strlen($_POST['address']) >= 1 &&
    strlen($_POST['phone']) >= 1
  ) {
    $name = trim($_POST['nombre']);
    $role = trim($_POST['role']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);

    $consulta = "INSERT INTO empleado ( name, rol, direccion, telefono ) VALUES ('$name','$role','$address','$phone')";
    $resultado = mysqli_query($conn, $consulta);

    if ($resultado) {
?>
      <h3 class="ok">Empleado registrado correctamente</h3>
    <?php
    } else {
    ?>
      <h3 class="bad">Ups! ocurrio un error</h3>
<?php
    }
  }
}

//editar empleado

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Control de empleados</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 10px;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
  <!--FORMULARIO -->
  <form acton="tabla_workers.php" method="post">

    <h1>Registro</h1>
    <input type="text" name="nombre" placeholder="Nombre completo">
    <input type="text" name="address" placeholder="Dirección">
    <input type="text" name="phone" placeholder="Telefono">

    <br>

    <tr>
      <td><label for="role">Role:</label></td>
      <td>
        <select name="role">
          <option value="employee" selected>Empleado</option>
          <option value="admin">Administrador</option>
          <option value="helper">Ayudante</option>
        </select>
      </td>
    </tr>
    <input type="submit" name="register">

  </form>
  <!--TABLA DE EMPLEADOS -->
  <h2>Empleados</h2>

  <br>

  <table>

    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>ROL</th>
      <th>DIRECCION</th>
      <th>TELEFONO</th>
      <th>EDITAR</th>
    </tr>


    <?php

    $sql = "SELECT * FROM empleado";
    $result = mysqli_query($conn, $sql);

    while ($fila = mysqli_fetch_array($result)) {

    ?>

      <tr>
        <td> <?php echo $fila['id'] ?></td>
        <td> <?php echo $fila['name'] ?></td>
        <td> <?php echo $fila['rol'] ?></td>
        <td> <?php echo $fila['direccion'] ?></td>
        <td> <?php echo $fila['telefono'] ?></td>
        <td>
          <?php echo "<a href='editar.php?id=" . $fila['id'] . "'>EDITAR</a>" ?>
          <?php echo "<a href='eliminar.php?id=" . $fila['id'] . "'>ELIMINAR</a>" ?>
        </td>
      </tr>
    <?php
    }
    ?>

  </table>

  <?php include('includes/footer.php'); ?>