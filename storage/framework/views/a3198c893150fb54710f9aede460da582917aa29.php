<?php $__env->startSection("content"); ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">ویرایش اطلاعیه</h3>
                </div>
            <?php echo $__env->make('flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="/tabloed">
                    <?php echo e(csrf_field()); ?>


                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="idh" value="<?php echo e($item->id); ?>" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان اطلاعیه</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="<?php echo e($item->name); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">متن اطلاعیه</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="text" value="<?php echo e($item->text); ?>" placeholder="">
                        </div>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ویرایش</button>
                    </div>
                </form>
            </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>