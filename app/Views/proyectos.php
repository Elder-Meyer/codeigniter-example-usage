<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Proyectos</title>
</head>
<body>
    <?php echo $this->include('plantilla/menu.php'); ?>
    <div class="min-h-screen">
        <h1>Pagina de proyectos (upgrade)</h1>
        <a class="underline text-blue-700" href=<?php echo base_url() ?> >Volver a pagina de inicio</a>
        <ul>
            <?php 
                foreach($proyectos as $proyecto){
                    echo "<li><a class='underline text-green-600' href='" . base_url("proyectos/" . $proyecto['slug']) . "'>" . esc($proyecto['nombre']) . "</a></li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>