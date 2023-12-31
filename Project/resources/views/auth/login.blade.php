
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Virtual Hospital Admin Panel</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/back-end-assets')}}/images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/back-end-assets')}}/css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/back-end-assets')}}/css/themify-icons.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/back-end-assets')}}/css/styles.css">
    <link rel="stylesheet" href="{{asset('assets/back-end-assets')}}/css/red.css" id="style_theme">
    <link rel="stylesheet" href="{{asset('assets/back-end-assets')}}/css/responsive.css">

    <script src="{{asset('assets/back-end-assets')}}/js/modernizr.min.js"></script>
</head>

<body class="auth-bg">
<!-- Pre Loader -->
<div class="loading">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--/Pre Loader -->
<!-- Color Changer -->
<div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
    <span class="theme-color theme-default theme-active" data-color="green"></span>
    <span class="theme-color theme-blue" data-color="blue"></span>
    <span class="theme-color theme-red" data-color="red"></span>
    <span class="theme-color theme-violet" data-color="violet"></span>
    <span class="theme-color theme-yellow" data-color="yellow"></span>
</div>
<!-- /Color Changer -->
<div class="wrapper">
    <!-- Page Content  -->
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 auth-box">
                    <div class="proclinic-box-shadow">
                        <h3 class="widget-title">Login</h3>
                        <form class="widget-form" action="{{route('login')}}" method="post">
                            @csrf
                            <!-- form-group -->
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input name="email" type="email" placeholder="Email Address" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
                                           data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <!-- form-group -->
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" placeholder="Password" name="password" class="form-control" data-validation="strength" data-validation-strength="2"
                                           data-validation-has-keyup-event="true">
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <!-- Check Box -->
                            <div class="form-check row">
                                <div class="col-sm-12 text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /Check Box -->
                            <!-- Login Button -->
                            <div class="button-btn-block">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            <!-- /Login Button -->
                            <!-- Links -->
                            <div class="auth-footer-text">
                                <small>New User,
                                    <a href="{{route('register')}}">Sign Up</a> Here</small>
                            </div>
                            <!-- /Links -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content  -->
</div>
<!-- Jquery Library-->
<script src="{{asset('assets/back-end-assets')}}/js/jquery-3.2.1.min.js"></script>
<!-- Popper Library-->
<script src="{{asset('assets/back-end-assets')}}/js/popper.min.js"></script>
<!-- Bootstrap Library-->
<script src="{{asset('assets/back-end-assets')}}/js/bootstrap.min.js"></script>
<!-- Custom Script-->
<script src="{{asset('assets/back-end-assets')}}/js/custom.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 12:46:19 GMT -->
</html>
