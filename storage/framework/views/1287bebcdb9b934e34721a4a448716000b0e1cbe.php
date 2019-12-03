<?php $__env->startSection('title', "Insert Flower"); ?>

<?php $__env->startSection('contents'); ?>
    <p id="title">Insert Flowers</p>
    <hr>
    <div class="form-insert">
        <form action="/admin/flowers/insert" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <label for="flower_name"><span>Flower Name</span>
                <p><?php echo e($errors->first('flower_name')); ?></p><input type="text" class="input-field" name="flower_name"
                                                               value=""/></label>
            <label for="flower_price"><span>Flower Price</span>
                <p><?php echo e($errors->first('flower_price')); ?></p><input type="number" class="input-field" name="flower_price"
                                                                value=""/></label>
            <label for="flower_stock"><span>Flower Stock</span>
                <p><?php echo e($errors->first('flower_stock')); ?></p><input type="number" class="input-field" name="flower_stock"
                                                                value=""/></label>
            <label for="flower_type"><span>Flower Type</span><select name="flower_type" class="select-field">
                    <?php $__currentLoopData = $flower_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->flower_type); ?>"><?php echo e($type->flower_type); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></label>

            <label for="flower_description"><span>Flower Description</span>
                <p><?php echo e($errors->first('flower_description')); ?></p><textarea name="flower_description"
                                                                         class="textarea-field"></textarea></label>

            <label for="flower_image"><span>img_url</span>
                <p><?php echo e($errors->first('flower_image')); ?></p><input type="file" class="input-field" name="flower_image"
                                                                value=""/></label>
            <div class="submit"><input type="submit" value="Insert"/></div>
        </form>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/admin/insert_flower.blade.php ENDPATH**/ ?>