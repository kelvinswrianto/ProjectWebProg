<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('contents'); ?>
    <p id="title">Register</p>
    <hr>
    <div class="form-insert">
        <form action="<?php echo e(url('/registerPost')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="field1"><span>Name</span>
                <input type="text" class="input-field" name="nameregister" value="<?php echo e(old('nameregister')); ?>" autofocus>
                <td>
                    <?php echo e($errors->first('nameregister')); ?>

                </td>
            </label>

            <label for="field1"><span>E-Mail Address</span>
                <input type="text" class="input-field" name="emailregister" value="<?php echo e(old('emailregister')); ?>" autofocus>
                <td>
                    <?php echo e($errors->first('emailregister')); ?>

                </td>
            </label>

            <label for="field1"><span>Phone Number</span>
                <input type="tel" class="input-field" name="phoneregister" value="<?php echo e(old('phoneregister')); ?>" autofocus>
                <td>
                    <?php echo e($errors->first('phoneregister')); ?>

                </td>
            </label>

            <label><span>Gender</span>
                <div class="radio-group">
                    <label>
                        <input type="radio" value="male" name="gender" <?php if(old('gender')== "male") { echo 'checked="checked"'; } ?>>
                        Male
                    </label>

                    <label>
                        <input type="radio" value="female" name="gender" <?php if(old('gender')== "female") { echo 'checked="checked"'; } ?>>
                        Female
                        <span></span>
                    </label>

                    <td>
                        <?php echo e($errors->first('gender')); ?>

                    </td>
                </div>
            </label>

            <label><span>Address</span>
                <textarea class="textarea-field" name="txtarea" id="address" cols="100" rows="10" ><?php echo e(old('txtarea')); ?></textarea>

                <td>
                    <?php echo e($errors->first('txtarea')); ?>

                </td>
            </label>

            <div class="form-group">
                <label for="password"><span>Password</span>
                    <input type="password" class="input-field" id="password" name="password">
                    <td>
                        <?php echo e($errors->first('password')); ?>

                    </td>
                </label>
            </div>

            <div class="form-group">
                <label for="password-confirmation"><span>Confirm Password</span>
                    <input type="password" class="input-field" id="password-confirmation" name="password_confirmation">
                    <td>
                        <?php echo e($errors->first('password_confirmation')); ?>

                    </td>
                </label>
            </div>

            <label>
                <span>Image</span>
                <input type="file" class="input-field" name="product_image">
                <!-- code error here -->
                <td>
                    <?php echo e($errors->first('product_image')); ?>

                </td>
            </label>

            <div class="submit"><input type="submit" value="Register" /></div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/auth/register.blade.php ENDPATH**/ ?>