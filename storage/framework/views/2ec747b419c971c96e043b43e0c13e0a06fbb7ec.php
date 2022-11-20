<?php $__env->startSection('titulo'); ?>

<?php $__env->startSection('conteudo'); ?>
    <a href="/cadastro/participantes" method="GET" class="btn btn-success">Cadastramento</a>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $participantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($participante->nome.' '.$participante->sobrenome); ?></td>
                    <td> <?php echo e($participante->endereco); ?></td>
                    <td> <?php echo e($participante->email); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php if($cadastro_sucesso): ?>
        <div class="alert alert-success" role="alert">
            Cadastro realizado com suceso!
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\leopc\dev framework\avaliacao\resources\views/participante/table.blade.php ENDPATH**/ ?>