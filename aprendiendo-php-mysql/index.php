<?php
// conectar a una base de datos
$conexion = mysqli_connect("localhost", "root","" ,"phpmysql");

if(mysqli_connect_errno()){
    echo "La conexion a la bbdd ha fallado ".mysqli_connect_error();
} else {
    echo "Conexion correcta";
}

// Consulta para configurar codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// consulta SELECT desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");
var_dump($query);

while($nota = mysqli_fetch_assoc($query)){
    echo '<h2>'.$nota['titulo'].'</h2><br>';
    echo $nota['descripcion'].'<br/>';
}

echo '<hr>';

// Insertar en la bbdd desde php
$insertadote = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP','green')";
$queryInsertar = mysqli_query($conexion, $insertadote);
if ($queryInsertar){
    echo 'insertado correctamente';
} else echo mysqli_error($conexion);