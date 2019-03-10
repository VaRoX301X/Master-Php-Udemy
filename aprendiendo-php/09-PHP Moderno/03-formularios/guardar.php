<?php

if(isset($_GET['titulo']) && isset($_GET['descripcion'])){
    echo '<h1>'.$_GET['titulo'].'</h1>';
    echo '<h2>'.$_GET['descripcion'].'</h2>';
}