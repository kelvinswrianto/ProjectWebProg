<?php $__env->startSection('title', 'Update Profile'); ?>

<?php $__env->startSection('contents'); ?>
    <p id="title">Update Courier</p>
    <hr>

    <div class="form-insert">
        <form action="/profile" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('put')); ?>

            <label for="field1"><span>Name</span>
                <input type="text" class="input-field" name="nameregister" value="<?php echo e(Session::get('username')); ?>" autofocus>
                <td>
                    <?php echo e($errors->first('nameregister')); ?>

                </td>
            </label>
            <label for="field1"><span>E-Mail Address</span>
                <input type="text" class="input-field" name="emailregister" value="<?php echo e(Session::get('email')); ?>" autofocus>
                <td>
                    <?php echo e($errors->first('emailregister')); ?>

                </td>
            </label>

            <label for="field1"><span>Phone Number</span>
                <input type="tel" class="input-field" name="phoneregister" value="<?php echo e(Session::get('phone')); ?>" autofocus>
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
                <textarea class="textarea-field" name="address" id="address" cols="100" rows="10" ><?php echo e(Session::get('address')); ?></textarea>

                <td>
                    <?php echo e($errors->first('address')); ?>

                </td>
            </label>
            <label>
                <span>Profile image</span>
                <input type="file" class="input-field" name="product_image">
                <td>
                    <?php echo e($errors->first('product_image')); ?>

                </td>
            </label>
            <div class="submit">
                <input type="submit" name="" value="Update">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/updateProfile.blade.php ENDPATH**/ ?>