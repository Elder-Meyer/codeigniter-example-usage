<div>
    <h1 class="text-3xl font-bold">
        <?php echo esc($titulo) ?>
    </h1>
    <p><?php echo $descripcion ?></p>
</div>



<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto): ?>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <a class="underline text-blue-700" href="<?php echo base_url("productos/".urlencode($producto['id'])) ?>">
                            <?php echo $producto['nombre'] ?>
                        </a>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $producto['color'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $producto['categoria'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $producto['precio'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
