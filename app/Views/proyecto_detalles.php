<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($project) ?></title>
</head>
<body>
    <a href=<?php echo base_url("/proyectos") ?> >Proyectos</a>
    <div>
        </h1>Detalles del proyecto</h1>
        <p>Proyecto: <?= esc($project) ?></p>
    </div>
</body>
</html>