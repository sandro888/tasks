@extends('layouts.app')

@section('title', 'category page')
@section('content')
    <div class="flex-center position-ref full-height" style="    font-family: sans-serif;">
        <div class="content">


            <div class="oh-main">
                <div class="container">

                    <div class="col-auto oh-main-nav d-none d-lg-flex">
                        <nav role="navigation" aria-labelledby="-menu">



                            <nav class="main-menu clearfix">
                                <p>category list</p>
                                <ul class="submenu submenu-level-0 list-unstyled">
                                    <?php $cat = DB::table('categories')->get(); ?>
                                    @foreach ($cat as $item)
                                        <li class="menu-item item-level-0 item--expanded menu-path-topic-football">

                                            <a class="link-level-0"
                                                href="{{ url('category', $item->id) }}"> {{ $item->name }}</a>


                                        </li>

                                    @endforeach


                                </ul>

                            </nav>


                        </nav>




                    </div>
                </div>
            </div>
        </div>
        </header>
        <header about="/topic/basketball" class="e-topic-topic-header topic-type-" style="
            background-color: #7e7e9e;
            color: #ffffff;
               ">

            <div class="container">
                <div class="row">
                    <div class="col tth-main">
                        <h1 class="tth-title">
                            <?php $category_n = DB::table('categories')
                            ->select('name')
                            ->where('id', $categoryId)
                            ->get(); ?>
                            @foreach ($category_n as $item)
                                {{ $item->name }}

                            @endforeach
                        </h1>

                    </div>

                </div>
            </div>
        </header>
        <div class="container">
            <div data-drupal-views-infinite-scroll-content-wrapper=""
                class="views-infinite-scroll-content-wrapper clearfix">
                <div class="views-row">
                    @foreach ($category_posts as $data)



                        <article class="e-article-teaser d-sm-flex" data-nid="29676"
>
                            <div class="article-thumbnail">
                                <a href="{{ route('adminshow', ['id' => $data->id]) }}">
                                    <img src="{{ asset("storage/$data->image") }}" width="303" height="195" alt="" alt="">


                                </a>

                                <div class="at-cover">
                                    <a href="/topic/rugby" class="e-topic-boxed-link">
                                        <?php $category_n = DB::table('categories')
                                        ->select('name')
                                        ->where('id', $categoryId)
                                        ->get(); ?>
                                        @foreach ($category_n as $item)
                                           category name - {{ $item->name }}

                                        @endforeach
                                    </a>

                                </div>
                            </div>

                            <div class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                <time class="om-date" datetime="2020-11-29T20:03:53+0400" title="29 ნოე 2020 / 20:03"
                                    style="visibility: visible;">{{ $data->created_at }}</time>
                                <a href="/article/29676-borjghalosnebma-magrad-ibrdzoles-pred-dasrulebuli-taimi-irlandiastan"
                                    class="article-link">
                                    <a href="{{ route('adminshow', ['id' => $data->id]) }}">prodcut name - {{ $data->title }}</a>

                                </a>
                                <p class="eat-desc">
                                    <a href="{{ route('adminshow', ['id' => $data->id]) }}" class="article-link mt-2" style="   
                            overflow: hidden;
                            display: -webkit-box;
                            -webkit-line-clamp: 1;
                            -webkit-box-orient: vertical;">
                                     product - description   {{ $data->description }}
                                    </a>
                                </p>


                            </div>
                        </article>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection
