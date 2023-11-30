<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda de Zapatos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- <header data-bs-theme="dark">
        <div class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Tienda de Zapatos</strong>
                </a>
                <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="query" placeholder="Buscar zapatos">
                </form>
            </div>
        </div>
    </header> -->
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Tienda de Zapatos</span>
            </a>
            <!-- Barra de busqueda -->
            <form action="search.php" method="GET" class="col-12 col-lg-auto mb-3 mb-lg-0">
                <input class="form-control mr-sm-2" type="text" name="query" placeholder="Buscar zapatos">
            </form>
            
            <!-- Example single secondary button -->
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Buscar por tipo
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Casual</a></li>
                    <li><a class="dropdown-item" href="#">Trabajo</a></li>
                    <li><a class="dropdown-item" href="#">Desporte</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Todos</a></li>
                </ul>
            </div>
        </div>
    </header>