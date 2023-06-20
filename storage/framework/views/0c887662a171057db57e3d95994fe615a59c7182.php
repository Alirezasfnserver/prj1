<?php $__env->startSection("content"); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">درخواست های جاری</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th> درخواست کننده</th>
                            <th>واحد/مجموعه</th>
                            <th>نام کالا</th>
                            <th>تعداد</th>
                            <th>تاریخ درخواست</th>
                            <th>توضیحات</th>
                            <th>وضعیت</th>
                            <th>مشاهده/ویرایش</th>
                            <th>ثبت تحویل / اتمام فرایند</th>

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
                                <td><a href="/kalaed/<?php echo e($item->id); ?>" class="btn btn-success" role="button">ویرایش</a></td>
                                <td><form method="post" enctype="multipart/form-data" action="/kalaup2">
                                        <?php echo csrf_field(); ?>


                                        <input type="hidden" name="idh" value="<?php echo e($item->id); ?>" >
                                        <input type="hidden" name="vaz1" value="کالا تحویل واحد مربوطه گردید" >
                                        <input type="hidden" id="tarikhs" name="tarikh2" class="form-control pull-right">
                                        <button type="submit" class="btn btn-danger">ثبت تحویل</button>
                                    </form></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>