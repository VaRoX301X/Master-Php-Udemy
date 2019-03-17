<?php

if (isset($_GET['titulo']) && isset($_GET['descripcion'])){
    echo '<h1>Titulo: '.$_GET['titulo'].'</h1>';
    echo '<h2> Descripción: '.$_GET['descripcion'].'</h2>';
}