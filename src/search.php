<?php
include('db.php');
include('includes/header.php');
?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            if (isset($_GET['query'])) {
                $search_query = mysqli_real_escape_string($conn, $_GET['query']);
                $result = mysqli_query($conn, "SELECT * FROM shoes WHERE name LIKE '%$search_query%' OR description LIKE '%$search_query%'");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class='col'>
                            <div class='card shadow-sm'>
                                <img src="images/shoe.jpg" width="100%" height="225" alt="imagen de zapato ">
                                <!-- class="bd-placeholder-img card-img-top" -->
                                <div class='card-body'>
                                    <?php echo " <p class='card-text'>{$row['name']}</p>"; ?>
                                    <?php echo " <p class='card-text'>{$row['description']}</p>"; ?>
                                    <?php echo " <p class='card-text'>{$row['price']}</p>"; ?>
                                    <?php echo " <p class='card-text'>{$row['tipo']}</p>"; ?>
                                    <div class='d-flex justify-content-between align-items-center'>
                                        <div class='btn-group'>
                                            <button type='button' class='btn btn-sm btn-outline-secondary'>View</button>
                                            <button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>
                                        </div>
                                        <small class='text-body-secondary'>9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php }
                } else {
                    echo "<p>No se encontraron resultados.</p>";
                }
            } else {
                echo "<p>Ingresa un término de búsqueda.</p>";
            }

            ?>
        </div>

    </div>
</div>

<?php include('includes/footer.php') ?>