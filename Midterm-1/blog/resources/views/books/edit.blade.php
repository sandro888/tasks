<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Midterm)</title>

    <!-- favicon -->
    <link href="{{asset('assets/img/favicon.png')}}" rel=icon>

    <!-- web-fonts -->
    <link href='{{asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500')}}' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{asset('assets/fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{asset('assets/css/mobile-menu.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    {{-- @yield('seo') --}}
 
</head>

<body >
    <div class="container">
        <form action="{{ route('adminupdate')}}" method="POST">
        @csrf
        <input class="form-control" type="hidden" name="id" value="{{$books->id}}">
            <label>Title:</label>
            <input required type="text" name="title" placeholder="title" class="form-control"  value="{{$books->title}}"/>
            <label>author_name :</label>

            <input required type="text" name="author_name" placeholder="title" class="form-control"  value="{{$books->author_name}}"/>
            <label>Stuff about you :</label>
            <textarea required name="description" id="" cols="10" rows="10"  class="form-control" placeholder="desc">{{ $books->description}}</textarea>
          
            <button class="btn brn-primary">submit</button>
        </form>
    </div>

</body>
</html>