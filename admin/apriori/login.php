<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Rule Library</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../../login/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../login/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../../login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../../login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../../login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../../login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../../login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../login/css/login.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="cek-login.php" class="login100-form validate-form" method="post" role="form">
                    <span class="login100-form-title p-b-20">
                        <img src="../../login/images/logo.png" alt="Image" height="70" width="70">
                    </span>
                    <span class="login100-form-title p-b-26">
                        Silahkan Login!
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" id="username" required>
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" id="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <?php if (isset($error)) : ?>
                        <p class="text-danger">Username/Password tidak sesuai</p>
                    <?php endif; ?>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="login">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-20">
                        <span class="txt1">
                            Belum Punya Akun?
                        </span>

                        <a class="txt2" href="../registrasi/index.php">
                            Klik Disini!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <nav class="navbar fixed-bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">Copyright @Muhammad Fadhil AY</a>
    </nav>

    <div id="dropDownSelect1"></div>

    <script src="../../login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../login/vendor/animsition/js/animsition.min.js"></script>
    <script src="../../login/vendor/bootstrap/js/popper.js"></script>
    <script src="../../login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../login/vendor/select2/select2.min.js"></script>
    <script src="../../login/vendor/daterangepicker/moment.min.js"></script>
    <script src="../../login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="../../login/vendor/countdowntime/countdowntime.js"></script>
    <script src="../../login/js/main.js"></script>

</body>

</html>