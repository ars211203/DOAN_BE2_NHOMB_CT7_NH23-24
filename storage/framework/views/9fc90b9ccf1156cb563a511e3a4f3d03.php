<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('store.categories')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="book_name" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" id="categories_name" name="categories_name" required>
    </div>
    <button type="submit" class="btn btn-primary">Thêm danh mục</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/category/create.blade.php ENDPATH**/ ?>