<section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
        <div class="icon"><img src="<?php echo e(asset("image_data/{$mostViewedBook->book_image}")); ?>" alt="Book cover"></div>
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Sách <span>Nổi</span>bật</h1>
        <h2><?php echo e($mostViewedBook->book_name); ?></h2>
        <h2>Lượt đọc: <?php echo e($mostViewedBook->book_view); ?></h2>
        <p><?php echo e($mostViewedBook->book_description); ?></p>
        <a href="<?php echo e(route('detail.book',$data->id)); ?>" class="cta">Đọc ngay</a>
      </div>
    </div>
  </section><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/topbook.blade.php ENDPATH**/ ?>