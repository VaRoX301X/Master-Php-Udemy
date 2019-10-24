<?php require_once 'includes/cabecera.php'; ?>



    <!-- Barra lateral -->
    <?php require_once 'includes/lateral.php'; ?>



    <!-- Caja principal -->
    <div id="principal">
        <h1>Ultimas entradas</h1>
        <?php 
            $entradas = conseguirUltimasEntradas($db);
            if(!empty($entradas)):
                while($entrada = mysqli_fetch_assoc($entradas)): 
        ?>
        
        <article class="entrada">
            <h2><?=$entrada['titulo']?></h2>
            <span class="fecha"><?=$entrada['categoria']." | ".$entrada['fecha']?></span>
            <p><?= substr($entrada['descripcion'],0,180)."..." ?></p>
        </article>
        <?php
                endwhile;
            endif;   
        ?>
        <div id="ver-todas">
        <a href="">Ver todas las entradas</a>
    </div>
    </div>
    
    
<?php include 'includes/pie.php' ?>



