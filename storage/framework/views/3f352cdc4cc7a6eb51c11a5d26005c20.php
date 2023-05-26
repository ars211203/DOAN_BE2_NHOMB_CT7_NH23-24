<link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
<div class="window">
  <div class="overlay"></div>
  <div class="box header">
  <img src="<?php echo e(asset("image_data/{$user->user_image}")); ?>" alt="Book cover">
    <h2><?php echo e($user->user_fullname); ?></h2>
    <h4><?php echo e($user->email); ?></h4>
  </div>
  <div class="box footer">
    <ul>
      <li><a href="">Lịch sử đọc</a></li>
      <li><a href="">đổi mật khẩu</a></li>
    </ul>
    <a href="<?php echo e(route('index')); ?>" class="btn">Quay lại</a>
  </div>
</div><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/profile.blade.php ENDPATH**/ ?>