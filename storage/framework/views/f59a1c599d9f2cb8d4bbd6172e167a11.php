<link rel="stylesheet" href="<?php echo e(asset('css/readhistory.css')); ?>">

<!DOCTYPE html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Readook </title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar" style="background-color: #555;">
        <div class="brand">
          <a  href="<?php echo e(route('index')); ?>">
            <h1><span>R</span>ead <span>D</span>ook</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="<?php echo e(route('index')); ?>">Trang chủ</a></li>
            <li><a href="#">Theo dõi</a></li>
            <li><a href="<?php echo e(route('readhistory')); ?>" data-after="Projects">Lịch sử đọc</a></li>
            <li><a href="#" data-after="About">Giới thiệu</a></li>
            <?php if(is_null(Auth::id())): ?>
            <li><a href="<?php echo e(route('login')); ?>" data-after="Contact">Đăng nhập</a></li>
            <?php endif; ?>
            <?php if(!is_null(Auth::id())): ?>
            <li><a href="<?php echo e(route('signOut')); ?>" data-after="Contact">Đăng xuất: <?php echo e(Auth::id()); ?></a></li>
            <li>
              <a href="<?php echo e(route('profile',Auth::id())); ?>" class="icon" data-after="About"><i class="fa-solid fa-user"></i></a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<table class="custom-table">
    <thead>
        <tr>
            <th>Cuốn sách</th>
            <th>Số trang đã đọc</th>
            <th>Thời gian cập nhật</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $user_read_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($history->book->book_name); ?></td>
            <td><?php echo e($history->last_read_page); ?></td>
            <td><?php echo e($history->updated_at->format('d/m/Y H:i:s')); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/users/readhistory.blade.php ENDPATH**/ ?>