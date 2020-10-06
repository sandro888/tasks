@extends('layouts.main')
<title>craete product</title>
@section('content')
    <div class="container">
    <form action="{{route('storeposts')}}" method="POST">
            @csrf
            {{-- <input class="form-control" name="title"/>
            <textarea class="form-control" name="text"></textarea>
            <button class="btn">Submit</button> --}}
            <div class="container">
            <form>
                @csrf
                    </div>
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title" name="title" required> 
                                <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">short_descriptionn</label>
                          <input  class="form-control" id="exampleInputPassword1" placeholder="short_description"  name="description" required> 
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Text</label>
                          <textarea class="form-control" placeholder="text"  name="text" required></textarea>
                        </div>
                     
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
@endsection
@push('scripts')

@endpush