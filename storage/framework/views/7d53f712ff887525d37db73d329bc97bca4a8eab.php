<?php $__env->startSection("content"); ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">درخواست کالا</h3>
                </div>
            <?php echo $__env->make('flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="/kalanew">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="user_id" class="name agileits" value="<?php echo e(Auth::user()->id); ?>" />
                    <input type="hidden" name="vaz1" class="name agileits" value="در حال بررسی" />
                    <input type="hidden" name="vaz2" class="name agileits" value="0" />

                    <input type="hidden" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value=" <?php echo e(Auth::User()->name); ?>"  >

                    <input type="hidden" id="tarikhs" name="tarikh1" class="form-control pull-right" >
                    <input type="hidden" class="form-control" id="exampleInputPassword1" name="vahed" value=" <?php echo e(Auth::User()->vahed); ?>"  >
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputPassword1">نام کالا</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="kala" placeholder="" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">تعداد</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="tedad" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">توضیحات</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="dec" placeholder="" >

                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                </form>
            </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>