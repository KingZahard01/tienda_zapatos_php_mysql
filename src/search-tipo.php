<?php
include('db.php');
include('includes/header.php');
?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            // Obtener el tipo de la URL
            $tipo = $_GET['tipo'];

            // Construir la consulta SQL
            if ($tipo === 'Todos') {
                $sql = "SELECT * FROM shoes";
            } else {
                $sql = "SELECT * FROM shoes WHERE tipo = '$tipo'";
            }

            // Ejecutar la consulta
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col'>";
                    echo "  <div class='card shadow-sm'>";
                    echo "    <svg class='bd-placeholder-img card-img-top' width='100%' height='225' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'>";
                    echo "      <title>{$row['name']}</title>";
                    echo "      <rect width='100%' height='100%' fill='#55595c' /><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>";
                    echo "    </svg>";
                    echo "    <div class='card-body'>";
                    echo "      <p class='card-text'>{$row['name']}</p>";
                    echo "      <p class='card-text'>{$row['description']}</p>";
                    echo "      <p class='card-text'>{$row['price']}</p>";
                    echo "      <p class='card-text'>{$row['tipo']}</p>";
                    echo "      <div class='d-flex justify-content-between align-items-center'>";
                    echo "        <div class='btn-group'>";
                    echo "          <button type='button' class='btn btn-sm btn-outline-secondary'>View</button>";
                    echo "          <button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>";
                    echo "        </div>";
                    echo "        <small class='text-body-secondary'>9 mins</small>";
                    echo "      </div>";
                    echo "    </div>";
                    echo "  </div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No se encontraron resultados.</p>";
            }

            ?>
        </div>

    </div>
</div>

<?php include('includes/footer.php') ?>