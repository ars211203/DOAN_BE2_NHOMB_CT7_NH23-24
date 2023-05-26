<link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
<div class="window">
  <div class="overlay"></div>
  <div class="box header">
  <img src="<?php echo e(asset("image_data/{$user->user_image}")); ?>" alt="Book cover">
    <h2><?php echo e($user->user_fullname); ?></h2>
    <h4><?php echo e($user->email); ?></h4>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
  <?php endif; ?>
  </div>
  <div class="box footer">
    <ul>
      <li><a href="<?php echo e(route('readhistory')); ?>">Lịch sử đọc</a></li>
      <li><a href="<?php echo e(route('change_passowrd',$user->id)); ?>">đổi mật khẩu</a></li>
    </ul>
    <a href="<?php echo e(route('index')); ?>" class="btn">Quay lại</a>
  </div>
</div><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/users/profile.blade.php ENDPATH**/ ?>