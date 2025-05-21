<?php $__env->startSection('title', 'Editar Autor'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-7">
        <form method="POST" action="<?php echo e(route('autores.update', $autor->codigo_autor)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label for="codigo_autor" class="form-label">Código del Autor:</label>
                <input type="text" class="form-control" id="codigo_autor" value="<?php echo e($autor->codigo_autor); ?>" disabled>
            </div>

            <div class="mb-3">
                <label for="nombre_autor" class="form-label">Nombre del Autor:</label>
                <input type="text" class="form-control <?php $__errorArgs = ['nombre_autor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       name="nombre_autor" id="nombre_autor" value="<?php echo e(old('nombre_autor', $autor->nombre_autor)); ?>">
                <?php $__errorArgs = ['nombre_autor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                <input type="text" class="form-control <?php $__errorArgs = ['nacionalidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       name="nacionalidad" id="nacionalidad" value="<?php echo e(old('nacionalidad', $autor->nacionalidad)); ?>">
                <?php $__errorArgs = ['nacionalidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a class="btn btn-danger" href="<?php echo e(route('autores.index')); ?>">Cancelar</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\practica-crud-laravel\resources\views/autor/edit.blade.php ENDPATH**/ ?>