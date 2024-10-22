<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/inicio/style.css">
    <script src="view/inicio/script.js" defer></script>
    <title>Mercha</title>
</head>

<body>
    <!-- Importar la navegacion -->
    <?php require_once("view/components/nav/nav.php") ?>
    <!-- Contendor del tema principal -->
    <div class="container-20-80" id="contenedor_contenido">
        <!-- Categorias -->
        <div class="category">

            <?php

            $i = 0;
            while ($i < 20) {
                echo "<a href=''>Categoria</a>";
                $i = $i + 1;
            }

            ?>
        </div>
        <!-- Productos -->
        <div class="products-grid">
            <?php
                $i = 0;
                while ($i < 20) {
            ?>
                <div class='card-product'>
                    <img src='view/inicio/img_prueba.png' alt='imagen del producto'>
                    <h2>
                        Producto X
                    </h2>
                    <a href=''>Comporar</a>
                </div>
            <?php
                    $i = $i + 1;
                }
            ?>
        </div>
    </div>
</body>

</html>