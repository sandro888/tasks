@extends('layouts.main')
<title>list of products</title>

@section('content')
    <div class="container">
        <table class="table">
            <tr>
               
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">text</th>
                <th scope="col">short description</th>
                <th scope="col">Creted at</th>
               
    
            </tr>
            @foreach ($posts as $data)
    
            <tr>
                <th scope="row">{{++$loop->index}}</th>
                <td>{{$data->title}}</td>
                <td>{{$data->text}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->created_at}}</td>
            </tr>
            @endforeach
    
        </table>

     </div>
@endsection