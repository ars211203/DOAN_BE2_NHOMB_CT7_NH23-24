<section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Top <span>Đọc</span></h1>
      </div>
      <div class="all-projects">
      <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($data->book_view >= 10): ?>
        <div class="project-item">
          <div class="project-info">
            <h1><?php echo e($data->book_name); ?></h1>
            <h2><a href="<?php echo e(route('detail.book',$data->id)); ?>" id="action_book">Đọc ngay</a></h2>
            <h2>Lượt đọc: <?php echo e($data->book_view); ?></h2>
            <p id="demo"><?php echo e($data->book_description); ?></p>
          </div>

          <div class="project-img">
          <div class="icon"><img src="<?php echo e(asset("image_data/dnt.jpg")); ?>" alt="Book cover"></div>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </section><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/topread.blade.php ENDPATH**/ ?>