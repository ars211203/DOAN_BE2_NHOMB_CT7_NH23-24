
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card-container">
    <link rel="stylesheet" href="<?php echo e(asset('css/list_user.css')); ?>">
	<span class="pro">id: <?php echo e($data->id); ?></span>
	<img class="round" height="100px" src="<?php echo e(asset('/storage/images/books/'.$data->image)); ?>" alt="user" />
	<h3><?php echo e($data->name); ?></h3>
	<h6><?php echo e($data->email); ?></h6>
	<h6><?php echo e($data->role_id); ?></h6>
	<p><?php echo e($data->phone); ?></p>
    <p><?php echo e($data->created_at); ?></p>
    <a href="<?php echo e(route('detail_user',$data->id)); ?>" id="detail">Chi tiết</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <div id="page"><?php echo e($users->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAn_BE2_CT7\resources\views/layout/list_user.blade.php ENDPATH**/ ?>