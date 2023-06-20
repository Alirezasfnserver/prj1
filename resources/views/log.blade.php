
<!DOCTYPE html>
<html lang="fa">
<head>
    <title>پرتال سازمانی شرکت درخواست کننده</title>
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
                <form  method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <label>نام کاربری</label>
                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input type="email" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <label>کلمه عبور</label>
                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="Password" placeholder="Enter Password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <button class="btn btn-danger btn-block" type="submit">ورود</button >
                </form>

            </div>
        </div>
        <!-- //main content -->
    </div>
    <!-- footer -->
    <div class="footer">
        <p>&copy; 2020 . All Rights Reserved | Design by <a href="https://easyonline.ir/" target="blank">------</a></p>
    </div>
    <!-- footer -->
</div>

</body>
</html>