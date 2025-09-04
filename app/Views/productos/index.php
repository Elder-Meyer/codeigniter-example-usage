<?php echo $this->extend("plantilla/layout") ?>

<?php echo $this->section('contenido') ?>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $producto): ?>
                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <a class="underline text-blue-700" href="<?php echo base_url("productos/".urlencode($producto->codigo)) ?>">
                                <?php echo $producto->nombre ?>
                            </a>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $producto->codigo ?> <!-- para objetos -->
                            <!--  echo $producto['codigo']  para arrays -->
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $producto->nombre ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $producto->stock ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('scripts') ?>
    <script>
        console.log('Hola desde index.php :)');
    </script>
<?php echo $this->endSection() ?>