<?php echo $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>
<div>
    <a class="underline text-blue-700" href=<?php echo base_url("productos/") ?> >
        volver
    </a>
    <h2>
        <strong>Detalles del producto:</strong> <?php echo $producto['nombre']; ?>
    </h2>
    <p>
        <strong>Código:</strong> <?php echo $producto['codigo']; ?>
    </p>
    <p>
        <strong>Stock:</strong> <?php echo $producto['stock']; ?>
    </p>
    <p>
        <strong>Almacén:</strong> <?php echo $producto['id_almacen']; ?>
    </p>
    <?php 
        echo "<pre>";
        print_r($producto);
        echo "</pre>";
    ?>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts') ?>
    <script>
        console.log('Hola desde show.php :)');
    </script>
<?php echo $this->endSection() ?>