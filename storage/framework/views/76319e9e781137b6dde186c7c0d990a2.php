<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Quản lý người dùng</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php if(Session::has('thongbao')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('thongbao')); ?>

            </div>
            <?php endif; ?>
            <table class="table table-bodered">
                <thead>
                    <th>STT</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Loại tài khoản</th>
                    <th>Version</th>
                    <th>Avatar</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$i); ?></td>
                        <td><?php echo e($user->user_fullname); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->password); ?></td>
                        <td><?php echo e($user->user_type); ?></td>
                        <td><?php echo e($user->user_version); ?></td>
                        <td><img src="<?php echo e(asset('/storage/images/users/'.$user->user_image)); ?>" alt="" height="50px"></td>
                        <td> 
                        <a href="<?php echo e(route('edit.user',$user->id)); ?>" class="btn btn-info">Sửa</a> 
                        <form action="<?php echo e(route('user.destroy',$user->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/users/index.blade.php ENDPATH**/ ?>