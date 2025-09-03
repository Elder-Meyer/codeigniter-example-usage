<?php echo $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>
<div>
    <a class="underline text-blue-700" href=<?php echo base_url("productos/") ?> >
        volver
    </a>
    <h2>
        Detalles del producto: <?php echo esc($id) ?>
    </h2>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts') ?>
    <script>
        console.log('Hola desde show.php :)');
    </script>
<?php echo $this->endSection() ?>