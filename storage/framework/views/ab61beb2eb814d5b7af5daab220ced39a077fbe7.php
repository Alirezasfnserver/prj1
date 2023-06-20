<table class="table table-bordered">
    <tr>

        <th>نام میهمان</th>
        <th>شماره تماس</th>
        <th>تاریخ دعوت</th>
        <th>میزبان</th>
        <th>#</th>
        <th>#</th>
        <th>وضعیت</th>
        <th>ورود</th>
        <th>خروج</th>
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
            <td><form method="post" enctype="multipart/form-data" action="/mihmanup1">
                    <?php echo csrf_field(); ?>


                    <input type="hidden" name="idh" value="<?php echo e($item->id); ?>" >
                    <input type="hidden" name="vaz" value="میهمان وارد مجموعه شده است" >
                    <input type="hidden" id="tarikh" name="tarikh2" class="form-control pull-right">
                    <button type="submit" class="btn btn-success">ورود</button>
                </form></td>
            <td><form method="post" enctype="multipart/form-data" action="/mihmanup2">
                    <?php echo csrf_field(); ?>


                    <input type="hidden" name="idh" value="<?php echo e($item->id); ?>" >
                    <input type="hidden" name="vaz" value="میهمان از مجموعه خارج شده است" >
                    <input type="hidden" name="vaz2" value="1" >
                    <input type="hidden" id="tarikhs" name="tarikh3" class="form-control pull-right">
                    <button type="submit" class="btn btn-danger">خروج</button>
                </form></td>


        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>