
<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 12:46:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProClinic-Bootstrap4 Hospital Admin</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
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
    <!-- Page Content -->
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 auth-box">
                    <div class="proclinic-box-shadow">
                        <!-- Page Title -->
                        <h3 class="widget-title">Sign Up</h3>
                        <!-- /Page Title -->

                        <!-- Form -->
                        <form class="widget-form" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="email" placeholder="Email" name="email" class="form-control" required="" data-validation="email" data-validation-has-keyup-event="true">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input name="name" type="text" placeholder="Username" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
                                           data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" placeholder="Password" name="password" class="form-control" data-validation="strength" data-validation-strength="2"
                                           data-validation-has-keyup-event="true">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control" data-validation="strength"
                                           data-validation-strength="2" data-validation-has-keyup-event="true">
                                </div>
                            </div>
                            <div class="form-check row">
                                <div class="col-sm-12 text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">I agree to Terms & Conditions</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="button-btn-block">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                            </div>
                            <!-- /Button -->
                            <!-- Linsk -->
                            <div class="auth-footer-text">
                                <small>Alredy Sign Up,
                                    <a href="{{route('login')}}">Login</a> Here</small>
                            </div>
                            <!-- /Links -->
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 12:46:19 GMT -->
</html>
