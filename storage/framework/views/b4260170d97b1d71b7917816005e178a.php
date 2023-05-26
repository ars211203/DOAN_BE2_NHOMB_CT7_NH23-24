<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Tổng sách</h3>
                <p><?php echo e($totalBooks); ?></p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book"></i>
              </div>
              <a href="<?php echo e(route('list.book')); ?>" class="small-box-footer">Xem toàn bộ<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Người dùng<sup style="font-size: 20px"></sup></h3>
                <p><?php echo e($totalUsers); ?></p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-person"></i>
              </div>
              <a href="<?php echo e(route('list.user')); ?>" class="small-box-footer">Xem toàn bộ<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>    
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Tổng lượt đọc</h3>    
                <p><?php echo e($totalViews); ?></p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-chart-simple"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Đánh giá</h3>
                <p><?php echo e($Result); ?> / 5 <i class="fa-solid fa-star"></i></p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/admin/index.blade.php ENDPATH**/ ?>