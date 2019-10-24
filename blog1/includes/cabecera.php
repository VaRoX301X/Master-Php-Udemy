<?php require_once 'conexion.php'; ?>
<?php require_once 'helpers.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de videojuegos</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- Cabecera -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog de juegos
            </a>
        </div>

        <!-- Menu -->
        
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php 
                $categorias = conseguirCategorias($db);
                while($categoria = mysqli_fetch_assoc($categorias)): 
                ?>
                <li>
                    <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>
                </li>
                <?php endwhile; ?>
                
                
            </ul>
        </nav>
    </header>
    <div id="contenedor">