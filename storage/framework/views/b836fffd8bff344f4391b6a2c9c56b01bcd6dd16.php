<?php $__env->startSection("content"); ?>


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">لیست میهمانان شما</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>

                        <th>نام میهمان</th>
                        <th>شماره تماس</th>
                        <th>تاریخ دعوت</th>
                        <th>میزبان</th>
                        <th>#</th>
                        <th>#</th>
                        <th>وضعیت</th>
                        <th>ویرایش</th>
                    </tr>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->phone); ?></td>
                        <td><?php echo e($item->tarikh1); ?></td>
                        <td><?php echo e($item->mizban); ?></td>
                        <td><?php echo e($item->nahar); ?>#</td>
                        <td><?php echo e($item->parking); ?>#</td>
                        <td><?php echo e($item->vaz); ?></td>
                        <td><a href="/mihmaned/<?php echo e($item->id); ?>" class="btn btn-success" role="button">ویرایش</a></td>

                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <!-- /.box-body -->

        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>