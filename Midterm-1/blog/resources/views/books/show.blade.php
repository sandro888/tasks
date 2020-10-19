@extends('layouts.main')
@section('content')

 <div class="container">
    <div class="card" style="border: 1px solid black;padding:15px;margin-bottom:20px;font-size: 20px;text-align:center">
        <div class="card-text">
            author - {{$books->author_name}}

        </div>
        <div class="card-title">
           Title - {{$books->title}}
        </div>
        <div class="card-text">
            description -  {{$books->description}}

        </div>
        <div class="card-text">
            genre -  {{$books->Genre_name}}

        </div>
      

    </div>


</div> 
@endsection
@push('scripts')
    
@endpush
