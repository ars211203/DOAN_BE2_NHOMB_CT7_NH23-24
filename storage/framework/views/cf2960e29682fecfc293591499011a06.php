<section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Hoàn <span>t</span>hiện</h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas
          magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias
          voluptatum explicabo!</p> -->
      </div>
      <div class="service-bottom">
      <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($data->book_status == 1): ?>
        <div class="service-item">
        <div class="icon"><img src="<?php echo e(asset("image_data/{$data->book_image}")); ?>" alt="Book cover"></div>
        <h2><a href="<?php echo e(route('detail.book',$data->id)); ?>" id="action_book"><?php echo e($data->book_name); ?></a></h2>
            <p><?php echo e($data->book_description); ?></p>
          </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- phan trang -->
      </div>
    </div>
  </section><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/book_status.blade.php ENDPATH**/ ?>