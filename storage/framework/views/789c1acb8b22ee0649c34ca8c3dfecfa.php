<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('update.categories',$categories->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="form-group">
        <label for="book_name" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" value="<?php echo e($categories->categories_name); ?>" name="categories_name" required>
    </div>
    <button type="submit" class="btn btn-primary">sửa danh mục</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/category/edit.blade.php ENDPATH**/ ?>