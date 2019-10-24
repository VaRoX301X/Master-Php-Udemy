<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- Caja principal -->
<!--Caja principal-->
<div id="principal">
    <h1>Crear Categorias</h1>
    <p>
        Añade nuevas categorias al blog para que los usuarios puedan 
        usarlas para sus entradas
    </p>
    <br/>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la categoríaa:</label>
        <input type="text" name="nombre"/>
        <input type="submit" value="Guardar">
    </form>
</div>

<?php require_once './includes/pie.php'; ?>