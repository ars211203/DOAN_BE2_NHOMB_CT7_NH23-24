<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm chương sách</h3>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('book.sections.update',['book_id' => $book->id, 'id' => $sections->id])); ?>" method="post"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md">
                    <div class="form-group">
                        <Strong>Tên chương</Strong>
                            <input type="text" name="sections_name" value="<?php echo e($sections->sections_name); ?>"
                                class="form-control" placeholder="Nhập tên chương">
                        </div>
                        <div class="form-group">
                        <Strong>Nội dung chương</Strong>
                            <input type="text" name="sections_content" value="<?php echo e($sections->sections_content); ?>"
                                class="form-control" placeholder="Nhập nội dung chương">
                        </div>
                        <!-- <input type="hidden" name="book_id" value="<?php echo e($sections->book_id); ?>"> tesst -->
                    </div>
                </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu thay đổi</button>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/sections/edit.blade.php ENDPATH**/ ?>