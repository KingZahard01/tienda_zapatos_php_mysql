<?php 
include('db.php');
include('includes/header.php');
?>
    
<section>
    <!-- Mostrar productos desde la base de datos -->
    <?php
    $result = mysqli_query($conn, "SELECT * FROM shoes");
    // Dentro del bucle que muestra los productos
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='product'>";
        echo "<h2>{$row['name']}</h2>";
        echo "<p>{$row['description']}</p>";
        echo "<p>Precio: {$row['price']} MXN</p>";
        
        // Botón de compra
        echo "<button type='button' class='btn btn-success'>Comprar</button>";
        
        echo "</div>";
    }
    ?>
</section>

<?php include('includes/footer.php')?>