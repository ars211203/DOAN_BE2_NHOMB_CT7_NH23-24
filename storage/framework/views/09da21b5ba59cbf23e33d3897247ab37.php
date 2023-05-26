<link rel="stylesheet" href="<?php echo e(asset('css/password.css')); ?>">
<div class="card">
        <div class="card-header"><?php echo e(__('Đổi mật khẩu')); ?></div>

        <div class="card-body">
            <form method="POST" action="<?php echo e(route('update.password',$user->id)); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="current_password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mật khẩu hiện tại')); ?></label>

                    <div class="col-md-6">
                        <input id="current_password" type="password" class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="current_password" required autocomplete="current_password">

                        <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <div><?php echo e($message); ?></div>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="new_password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mật khẩu mới')); ?></label>

                    <div class="col-md-6">
                        <input id="new_password" type="password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="new_password" required autocomplete="new_password">

                        <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <div><?php echo e($message); ?></div>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="new_password_confirmation" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Xác nhận mật khẩu mới')); ?></label>

                    <div class="col-md-6">
                        <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required autocomplete="new_password_confirmation">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('Đổi mật khẩu')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div><?php /**PATH G:\Xampp\htdocs\DoAnBe_2_Backup\DoAn_BE2_CT7\resources\views/users/change_password.blade.php ENDPATH**/ ?>