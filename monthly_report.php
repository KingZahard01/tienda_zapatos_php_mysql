<?php
include('db.php');
include('includes/header.php');
?>

<section>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID de Venta</th>
                <th>ID del Zapato</th>
                <th>Cantidad</th>
                <th>Monto Total</th>
                <th>Fecha de Venta</th>
            </tr>
        </thead>
        <tbody>
            <?php

            // Obtener ventas mensuales (puedes ajustar la fecha según tus necesidades)
            $currentMonth = date('m');
            $salesResult = mysqli_query($conn, "SELECT * FROM sales WHERE MONTH(sale_date) = $currentMonth");

            while ($sale = mysqli_fetch_assoc($salesResult)) {
                echo "<tr>";
                echo "<td>{$sale['id']}</td>";
                echo "<td>{$sale['shoe_id']}</td>";
                echo "<td>{$sale['quantity']}</td>";
                echo "<td>{$sale['total_amount']}</td>";
                echo "<td>{$sale['sale_date']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>


    <!-- Botón para imprimir el informe en PDF -->
    <button onclick="window.print()">Imprimir en PDF</button>

</section>

<?php include('includes/footer.php'); ?>