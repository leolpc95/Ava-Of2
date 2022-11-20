
<?php $__env->startSection('main'); ?>
<div class="d-flex justify-content-between align-items-center mb-5">
    <h1 class="mb-5">participantes</h1>
    
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">endereco</th>
            <th scope="col">email</th>
            
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $participantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($participantes->id); ?></td>
            <td><?php echo e($participantes->nome); ?></td>
            <td><?php echo e($participantes->sobrenome); ?></td>
            <td><?php echo e($participantes->endereco); ?></td>
            <td><?php echo e($participantes->email); ?></td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($participantes->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\leopc\dev framework\produtos\resources\views/participantes/listagem.blade.php ENDPATH**/ ?>