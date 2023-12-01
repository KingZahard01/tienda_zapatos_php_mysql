<?php
include('db.php');
include('includes/header.php');
?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
      $result = mysqli_query($conn, "SELECT * FROM shoes");
      // Dentro del bucle que muestra los productos
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
        echo "<form action='sell.php' method='POST'>";
        echo "<input type='hidden' name='shoe_id' value='{$row['id']}'>";
        echo "<label for='quantity'>Cantidad:</label>";
        echo "<input type='number' name='quantity' min='1' value='1'>";
        echo "<button class='btn btn-sm btn-outline-secondary type='submit'>Vender</button>";
        echo "</form>";
        echo "        </div>";
        echo "      </div>";
        echo "    </div>";
        echo "  </div>";
        echo "</div>";
      }
      ?>
    </div>

  </div>
</div>

<?php include('includes/footer.php') ?>