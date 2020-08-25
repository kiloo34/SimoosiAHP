<!doctype html>
<html class="no-js " lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>SimooSi || {{ strpos(url()->current(), 'register') ==  false ? 'Login' : 'Register' }}</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/authentication.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
    </head>

    <body class="theme-purple authentication sidebar-collapse">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
            <div class="container">
                <div class="navbar-translate n_logo">
                    <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">SimooSi</a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-white btn-round" href="{{ route('register') }}">SIGN UP</a>
                            </>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="page-header">
            <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
            <div class="container">
                <div class="col-md-12 content-center">
                    <div class="card-plain">
                        <form class="form" method="" action="">
                            <div class="header">
                                <div class="logo-container">
                                    <img src="assets/images/logo.svg" alt="">
                                </div>
                                <h5>Log in</h5>
                            </div>
                            <div class="content">
                                <div class="input-group input-lg">
                                    <input type="text" name="username" class="form-control"
                                        placeholder="Enter User Name">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-account-circle"></i>
                                    </span>
                                </div>
                                <div class="input-group input-lg">
                                    <input type="password" name="password" placeholder="Password"
                                        class="form-control" />
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <input type="submit" class="btn btn-primary btn-round" value="SIGN IN">
                                <h5><a href="forgot-password.html" class="link">Forgot Password?</a></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                            <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                            <li><a href="javascript:void(0);">FAQ</a></li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Jquery Core Js -->
        <script src="assets/bundles/libscripts.bundle.js"></script>
        <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

        <script>
            $(".navbar-toggler").on('click', function () {
                $("html").toggleClass("nav-open");
            });
            //=============================================================================
            $('.form-control').on("focus", function () {
                $(this).parent('.input-group').addClass("input-group-focus");
            }).on("blur", function () {
                $(this).parent(".input-group").removeClass("input-group-focus");
            });
        </script>
    </body>

</html>
