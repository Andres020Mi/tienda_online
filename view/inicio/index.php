<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/inicio/style.css">
    <title>Mercha</title>
</head>

<body>
    <!-- Importar la navegacion -->
    <?php require_once("view/components/nav/nav.php") ?>
    <!-- Contendor del tema principal -->
    <div class="container-20-80">
        <div class="category">

            <?php

            $i = 0;
            while ($i < 5) {
                echo "<a href=''>Categoria</a>";
                $i = $i + 1;
            }

            ?>
        </div>
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