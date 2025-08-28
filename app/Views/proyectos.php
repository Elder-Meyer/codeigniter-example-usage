<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
</head>
<body>
    <div>
        <h1>Pagina de proyectos</h1>
        <ul>
            <?php 
                $proyectos = [
                    ["app-caih", "App CAIH"], 
                    ["corazon-huasteco", "Corazón Huasteco"], 
                    ["dulce-delicia", "Dulce Delicia"]
                ];

                foreach($proyectos as $proyecto){
                    echo "<li><a href='proyectos/$proyecto[0]'>Proyecto $proyecto[1]</a></li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>