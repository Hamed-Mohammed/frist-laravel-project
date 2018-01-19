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
    <nav class="navbar navbar-inverse" >
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sky</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    @foreach($categories as $item)
                        <li><a href="/news/{{ $item->id }}"> <img src="/imgecategory/{{ $item->image }}" alt="" class="img-responsive" width="30" height="20"></a></li>
                    @endforeach

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <h1 class="text-center">{{ $category->name }}</h1>
        <div class="row">
            @foreach($news as $item)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/uploaded_images/{{ $item->image }}" alt="..." class="img-responsive" style="height: 200px!important;" width="">
                    <p style="color: maroon">By {{ $item->user->name }}</p>
                    <div class="caption text-justify">
                        <h3>{{ $item->title}}</h3>
                        <p>{{str_limit( $item->post,150 ) }}</p>
                        <p><a href="/post/{{ $item->id }}" class="btn btn-primary" role="button">View</a></p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>

    <div class="text-center">
        {{ $news->links() }}
    </div>
</div>
    <br>

    <script src="{{asset('js/jqeury.js')}}"></script>
    <script src="{{asset('js/npm.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>