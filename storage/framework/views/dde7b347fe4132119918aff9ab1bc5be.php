<!DOCTYPE html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Readook </title>
</head>
<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>R</span>ead <span>D</span>ook</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a data-after="Home">Trang chủ</a></li>
            <li><a href="#" data-after="Service">Danh mục</a>
            <!-- <ul>
                <li>Danh mục 1</li>
                <li>Danh mục 2</li>
            </ul> -->
            </li>
            <li><a href="<?php echo e(route('follow')); ?>" data-after="Projects">Theo dõi</a></li>
            <li><a href="#" data-after="About">Giới thiệu</a></li>
            <?php if(is_null(Auth::id())): ?>
            <li><a href="<?php echo e(route('login')); ?>" data-after="Contact">Đăng nhập</a></li>
            <?php endif; ?>
            <?php if(!is_null(Auth::id())): ?>
            <li><a href="<?php echo e(route('signOut')); ?>" data-after="Contact">Đăng xuất: <?php echo e(Auth::id()); ?></a></li>
            <?php endif; ?>
            <li>
              <a href="#" class="icon" data-after="About"><i class="fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/header.blade.php ENDPATH**/ ?>