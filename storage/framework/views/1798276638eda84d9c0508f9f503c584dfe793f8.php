<?php $__env->startSection('title', 'Home Page'); ?>

<style>
    .topcard {
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .bottomcard {
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .cardview {
        display: flex;
        flex-direction: row;
        flex-flow: wrap;
        justify-content: center;
        margin-bottom: 50px;
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        max-width: 233px;
        min-width: 220px;
        height: 370px;
        background-color: #ffffff;
        border-width: 2px;
        border-radius: 10px;
        border-color: #F37A71;
        border-style: solid;
        margin-right: 20px;
        margin-left: 20px;
        margin-top: 50px;
        box-shadow: 5px 6px 10px black;
    }

    .image img {
        padding-top: 9px;
        width: 92%;
        height: 150px;
        max-height: 150px;
        padding-left: 9px;
        border-radius: 20px;
    }

    .detailorder form {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .detailorder {
        display: flex;
    }

    .name {
        padding-top: 10px;
        font-size: 22px;
        font-weight: bold;
        padding-left: 10px;
    }

    .detailorder input[type=submit] {
        border: none;
        padding: 10px 15px 10px 15px;
        color: #fff;
        font-size: 20px;
        box-shadow: 1px 1px 4px #DADADA;
        border-radius: 6px;
        width: 100px;
        margin-bottom: 10px;
    }

    .pagination li {
        display: inline-block;
        color: black;
        float: left;
        text-decoration: none;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 20px 5px 20px 5px;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination li.active {
        padding: 8px 16px;
        background-color: #F37A71;
        color: white;
        border: 1px solid #F37A71;
    }

    .pagination li.disabled {
        padding: 8px 16px;
    }

    .pagination li:hover:not(.active) {
        background-color: #ddd;
    }

    .pagination li:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .pagination li:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .desc {
        margin-top: 15px;
        padding-left: 10px;
        max-height: 100px;
        overflow: auto;
        margin-top: 15px;
        padding-right: 5px;
    }
</style>

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
    <p id="title">Catalog</p>
    <hr>
    <div>
        <form action="/homepage/search" method="get" class="form-insert">
            <input class="input-search" type="text" name="search" placeholder="I want to buy..">
            <input type="submit" value="Search">
            
        </form>
    </div>

    <div class="cardview">
        <?php $__currentLoopData = $flowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="topcard">
                    <div class="image">
                        <img src="<?php echo e(asset('storage/images/'.$flower->flower_image)); ?>" alt="flower image">

                    </div>
                    <div class="name">
                        <p><?php echo e($flower->flower_name); ?></p>
                    </div>
                </div>
                <div class="bottomcard">
                    <div class="desc">
                        <p><?php echo e($flower->flower_description); ?></p>
                    </div>

                    <div class="detailorder">
                        <form class="d1" action="/flowers/<?php echo e($flower->id); ?>" method="get">
                            <input type="submit" value="Details">
                        </form>
                        <form class="d1" action="/flowers/<?php echo e($flower->id); ?>/order" method="get"
                              enctype="multipart/form-data">
                            <input type="submit" value="Order">
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($flowers->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 5\Web Programming\PROJECT LAB\LARAVEL\ProjectWebProg\ProjectWebProg\resources\views/auth/homepage.blade.php ENDPATH**/ ?>