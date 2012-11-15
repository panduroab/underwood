<html>
    <head>
        <title>Main</title>
    </head>
    <body>

        <p>Hola Mundo</p>
        <ul>
            <? if (isset($usuario))  ?>
            <? foreach ($usuario as $row) { ?>
                <li><? echo $row['usuario'] . ' ' . $row['nombre'] . ' ' . $row['apellidos'] ?></li>
            <? } ?>
        </ul>
    </body>
</html>