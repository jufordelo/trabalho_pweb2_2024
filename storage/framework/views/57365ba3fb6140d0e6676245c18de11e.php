<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Formulario Reserva'); ?>

<body style="background-color:rgb(222, 198, 245);">

<h3> Listagem de Reservas </h3>
<form action="<?php echo e(route('reserva.search')); ?>" method="post">
    <div class="row">
        <?php echo csrf_field(); ?>
        <div class= "col-4">
            <label for="">Nome</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="">
            <button type="submit" class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i>
                </i> Buscar</button>
            <a href="<?php echo e(url('reserva/create')); ?>" class="btn btn-dark"> <i class="fa-solid fa-pen-to-square" style="color: #a58eec;"></i> </i> Nova
                Reserva</a>
        </div>
    </div>
</form>

<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Responsável da Reserva</th>
            <th>Telefone</th>
            <th>Data da reserva</th>
            <th>Horário da reserva</th>
            <th>Quantidade de pessoas</th>
            <th>Escolha a Categoria</th>
            <th colspan="2">Ações</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->resp); ?></td>
                <td><?php echo e($item->tel); ?></td>
                <td><?php echo e($item->data); ?></td>
                <td><?php echo e($item->hora); ?></td>
                <td><?php echo e($item->pss); ?></td>
                <td><?php echo e($item->categoria->nome ?? ''); ?></td>
                <td>Editar</td>
                <td><a href="<?php echo e(route('reserva.edit', $item->id)); ?>"> Editar </a></td>

                <td><form action="<?php echo e(route('reserva.destroy', $item)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <input type="submit" value="Deletar" class="btn btn-danger">
                    </form>

                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\trabalho_pweb2_2024\resources\views/reserva/listr.blade.php ENDPATH**/ ?>