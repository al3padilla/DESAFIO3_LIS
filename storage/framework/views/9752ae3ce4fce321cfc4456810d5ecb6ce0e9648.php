

<?php $__env->startSection('title', 'Lista de autores    BY: ALEXANDRA PADILLA'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="<?php echo e(route('autores.create')); ?>">Nuevo Autor</a>
        <br><br>
        <table class="table table-striped table-bordered" id="tabla">
            <thead class="table-dark">
                <tr>
                    <th>Código del Autor</th>
                    <th>Nombre del Autor</th>
                    <th>Nacionalidad</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($autor->codigo_autor); ?></td>
                        <td><?php echo e($autor->nombre_autor); ?></td>
                        <td><?php echo e($autor->nacionalidad); ?></td>
                        <td>
                            <form action="<?php echo e(route('autores.destroy', $autor->codigo_autor)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este autor?')">Eliminar</button>
                            </form>
                            <a href="<?php echo e(route('autores.edit', $autor->codigo_autor)); ?>" class="btn btn-warning">Modificar</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\practica-crud-laravel\resources\views/autor/index.blade.php ENDPATH**/ ?>