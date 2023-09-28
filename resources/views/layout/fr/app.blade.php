<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('layout.adsense')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/styles/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://kit.fontawesome.com/1bcc6c761a.js"></script>
    <link rel="stylesheet" href="{{asset('assets/styles/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/cookies.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/modal.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/jquery-ui.min.css')}}">
        <title>{{$title}}</title>
        <meta name="description" content="{{$description}}" />
</head>
<body>
<!-- header -->
    @yield('content')
    <div class="down-bg"></div>
    <footer class="text-center">

            <p>cm-tips.online - unofficial site about Coin Master game.</p>
            <p>COIN MASTER® is a trademark of Moon Active LTD.</p>

    </footer>
        <div class="cookies" id="cookies" style="">
        <div class="row cookies-inner">
            <div class="col-lg-2 ">
                <div class="img"><img src="assets/images/cookie-man.png" alt="cookie" style=""></div>
            </div>
            <div class="col-lg-8 content">Nous utilisons des cookies pour faciliter l'utilisation de notre site Web et à des fins statistiques. Si vous ne bloquez pas ces fichiers, vous acceptez leur utilisation et leur enregistrement dans la mémoire de l'appareil. N'oubliez pas que vous pouvez gérer vous-même les cookies en modifiant les paramètres de votre navigateur.</div>
            <div class="col-lg-2 col-12 text-center"><button onclick="dismissCookie('cookies')" class="btn">Accepter</button></div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('assets/scripts/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/datepicker-pl.js')}}"></script>


    <!-- <script type="text/javascript" src="{{asset('https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker.min.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('assets/scripts/menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/cookies.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/modal.js')}}"></script>

</body>