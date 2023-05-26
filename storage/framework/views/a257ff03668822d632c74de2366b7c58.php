<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('./css/chitiet.css')); ?>">
<section>
    <h2><a href="<?php echo e(route('index')); ?>">Trang chủ</a></h2>
    <h1 style="text-align: center;"><?php echo e($book->book_name); ?> <a href="#">
    <?php if($followed == false): ?>
    <form action="<?php echo e(route('books.follow')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="book_id" value="<?php echo e($book->id); ?>">
    <button type="submit"><i class="fa-solid fa-eye"></i></button>
    </form>
    <?php else: ?>
    <form action="<?php echo e(route('unfollow',$book->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="book_id" value="<?php echo e($book->id); ?>">
    <button type="submit"><i class="fa-solid fa-eye-slash"></i></button>
    </form>
    <?php endif; ?>
    </a></h1>
    <?php $__currentLoopData = $Section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <details open>
      <summary><?php echo e($data->sections_name); ?></summary>
      <div>
      <?php if($loop->first): ?>
      <div class="icon"><img src="<?php echo e(asset("image_data/{$book->book_image}")); ?>" alt="Book cover"></div>
      <?php endif; ?>
        <p><?php echo e($data->sections_content); ?></p>
      </div>
    </details>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    <div class="pagination justify-content-center">
      <?php echo e($Section->links()); ?>

    </div>
    <div class="action">
  <div id="content" style="display: none;">
  <div class="ratingbook">
    <h2>Đánh giá tác phẩm <?php echo e($book->book_name); ?></h2>
    <form method="POST" action="<?php echo e(route('reviews.store',$book)); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="book_id" value="<?php echo e($book->id); ?>">
        <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
        <div>
            <label for="rating">Đánh giá:</label>
            <select name="rating" id="rating">
                <option value="1">1 sao</option>
                <option value="2">2 sao</option>
                <option value="3">3 sao</option>
                <option value="4">4 sao</option>
                <option value="5">5 sao</option>
            </select>
        </div>
        <div>
            <label for="comment">Bình luận:</label>
            <textarea name="comment" id="comment"></textarea>
        </div>
        <div>
            <button type="submit">Gửi đánh giá</button>
        </div>
    </form>
</div>


<h1>Các đánh giá cuốn:  <?php echo e($book->book_name); ?> </h1>
    <div class="showRating">
        <table>
            <thead>
                <tr>
                    <th>Người dùng</th>
                    <th>Đánh giá</th>
                    <th>Bình luận</th>
                    <th>Ngày</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($rating->user->user_fullname); ?></td>
                        <td><?php echo e($rating->rating); ?></td>
                        <td><?php echo e($rating->comment); ?></td>
                        <td><?php echo e($rating->created_at); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    </div>
  </div>
  </section>
  <button id="toggleBtn">Hiện/Ẩn đánh giá</button>
    <script>
        // Lấy phần tửHTML và nút kích hoạt
        const content = document.getElementById("content");
        const toggleBtn = document.getElementById("toggleBtn");

        // Xử lý sự kiện click vào nút kích hoạt
        toggleBtn.addEventListener("click", function() {
        if (content.style.display === "none") {
            // Nếu phần tử đang ẩn, hiển thị nó
            content.style.display = "block";
        } else {
            // Nếu phần tử đang hiển thị, ẩn nó
            content.style.display = "none";
        }
        });
    </script>
  <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/books/chitiet.blade.php ENDPATH**/ ?>