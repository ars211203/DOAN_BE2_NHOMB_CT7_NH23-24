<section class="about"><h2 class="logo">Chi<span> tiết</span></h2>
<link rel="stylesheet" href="<?php echo e(asset('css/detail_user.css')); ?>">
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
            <div class="main">
            <img src="<?php echo e(asset('/storage/images/users/'.$users->image)); ?>" alt="">
            <div class="about-text">
                <h2><?php echo e($users->name); ?></h2>
                <h5>Phone:  <span><?php echo e($users->phone); ?></span></h5>
                <h5>Email: <span><?php echo e($users->email); ?></span></h5>
                <p>
                    Ngày tạo: <?php echo e($users->created_at); ?> <br>
                    Chỉnh sửa gần nhất: <?php echo e($users->updated_at); ?>

                </p>
                <a href="<?php echo e(route('list_users')); ?>"><i class="fa-solid fa-backward"></i></a>
            </div>
        </div>
</section>
<script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
<?php /**PATH G:\Xampp\htdocs\hope_laravel\Hope_be2\resources\views/layout/detail_user.blade.php ENDPATH**/ ?>