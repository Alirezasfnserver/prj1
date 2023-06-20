
<!DOCTYPE html>
<html lang="fa">
<head>
    <title>پرتال سازمانی گروه کیان فولاد</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

    <!-- css files -->
    <link href="../lo/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../lo/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //css files -->

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- //google fonts -->

</head>
<body>

<div class="signupform">
    <div class="container">
        <!-- main content -->
        <div class="agile_info">
            <div class="w3l_form">
                <div class="left_grid_info">

                    <img src="../lo/images/logo.png" alt="" />
                </div>
            </div>
            <div class="w3_info">

                <p></p>
                <form  method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <label>نام کاربری</label>
                    <div class="input-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input type="email" placeholder="ایمیل خود را وارد نمایید" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                        <?php endif; ?>
                    </div>
                    <label>کلمه عبور</label>
                    <div class="input-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="Password" placeholder="رمز عبور خود را وارد نمایید" name="password" required>
                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                        <?php endif; ?>
                    </div>

                    <button class="btn btn-danger btn-block" type="submit">ورود</button >
                </form>

            </div>
        </div>
        <!-- //main content -->
    </div>

</div>

</body>
</html>