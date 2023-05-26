
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
  <!-- start -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
      <?php if(count($books) == 0): ?>
      <h1 class="section-title">Không tìm<span> T</span>hấy</h1>
        <?php else: ?>
        <h1 class="section-title">Kết<span> Q</span>uả</h1>
      </div>
      <div class="service-bottom">
      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="service-item">
        <div class="icon"><img src="<?php echo e(asset("image_data/{$data->book_image}")); ?>" alt="Book cover"></div>
            <h2><a href="<?php echo e(route('detail.book',$data->id)); ?>" id="action_book"><?php echo e($data->book_name); ?></a></h2>
            <p><?php echo e($data->book_description); ?></p>
          </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php endif; ?>
     <div class="pagination justify-content-center">
      <?php echo e($books->links()); ?>

    </div>
      </div>
    </div>
  </section>
   <!-- end -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>R</span>ead <span>D</span>ook</h1>
      </div>
      <h2>Đọc sách đủ đầy sau khi ngủ dậy để biết thêm nhiều điều bổ ích các bạn nhé!</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>  
      </div>
      <!-- <p>Copyright © 2020 Arfan. All rights reserved</p> -->
    </div>
  </section>
  <!-- End Footer -->
  <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/books/search.blade.php ENDPATH**/ ?>