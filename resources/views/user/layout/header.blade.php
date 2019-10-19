<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Md. Syful Islam" />
    <meta name="description" content="C.P. Bangladesh" />
    <meta name="author" content="Md. Syful Islam, syful.cse.bd@gmail.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>C.P. Bangladesh</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front-end/coustom/logo/cpb.png') }}" />
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/plugins-css.css') }}" />
    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/typography.css') }}" />
    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/shortcodes/shortcodes.css') }}" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/style.css') }}" />
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/responsive.css') }}" />
    <!-- Tostar Alert CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/coustom/tostar/toastr.min.css') }}">
    <style>
        .header.fancy .mega-menu>section.menu-list-items {
            box-shadow: 10px 17px 15px -4px #111;
        }
    </style>
    {{-- Page CSS --}}
    @yield('page-css')
</head>
