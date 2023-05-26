
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản Lý danh mục</h3>
                </div>
                <div class="col-md-6">
                <?php if(Session::has('thongbao')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('thongbao')); ?>

            </div>
            <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bodered">
                <thead>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->id); ?></td>
            <td><?php echo e($data->categories_name); ?></td>
            <td>
                <form action="<?php echo e(route('destroy.categories',$data->id)); ?>" method="POST">
                    <a class="btn btn-info" href="<?php echo e(route('edit.categories',$data->id)); ?>">Sửa danh mục</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Xóa danh mục</button>
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
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/category/index.blade.php ENDPATH**/ ?>