<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<?php
/*
 * imprimir las tablas de multiplicar del 1 al 10 y que esten dentro de una tabla html
 */

echo '<table>';
echo '<tr>';
for ($i=1; $i<=10; $i++){
    echo '<th>'.$i.'</th>';
}
echo '</tr>';
for ($i=1; $i<=10; $i++){
    echo '<tr>';
    for ($j=1; $j<=10; $j++){
        echo '<td>'.($i*$j).'</td>';
    }
    echo '</tr>';
}

?>
</body>
</html>

