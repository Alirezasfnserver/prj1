<?php $__env->startSection("content"); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">لیست میهمانان جاری</h3>
                </div>
            <?php echo $__env->make('flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- /.box-header -->
                <div class="box-body" id="listneg">

                </div>
                <!-- /.box-body -->

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>