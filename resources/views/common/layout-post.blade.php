<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('include.include-css')
</head>
<body class="post-page">
@include('common.header')
<div class="wrapper container" style="margin-top: 30px; margin-bottom: 30px; overflow: hidden">
    @yield('content')
</div>

@include('common.footer')
<script>



    let burgerIcon = document.getElementById('burgem-menu-icon');
    let closeBurgerIcon = document.getElementById('close-burgem-menu-icon');
    let mobileNavigation = document.getElementsByClassName('main-navigation')[0];

    burgerIcon.addEventListener('click', function () {
        showMobileMenu();
    })

    closeBurgerIcon.addEventListener('click', function () {
        closeBurgerIcon.style.display = 'none';
        mobileNavigation.style.display = 'none';
        burgerIcon.style.display = 'flex';
    })

    function showMobileMenu() {
        closeBurgerIcon.style.display = 'flex';
        mobileNavigation.style.display = 'flex';
        burgerIcon.style.display = 'none';
    }
</script>
</body>
</html>
