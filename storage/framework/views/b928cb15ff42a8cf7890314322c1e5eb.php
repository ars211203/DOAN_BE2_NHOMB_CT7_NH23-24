<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản lý sách</h3>
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
                    <th>Tên sách</th>
                    <th>Ảnh bìa</th>
                    <th>Tên tác giả</th>
                    <th>Thể loại</th>
                    <th>Nguồn</th>
                    <th>Trạng thái</th>
                    <th>Mô tả sách</th>
                    <th>Version</th>
                    <th>Lượt đọc</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e(++$i); ?></td>
                        <td><?php echo e($book->book_name); ?></td>
                        <td><img src="<?php echo e(asset('/storage/images/users/'.$book->book_image)); ?>" alt="" height="50px"></td>
                        <td><?php echo e($book->book_author); ?></td>
                        <td><?php echo e($book->book_type); ?></td>
                        <td><?php echo e($book->book_source); ?></td>
                        <td><?php echo e($book->book_status); ?></td>
                        <td><?php echo e($book->book_description); ?></td>
                        <td><?php echo e($book->book_version); ?></td>
                        <td><?php echo e($book->book_view); ?></td>   
                        <td>
                            <form action="<?php echo e(route('book.complete', $book->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-info">Hoàn tất</button>
                        </form>
                        <a href="<?php echo e(route('book.sections' , $book->id)); ?>" class="btn btn-primary">Thêm Phần</a>
                        <form action="<?php echo e(route('book.destroy', $book->id)); ?>" method="POST">
                        <a class="btn btn-info" href="<?php echo e(route('book.edit', $book->id)); ?>">Sửa sách</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
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
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/books/index.blade.php ENDPATH**/ ?>