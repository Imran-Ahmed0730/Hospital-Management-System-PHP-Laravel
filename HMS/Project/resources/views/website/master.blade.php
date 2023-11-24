<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('website.include.style')
    <title>Virtual Hospital</title>
    <link rel="icon" type="image/png" href="{{asset('assets/front-end-assets')}}/assets/img/favicon.png">
</head>
<body>

<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>

@include('website.include.header')

@yield('content')

@include('website.include.footer')

@include('website.include.script')
</body>

</html>
