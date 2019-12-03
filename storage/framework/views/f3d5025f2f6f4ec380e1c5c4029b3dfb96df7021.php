<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('contents'); ?>
    <?php if(\Session::has('alert')): ?>
        <div class="messagealertdanger">
            <div class="alert-danger">
                <div><?php echo e(Session::get('alert')); ?></div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(\Session::has('alert-success')): ?>
        <div class="messagealert">
            <div class="alert-success" role="alert">
                <div><?php echo e(Session::get('alert-success')); ?></div>
            </div>
        </div>
    <?php endif; ?>
    <p id="title">Login</p>
    <hr>
    <div class="form-insert">
        <form action="<?php echo e(url('/loginPost')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="field1"><span>E-mail Address</span>
                <input type="email" class="input-field" name="emaillogin" value="<?php echo e(Cookie::get('cookie')); ?>" autofocus>
                <td>
                    <?php echo e($errors->first('emaillogin')); ?>

                </td>
            </label>

            <label for="field1"><span>Password</span>
                <input type="password" class="input-field" name="passlogin">
                <td>
                    <?php echo e($errors->first('passlogin')); ?>

                </td>
            </label>

            <label class="rem" for="remember">
                <input id="remember" class="form-check-input" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                Remember Me
            </label>

            <div class="submit"><input type="submit" value="Login" /></div>

            <p class="forgot">
                Forgot Your Password?
            </p>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/auth/login.blade.php ENDPATH**/ ?>