<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
</head>
<body>
    <div>
        <h1>Pagina de proyectos (upgrade)</h1>
        <a href=<?php echo base_url() ?> >Volver a pagina de inicio</a>
        <ul>
            <?php 
                foreach($proyectos as $proyecto){
                    echo "<li><a href='" . base_url("proyectos/" . $proyecto['slug']) . "'>" . esc($proyecto['nombre']) . "</a></li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>