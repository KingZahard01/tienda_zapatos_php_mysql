<?php
include('db.php');
include('includes/header.php');
?>
<h1>Testing a php apache docker container</h1>
<div class="album py-5 bg-body-tertiary">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
      $result = mysqli_query($conn, "SELECT * FROM shoes");
      // Dentro del bucle que muestra los productos
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class='col'>
          <div class='card shadow-sm'>
            <img src="images/shoe.jpg" alt="imagen pedorra de zapato xd" width="100%" height="225">
            <div class='card-body'>
              <?php echo "<p class='card-text'>{$row['name']}</p>" ?>
              <?php echo "<p class='card-text'>{$row['description']}</p>" ?>
              <?php echo "<p class='card-text'>{$row['price']}</p>" ?>
              <?php echo "<p class='card-text'>{$row['tipo']}</p>" ?>
              <div class='d-flex justify-content-between align-items-center'>
                <div class='btn-group'>
                  <form action='sell.php' method='POST'>
                    <input type='hidden' name='shoe_id' value='{$row[' id']}'>
                    <label for='quantity'>Cantidad:</label>
                    <input type='number' name='quantity' min='1' value='1'>
                    <button class='btn btn-sm btn-outline-secondary type=' submit'>Vender</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }
      ?>
    </div>

  </div>
</div>

<?php include('includes/footer.php') ?>