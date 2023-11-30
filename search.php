<?php 
include('db.php');
include('includes/header.php');
?>
  
<section>
    <?php
    if (isset($_GET['query'])) {
        $search_query = mysqli_real_escape_string($conn, $_GET['query']);
        $result = mysqli_query($conn, "SELECT * FROM shoes WHERE name LIKE '%$search_query%' OR description LIKE '%$search_query%'");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='product'>";
                echo "<h2>{$row['name']}</h2>";
                echo "<p>{$row['description']}</p>";
                echo "<p>Precio: {$row['price']} MXN</p>";
                // Botón de compra
                echo "<button type='button' class='btn btn-success'>Comprar</button>";
                echo "</div>";
            }
        } else {
            echo "<p>No se encontraron resultados.</p>";
        }
    } else {
        echo "<p>Ingresa un término de búsqueda.</p>";
    }
    ?>
</section>
<?php include('includes/footer.php') ?>