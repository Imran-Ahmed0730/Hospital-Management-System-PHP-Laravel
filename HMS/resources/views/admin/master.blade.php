<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Virutal Hospital Admin Panel</title>
   @include('admin.include.style')
</head>

<body>
<!-- Pre Loader -->
<div class="loading">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--/Pre Loader -->
<div class="wrapper">
    @include('admin.include.side-nav-bar')
    <!-- Page Content -->
    <div id="content">
        <!-- Top Navigation -->
        @include('admin.include.header')
        <!-- /Top Navigation -->
        <!-- Breadcrumb -->
        <!-- /Breadcrumb -->
        <!-- Main Content -->
        <div class="container-fluid home">

            @yield('content')

        </div>
        <!-- /Main Content -->
    </div>
    <!-- /Page Content -->
</div>
<!-- Back to Top -->
<a id="back-to-top" href="#" class="back-to-top">
    <span class="ti-angle-up"></span>
</a>
<!-- /Back to Top -->
@include('admin.include.script')
</body>

</html>
