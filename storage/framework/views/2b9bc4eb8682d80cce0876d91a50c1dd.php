<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('store.book')); ?>">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="book_name" class="form-label">Book Name</label>
        <input type="text" class="form-control" id="book_name" name="book_name" required>
    </div>
     <div class="form-group">
        <label for="book_image" class="form-label">Book image</label>
        <input type="file" class="form-control" id="book_image" name="book_image" placeholder="Ảnh bìa sách" required>
    </div>
    <div class="form-group">
        <label for="book_author" class="form-label">Book Author</label>
        <input type="text" class="form-control" id="book_author" name="book_author" required>
    </div>

    <div class="form-group">    
        <label for="book_type" class="form-label">Book Type</label>
        <select class="form-control" id="book_type" name="book_type[]" multiple>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->categories_name); ?>"><?php echo e($data->categories_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="book_source" class="form-label">Book Source</label>
        <input type="text" class="form-control" id="book_source" name="book_source" required>
    </div>

    <div class="form-group">
        <label for="book_description" class="form-label">Book Description</label>
        <textarea class="form-control" id="book_description" name="book_description" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Book</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/books/create.blade.php ENDPATH**/ ?>