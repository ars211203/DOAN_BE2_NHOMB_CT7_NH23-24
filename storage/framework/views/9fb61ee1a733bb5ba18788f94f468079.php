
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="list_user" style="text-align: center">
            <h1>Danh Sách User</h1><hr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($data->id); ?>.</td>
                <td>Người dùng: </td><a href="<?php echo e(route('detail_user',$data->id)); ?>"><?php echo e($data->name); ?></a><br>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php echo e($users->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\hope_laravel\Hope_be2\resources\views/list_users.blade.php ENDPATH**/ ?>