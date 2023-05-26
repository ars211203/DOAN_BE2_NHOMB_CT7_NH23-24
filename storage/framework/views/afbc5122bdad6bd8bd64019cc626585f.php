 <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('./css/chitiet.css')); ?>">
<section>
    <h1 style="text-align: center;"><?php echo e($book->book_name); ?> <a href="#"><i class="fa-solid fa-plus"></i></a></h1>
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
    <a href="<?php echo e(route('index')); ?>">Quay lai</a>
    <div class="pagination justify-content-center">
      <?php echo e($Section->links()); ?>

    </div>
    <div class="action">

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
<?php echo $__env->make('books.showrating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </section>
  </div>
  <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/books/chitiet.blade.php ENDPATH**/ ?>