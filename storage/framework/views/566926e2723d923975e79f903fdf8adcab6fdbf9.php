<?php $__env->startSection('title', 'Update Courier'); ?>

<?php $__env->startSection('contents'); ?>
    <p id="title">Update Courier</p>
    <hr>
    <div class="form-insert">
        <form action="/courier/<?php echo e($courier->id); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('put')); ?>

            <table id="courier-insert">
                <tr>
                    <td><span>Courier ID</span></td>
                    <td><input type="text" name="courier_name" value="<?php echo e($courier->id); ?>" disabled></td>
                </tr>
                <tr>
                    <td><span>Courier Name</span></td>
                    <td><input type="text" name="courier_name" value="<?php echo e($courier->courier_name); ?>"></td>
                    <?php echo e($errors->first('courier_name')); ?>

                </tr>
                <tr>
                    <td><span>Shipping Cost</span></td>
                    <td><input type="number" name="courier_price" value="<?php echo e($courier->courier_price); ?>"></td>
                    <?php echo e($errors->first('courier_price')); ?>

                </tr>
            </table>
            <div class="submit">
                <input type="submit" name="" value="Insert">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/admin/UpdateCourier.blade.php ENDPATH**/ ?>