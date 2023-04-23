

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/index-style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

<h1><a href="<?php echo e(route('cliente.create')); ?>" class="btn">Ingresar Cliente</a></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Salario</th>
        <th>Acciones</th>
    </tr>
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($cli->id); ?></td>
        <td><?php echo e($cli->Nombres); ?></td>
        <td><?php echo e($cli->Apellidos); ?></td>
        <td><?php echo e($cli->Edad); ?></td>
        <td>$<?php echo e($cli->Salario); ?></td>
        <td class="btns">
            <a href="<?php echo e(route('cliente.edit', ['id' => $cli->id])); ?>">
                <button type="button" class="btn-second">Modificar</button>
            </a>
            <form action="<?php echo e(route('cliente.destroy', ['id' => $cli->id])); ?>" method="POST">
                <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn-second">Eliminar</button>
            </form>
        </td>
    </tr>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ulises\dss-inv-aplicada\resources\views/index.blade.php ENDPATH**/ ?>