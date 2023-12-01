<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $shoeId = $_POST['shoe_id'];
    $quantity = $_POST['quantity'];

    // Obtener información del zapato
    $shoeResult = mysqli_query($conn, "SELECT * FROM shoes WHERE id = $shoeId");
    $shoe = mysqli_fetch_assoc($shoeResult);

    // Calcular el monto total de la venta
    $totalAmount = $shoe['price'] * $quantity;

    // Registrar la venta en la base de datos
    $saleDate = date('Y-m-d');
    $insertSale = mysqli_query($conn, "INSERT INTO sales (shoe_id, quantity, total_amount, sale_date) VALUES ($shoeId, $quantity, $totalAmount, '$saleDate')");

    if ($insertSale) {
        echo "Venta realizada con éxito.";
    } else {
        echo "Error al procesar la venta: " . mysqli_error($conn);
    }
} else {
    // Redireccionar si se intenta acceder directamente a sell.php sin enviar datos de formulario
    header("Location: index.php");
    exit();
}
?>
