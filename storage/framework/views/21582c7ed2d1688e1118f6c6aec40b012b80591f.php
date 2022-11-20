<?php $__env->startSection('titulo'); ?>

<?php $__env->startSection('conteudo'); ?>
    <form action="/cadastro/participantes" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text"
                           class="form-control"
                           id="nome"
                           name="nome"
                           aria-describedby="nome_ajuda">
                    <small id="nome_ajuda" class="form-text text-muted">
                        <?php echo e($errors->first('nome')); ?></small>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Sobrenome</label>
                    <input type="text"
                           class="form-control"
                           id="sobrenome"
                           name="sobrenome"
                           aria-describedby="sobrenome_ajuda">
                    <small id="sobrenome_ajuda" class="form-text text-muted">
                        <?php echo e($errors->first('sobrenome')); ?></small>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Data de nascimento</label>
                    <input type="date"
                           class="form-control"
                           name="data_nascimento"
                           id="data_nascimento"
                           aria-describedby="data_nascimento_ajuda">
                    <small id="data_nascimento_ajuda" class="form-text text-muted">
                        <?php echo e($errors->first('data_nascimento')); ?></small>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input type="text"
                           class="form-control"
                           name="endereco"
                           id="endereco"
                           aria-describedby="endereco_ajuda">
                    <small id="endereco_ajuda" class="form-text text-muted">
                        <?php echo e($errors->first('endereco')); ?></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email"
                           class="form-control"
                           id="email"
                           name="email"
                           aria-describedby="email_ajuda">
                    <small id="email_ajuda" class="form-text text-muted">
                        <?php echo e($errors->first('email')); ?></small>
                </div>
            </div>
        </div>
        <a href="/painel/inscritos" method="GET" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\leopc\dev framework\avaliacao\resources\views/participante/form.blade.php ENDPATH**/ ?>