<?php $__env->startSection("content"); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">لیست اطلاعیه ها</h3>
                </div>
                <a class="btn btn-app" href="/newnotfi">
                    <i class="fa fa-edit"></i> افزودن
                </a>
            <?php echo $__env->make('flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>عنوان</th>
                            <th>متن</th>
                            <th>تاریخ انتشار</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->text); ?></td>
                                <td><?php echo e($item->tarikh); ?></td>

                                <td><a href="/tabloedit/<?php echo e($item->id); ?>" class="btn btn-success" role="button">ویرایش</a></td>
                                <td><form method="post" enctype="multipart/form-data" action="/tablohazf">
                                        <?php echo csrf_field(); ?>


                                        <input type="hidden" name="idh" value="<?php echo e($item->id); ?>" >

                                        <input type="hidden" name="vaz" value="1" >

                                        <button type="submit" class="btn btn-danger">حذف</button>
                                    </form></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>