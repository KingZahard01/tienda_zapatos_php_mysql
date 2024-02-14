<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda de Zapatos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
</head>

<body>
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
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
                    <li><a class="dropdown-item" href="search-tipo.php?tipo=Casual">Casual</a></li>
                    <li><a class="dropdown-item" href="search-tipo.php?tipo=Trabajo">Trabajo</a></li>
                    <li><a class="dropdown-item" href="search-tipo.php?tipo=Deporte">Deporte</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="search-tipo.php?tipo=Todos">Todos</a></li>
                </ul>
            </div>
        </div>
    </header>