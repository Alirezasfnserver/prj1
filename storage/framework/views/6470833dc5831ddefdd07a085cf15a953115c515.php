<?php $__env->startSection("content"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow"> 404</h2>

            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> صفحه مورد نظر شما یافت نشد. </h3>

                <p>
                    متاسفانه صفحه مورد نظر شما در سایت وجود ندارد و یا شما مجاز به دسترسی به آن نمی باشید
                    میتوانید به<a href="/"> داشبرد </a> برگردید .
                </p>


            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>