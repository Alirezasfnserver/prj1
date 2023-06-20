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
                <form  method="post" enctype="multipart/form-data" action="/kalaup">
                    <?php echo e(csrf_field()); ?>

                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <input type="hidden" name="idh" value="<?php echo e($item->id); ?>" >
                        <table class="table table-bordered">
                            <tr>
                                <th> درخواست کننده</th>
                                <th>واحد/مجموعه</th>
                                <th>نام کالا</th>
                                <th>تعداد</th>
                                <th>تاریخ درخواست</th>
                                <th>توضیحات</th>
                                <th>وضعیت</th>


                            </tr>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->vahed); ?></td>
                                    <td><?php echo e($item->kala); ?></td>
                                    <td><?php echo e($item->tedad); ?></td>
                                    <td><?php echo e($item->tarikh1); ?></td>
                                    <td><?php echo e($item->dec); ?></td>
                                    <td><?php echo e($item->vaz1); ?></td>


                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <div class="form-group">
                            <label for="exampleInputPassword1">مسئول انجام</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="mas" placeholder="" value="<?php echo e($item->mas); ?>" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">تحویل گیرنده</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="tah" placeholder="" value="<?php echo e($item->tah); ?>" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">قیمت به ریال</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="price" placeholder="" value="<?php echo e($item->price); ?>" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">توضیحات محرمانه</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="t2" placeholder="" value="<?php echo e($item->t2); ?>" >

                        </div>
                        <label>وضعیت</label>
                        <select class="form-control" name="vaz1">
                            <option value="<?php echo e($item->vaz1); ?>" selected><?php echo e($item->vaz1); ?></option>
                            <option value="در انتظار تایید">در انتظار تایید</option>
                            <option value="ثبت سفارش و تایید نهایی">ثبت سفارش و تایید نهایی</option>
                            <option value="کالا آماده تحویل می باشد">کالا آماده تحویل می باشد</option>
                        </select>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                </form>
            </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>