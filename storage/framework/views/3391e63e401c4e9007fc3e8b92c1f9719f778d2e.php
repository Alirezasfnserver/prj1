<?php $__env->startSection("content"); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">درخواست های شما</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>نام کالا</th>
                            <th>تعداد</th>
                            <th>تاریخ درخواست</th>
                            <th>توضیحات</th>
                            <th>وضعیت</th>
                            <th>تاریخ تحویل</th>

                        </tr>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->kala); ?></td>
                                <td><?php echo e($item->tedad); ?></td>
                                <td><?php echo e($item->tarikh1); ?></td>
                                <td><?php echo e($item->dec); ?></td>
                                <td><?php echo e($item->vaz1); ?></td>
                                <td><?php echo e($item->tarikh2); ?></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>