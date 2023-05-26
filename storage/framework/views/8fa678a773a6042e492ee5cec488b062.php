


<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card-container">

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	<span class="pro">id: <?php echo e($data->id); ?></span>
	<img class="round" height="100px" src="<?php echo e(asset('/storage/images/users/'.$data->image)); ?>" alt="user" />
	<h3><?php echo e($data->name); ?></h3>
	<h6><?php echo e($data->email); ?></h6>
	<p><?php echo e($data->phone); ?></p>
    <p><?php echo e($data->created_at); ?></p>
    <a href="<?php echo e(route('detail_user',$data->id)); ?>" value="<?php echo e($data->name); ?>">Chi tiết</a>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php echo e($users->links()); ?>

<?php $__env->stopSection(); ?>

<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this
		<a target="_blank" href="https://florin-pop.com/blog/2019/04/profile-card-design">here</a>
		- Design made by
		<a target="_blank" href="https://dribbble.com/shots/6276930-Profile-Card-UI-Design">Ildiesign</a>
	</p>
</footer> -->
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\hope_laravel\Hope_be2\resources\views/layout/layout.blade.php ENDPATH**/ ?>