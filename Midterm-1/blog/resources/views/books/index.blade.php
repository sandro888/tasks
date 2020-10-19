<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techbooks - HTML and CSS Template</title>

    <!-- favicon -->
    <link href="{{asset('assets/img/favicon.png')}}" rel=icon>

    <!-- web-fonts -->
    <link href='{{asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500')}}' rel='stylesheet'
        type='text/css'>

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

<body id="page-top" data-spy="scroll" data-target=".navbar">

    <div class="container">

        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>title</th>
                <th>author</th>
                <th>description</th>
                <th>Genre</th>


            </tr>
            @foreach ($books as $data)

            <tr>
                <td>{{++$loop->index}}</td>
                <td>
                 
                    <a href="{{route('adminshow',["id"=>$data->id])}}">
                        {{-- <img class="img-responsive"
                            src="assets/img/tab_top1.jpg" alt="feature-top"> --}}
                            {{$data->title}}
                    </a>
                </td>
                <td>{{$data->author_name}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->Genre_name}}</td>
                <td style="display: flex;padding:5px">
                    <form action="{{ route('admindelete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <button class="btn btn-danger">delete</button>
                    </form>
                    <a href="{{route('adminedit',["id"=>$data->id])}}" class="btn btn-warning">edit</a>
                    {{-- <a href="{{route('adminshow',["id"=>$data->id])}}" class="btn btn-success">show</a> --}}
                </td>


            </tr>
            @endforeach

        </table>
    </div>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


    @stack('js')

</body>

</html>