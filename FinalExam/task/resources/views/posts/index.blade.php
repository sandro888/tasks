@extends('layouts.app')

@section('content')

<div class="container">
        <h1>Products</h1>
        <div class="row justify-content-center">
            <div class="col-md-6" style="margin-top: 20px">
                @foreach ($posts as $post)
                    <div class="card">
                        <div class="card-header"> <a href="/posts/{{ $post->id }}">Name - {{ $post->title }}</a></div>

                        <div class="card-body">


                            <p class="card-text">price {{ $post->price }}</p>
                            <p class="card-text">category {{ $post->category_id }}</p>
                            <p class="card-text">description - {{ $post->description }}</p>
                            <small>{{ $post->created_at }}</small>

                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection

