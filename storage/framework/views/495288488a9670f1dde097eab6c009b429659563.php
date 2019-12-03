<?php $__env->startSection('title', "Insert Flower Type"); ?>

<?php $__env->startSection('contents'); ?>
    <p id="title">Insert Flower Type</p>
    <hr>
    <div class="form-insert">
        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <label for="flower_type"><span>Flower Type</span><input type="text" class="input-field" name="flower_type" value="" /></label>
            <div class="submit"><input type="submit" value="Insert" /></div>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/admin/insert_flower_type.blade.php ENDPATH**/ ?>