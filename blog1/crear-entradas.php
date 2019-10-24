<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- Caja principal -->
<!--Caja principal-->
<div id="principal">
    <?php echo $_SESSION['usuario']['id']; ?>
    <h1>Crear Entradas</h1>
    <p>
        Añade una nueva entrada al blog para que los usuarios puedan 
        ver las entradas mas chulas que haces
    </p>
    <br/>
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo de la entrada:</label>
        <input type="text" name="titulo"/>
        <label for="descripcion">Descripción de la entrada:</label>
        <textarea type="text" name="descripcion" style="width:97.5%; height:75px"></textarea>
        <label for="categoria">Categoria de la entrada: </label>
        <select name="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
                        var_dump($categoria);
            ?>                
                <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></option>
            <?php
                    endwhile;
                endif;            
            ?>
        </select>
        <input type="submit" value="Guardar">
    </form>
</div>

<?php require_once './includes/pie.php'; ?>