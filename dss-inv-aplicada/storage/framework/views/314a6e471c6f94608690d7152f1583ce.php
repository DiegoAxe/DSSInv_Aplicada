


<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/create-style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

<form action="<?php echo e(route('cliente.update', ['id' => $cliente->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
    <h1>Modificando a <?php echo e($cliente->Nombres . " " . $cliente->Apellidos); ?></h1>
    <div>
        <label for="Nombres">Nombres:</label>
        <input type="text" name="Nombres" value="<?php echo e($cliente->Nombres); ?>" required>
    </div>

    <div>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" name="Apellidos" value="<?php echo e($cliente->Apellidos); ?>" required>
    </div>

    <div>
        <label for="Edad">Edad:</label>
        <input type="number" name="Edad" min="1" max="99" value="<?php echo e($cliente->Edad); ?>" required>
    </div>

    <div>
        <label for="Salario">Salario:</label>
        <input type="number" step = "0.01" name="Salario" value="<?php echo e($cliente->Salario); ?>" required>
    </div>


    <div>
        <input type="submit" value="Guardar" class="btn">
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ulises\dss-inv-aplicada\resources\views/modify.blade.php ENDPATH**/ ?>