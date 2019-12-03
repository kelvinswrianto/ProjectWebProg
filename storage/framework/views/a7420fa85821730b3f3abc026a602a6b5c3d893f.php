<?php $__env->startSection('title', "Update Flower"); ?>

<?php $__env->startSection('contents'); ?>
    <p id="title">Update Flowers</p>
    <hr>

    <div class="form-insert">
        <form action="/admin/flowers/<?php echo e($flower->id); ?>/update" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="flower_name"><span>Flower Name</span>
                <?php echo e($errors->first('flower_name')); ?><input type="text" class="input-field" name="flower_name" placeholder="<?php echo e($flower->flower_name); ?>"/></label>
            <label for="flower_price"><span>Flower Price</span>
                <?php echo e($errors->first('flower_price')); ?><input type="number" class="input-field"
                                                                name="flower_price" placeholder="<?php echo e($flower->flower_price); ?>"/></label>
            <label for="flower_stock"><span>Flower Stock</span>
                <?php echo e($errors->first('flower_stock')); ?><input type="number" class="input-field"
                                                                name="flower_stock" placeholder="<?php echo e($flower->flower_stock); ?>"/></label>
            <label for="flower_type"><span>Flower Type</span>
                <?php echo e($errors->first('flower_type')); ?><select name="flower_type" class="select-field">
                    <?php $__currentLoopData = $flower_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($type->flower_type == $flower->flower_type): ?>
                            <option selected value="<?php echo e($type->flower_type); ?>"><?php echo e($type->flower_type); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($type->flower_type); ?>"><?php echo e($type->flower_type); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></label>
            <label for="flower_description"><span>Flower Description</span>
                <?php echo e($errors->first('flower_description')); ?><textarea name="flower_description"
                                                                         class="textarea-field"
                                                                         placeholder="<?php echo e($flower->flower_description); ?>"></textarea></label>
            <label for="flower_image"><span>img_url</span>
                <?php echo e($errors->first('flower_image')); ?><input type="file" class="flower_image" name="flower_image"
                                                                value=""/></label>
            <div class="submit"><input type="submit" value="Update"/></div>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/admin/update_flower.blade.php ENDPATH**/ ?>