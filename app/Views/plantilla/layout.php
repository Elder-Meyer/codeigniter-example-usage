<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title><?php echo $titulo; ?></title>
    </head>
    <body>    
        <?php echo $this->include('plantilla/menu'); ?>

        <?php echo $this->renderSection("contenido"); ?>


        <footer class="bg-white rounded-lg shadow-sm m-4">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">© 2023 <a href=<?php echo base_url(); ?> class="hover:underline">Almacen</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
            </div>
        </footer>
        <?php echo $this->renderSection('scripts'); ?>
    </body>
</html>