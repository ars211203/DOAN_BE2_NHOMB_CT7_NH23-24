
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="detail_user" style="text-align: center">
                <h1>Trang chi tiết user</h1><hr>
                    <h4>tên người dùng: <?php echo e($users->name); ?></h4>
                    <h4>số điện thoại: <?php echo e($users->phone); ?></h4>
                    <h4>email: <?php echo e($users->email); ?></h4>
                    <p>Ngày tạo: <?php echo e($users->created_at); ?></p>
                    <td ><img height="100px"src="<?php echo e(asset('/storage/images/users/'.$users->image)); ?>" alt=""></td>
            </div>
        </div>
        <a href="<?php echo e(route('list_users')); ?>">Quay Lại</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\hope_laravel\Hope_be2\resources\views/detail_user.blade.php ENDPATH**/ ?>