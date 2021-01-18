@extends('layouts.app')

@section('content')

    <nav class="main-menu clearfix">

        <div class="container">
            <p>categories</p>
            <ul class="submenu submenu-level-0 list-unstyled">
                <?php $cat = DB::table('categories')->get(); ?>
                @foreach ($cat as $item)
                    <li class="menu-item item-level-0 item--expanded menu-path-topic-football">

                        <a class="link-level-0" href="{{ url('category', $item->id) }}">{{ $item->name }}</a>


                    </li>

                @endforeach


            </ul>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Product View</div>

                        <div class="card-body">
                            <a href="/" class="btn btn-default">Back</a>

                            <h3 class="card-title">{{ $posts->title }}</h3>
                            <p class="card-text">{{ $posts->body }}</p>
                            <small> Written on {{ $posts->created_at }}</small>
                            <form action="/cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $posts->id }}">
                                <button class="btn btn-primary">Add to cart</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <div class="eb-block-title om-color-comments">
                <h2 class="ebt-title">
                    <span class="ebt-inner">
                        Comments
                    </span>
                </h2>
            </div>
            @foreach ($comments as $item)




                <div class="media container">
                    <div class="media-left">
                        <a href="#">
                            <img alt="64x64" class="media-object" data-src="assets/img/reader_img1.jpg"
                                src="assets/img/reader_img1.jpg" data-holder-rendered="true">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading"></h2>
                        <div class="card-texts">
                            {{ $item->comments }} - {{ Auth::user()->name }}
                        </div>
                        <small>{{ $item->created_at }}</small>



                    </div>

                </div>
            @endforeach
            <br />
            <br />
            <div class="entity_comments container">

                <p>{{ count($comments) }} - Comments</p>

                <!--Entity Title -->
                <form method="POST" action="{{ route('storecomment') }}" style="margin-bottom: 50px">
                    @csrf
                    <input type="hidden" name="id" value="{{ $posts->id }}">
                    <textarea name="comments" class="form-control" placeholder="დაამატე კომენტარი..."></textarea>
                    <button style="margin-top: 10px;
        
        font-family: sans-serif;" class="btn btn-submit red">Submit Comment</button>
                </form>

            </div>
        </div>
        </div>

    </nav>


@endsection
