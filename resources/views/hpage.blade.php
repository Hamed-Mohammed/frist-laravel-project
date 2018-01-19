<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <title>Document</title>
</head>
<body >

<video autoplay muted loop id="myVideo">
    <source src="{{asset('img/video1.mp4')}}" type="video/mp4">
</video>
<div class="content">
    <br><br><br>
    <div class="container contentw">
        <div class="row">
        <div class="title">
            Welcome
        </div></div>
    </div>


    <br><br>

    <div class="container">
        <div class="row">
            @foreach($category as $item)
            <div class="col-md-2  cont">
                <a href="/news/{{ $item->id }}">
                <img src="/imgecategory/{{ $item->image }}" alt="" class="img-responsive">
                    <div class="overlay">
                        <div class="text">{{ $item->name }}</div>
                    </div></a>

            </div>
            @endforeach



        </div>

    </div>

</div>





    <script src="{{asset('js/jqeury.js')}}"></script>
    <script src="{{asset('js/npm.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#myCarousel').carousel({
                interval: 4000
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function () {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function (e) {
                if (!clickEvent) {
                    var count = $('.nav').children().length - 1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>
</body>
</html>

