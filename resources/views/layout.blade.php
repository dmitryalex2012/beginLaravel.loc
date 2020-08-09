<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" >
{{--    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>--}}
    <link href="{{ asset('css/slick/slick.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/slick/slick-theme.css') }}" rel="stylesheet" >
    <title></title>
</head>
<body>

{{--<div class="content">--}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    {{--    <a class="navbar-brand" href="<?php echo action('IndexController@index'); ?>">Navbar</a>--}}
        <a class="navbar-brand" href="<?php echo action('IndexController@index'); ?>"><img src='{{ asset('images/1.jpg') }}' alt="100%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="hiderButtons">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo action('AboutController@index'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo action('ContactController@index'); ?>">Contact us</a>
                    </li>
                    {{--            <li class="nav-item dropdown">--}}
                    {{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                    Dropdown--}}
                    {{--                </a>--}}
                    {{--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--                    <a class="dropdown-item" href="#">Action</a>--}}
                    {{--                    <a class="dropdown-item" href="#">Another action</a>--}}
                    {{--                    <div class="dropdown-divider"></div>--}}
                    {{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--                </div>--}}
                    {{--            </li>--}}
                    {{--            <li class="nav-item">--}}
                    {{--                <a class="nav-link disabled" href="#">Disabled</a>--}}
                    {{--            </li>--}}
                </ul>
                {{--        <form class="form-inline my-2 my-lg-0">--}}
                {{--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--        </form>--}}
            </div>
        </div>
    </nav>



{{--    <div id="mainPart" >--}}

        @yield('content')

{{--    </div>--}}


{{--</div>--}}



<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="containerLogo col-sm-7 col-12">
                <p class="siteDesigner">&copy; Сечин Дмитрий 2020</p>
            </div>
            <div class="containerRef col-sm-5 col-12">
                <a href="https://www.facebook.com/manufacture.design/" target="_blank">   <img src='{{ asset('images/facebook1.png') }}' alt=""/></a>
                <a href="https://www.instagram.com/textile_decor_kiev/?hl=uk" target="_blank"><img src='{{ asset('images/inst1.png') }}' alt=""/></a>
            </div>
        </div>
    </div>
</footer>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

<script src="{{ asset('css/slick/slick.min.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function(){

        let indexClass = '.indexImages';

        $(indexClass).slick({
            arrows: false,
            dots: true
        });
    });

</script>

</body>
</html>
