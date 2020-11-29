@extends('layouts.app')

@section('title','category page')
@section('content')
<div class="flex-center position-ref full-height" style="    font-family: sans-serif;">
    <div class="content">
        <header class="om-head">
            <div class="oh-bar d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">


                        </div>
                        <div class="col-lg-6">
                            <div class="row justify-content-end align-items-center">
                                <div class="col">





                                    <aside class="om-gift-area">
                                        <div class="oga-content">
                                            <div class="oga-desc">
                                                <p>მიიღე 100 ლარამდე საჩუქარი პირველ დეპოზიტზე</p>

                                            </div>
                                            <a class="eb-btn eb-btn-primary"
                                                href="https://promotion.europebet.com/ka/promotion/default/ndcbonus?utm_source=popsport-gift&amp;utm_medium=cpm&amp;utm_term=gift-claim-no-catchy&amp;utm_campaign=EB-MX-new_welcome_bonus-CNV-INF-general"
                                                target="_blank">
                                                გაიგე მეტი
                                            </a>
                                        </div>

                                    </aside>

                                </div>
                                <div class="col-auto">


                                    <ul class="navbar-nav ml-auto d-flex"
                                        style="    display: -webkit-inline-box !important;">


                                        @guest
                                        <li class="nav-item" style="    margin-right: 20px;">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('შესვლა') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ __('რეგისტრაცია') }}</a>
                                        </li>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest
                                    </ul>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="oh-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 oh-mobile-nav d-lg-none">
                            <a class="oh-logo" href="/">

                            </a>
                            <div class="ohm-items">
                                <div class="ohm-item ohm-item-gift d-none-soft" data-ohm-toggle="ohm-item-gift-content">
                                </div>
                                <div class="ohm-item ohm-item-account" data-ohm-toggle="ohm-item-account-content">
                                    <svg role="image" class="icon-user-circled ohm-item-icon">
                                        <use
                                            xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-user-circled">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="ohm-item-contents">
                                <div class="ohm-item-content ohm-item-gift-content"></div>
                                <div class="ohm-item-content ohm-item-account-content"></div>
                                <div class="ohm-item-content ohm-item-favs-content"></div>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-flex mr-auto">
                            <a class="oh-logo" href="/">

                                <img class="of-logo" src="/logo-popsport-new.svg" alt="popsport">
                            </a>

                        </div>
                        <div class="col-auto oh-main-nav d-none d-lg-flex">
                            <nav role="navigation" aria-labelledby="-menu">

                                <h2 class="visually-hidden" id="-menu">Main navigation</h2>



                                <nav class="main-menu clearfix">

                                    <ul class="submenu submenu-level-0 list-unstyled">
                                        <?php $cat=DB::table('categories')->get();?>
                                        @foreach ($cat as $item)
                                        <li class="menu-item item-level-0 item--expanded menu-path-topic-football">

                                            <a class="link-level-0"
                                                href="{{url('category',$item->id)}}">{{$item->name}}</a>


                                        </li>

                                        @endforeach


                                    </ul>

                                </nav>


                            </nav>



                            <form class="head-search" method="get" action="https://popsport.com/search">
                                <div class="hs-inner">
                                    <input type="text" placeholder="საძიებო სიტყვები" class="hs-input" name="query"
                                        autocomplete="off">
                                    <span class="hs-button">
                                        <svg role="image" class="icon-search hs-icon">
                                            <use xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-search">
                                            </use>
                                        </svg>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header about="/topic/basketball" class="e-topic-topic-header topic-type-"
            style="
        background-color: #7e7e9e;
        color: #ffffff;
        background-image: url('https://static.popsport.com/sites/default/files/2017-11/other_20.jpg');        background-position: center center;        ">

            <div class="container">
                <div class="row">
                    <div class="col tth-main">
                        <h1 class="tth-title">
                            <?php $category_n=DB::table('categories')->select('name')->where('id',$categoryId)->get()?>
                            @foreach ($category_n as $item)
                            {{$item->name}}

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
                        data-url="https://popsport.com/article/29676-borjghalosnebma-magrad-ibrdzoles-pred-dasrulebuli-taimi-irlandiastan">
                        <div class="article-thumbnail">
                            <a href="{{route('adminshow',["id"=>$data->id])}}">
                                <img src="{{asset("storage/$data->image")}}" width="303" height="195" alt="" alt="">


                            </a>

                            <div class="at-cover">
                                <a href="/topic/rugby" class="e-topic-boxed-link">
                                    <?php $category_n=DB::table('categories')->select('name')->where('id',$categoryId)->get()?>
                                    @foreach ($category_n as $item)
                                    {{$item->name}}

                                    @endforeach
                                </a>
                           
                            </div>
                        </div>

                        <div class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                            <time class="om-date" datetime="2020-11-29T20:03:53+0400" title="29 ნოე 2020 / 20:03"
                                style="visibility: visible;">{{$data->created_at}}</time>
                            <a href="/article/29676-borjghalosnebma-magrad-ibrdzoles-pred-dasrulebuli-taimi-irlandiastan"
                                class="article-link">
                                <a href="{{route('adminshow',["id"=>$data->id])}}">{{$data->title}}</a>

                            </a>
                            <p class="eat-desc">
                                <a href="{{route('adminshow',["id"=>$data->id])}}" class="article-link mt-2" style="   
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 1;
                        -webkit-box-orient: vertical;">
                                    {{$data->description}}
                                </a>
                            </p>

                            <div class="eat-share shares-compact js-shares-compact"
                                data-url="https://popsport.com/article/29676-borjghalosnebma-magrad-ibrdzoles-pred-dasrulebuli-taimi-irlandiastan">

                            </div>
                        </div>
                    </article>

                    @endforeach
                </div>
            </div>
        </div>
    </div> <div class="om-footer-wrap">
        <footer class="om-footer">
            <div class="of-top clearfix">
                <div class="container">
                    <div class="of-social text-center text-lg-left float-lg-left">
                        <span class="age-limit">12</span>
                        {{-- <a href="https://www.facebook.com/popsportcom/" target="_blank" class="boxed-icon"><svg
                                role="image" class="icon-facebook-f bi-icon">
                                <use xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                </use>
                            </svg></a>
                        <a href="https://www.youtube.com/user/europebet" target="_blank" class="boxed-icon"><svg
                                role="image" class="icon-youtube-play bi-icon">
                                <use
                                    xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-youtube-play">
                                </use>
                            </svg></a> --}}
                    </div>
                    <nav class="of-menu float-right d-none d-lg-block">
                     
                        <a href="/">მთავარი</a>
                        {{-- <a href="/topic/football">ფეხბურთი</a>
                        <a href="/topic/basketball">კალათბურთი</a>
                        <a href="/topic/rugby">რაგბი</a>
                        <a href="/topic/tennis">ჩოგბურთი</a>
                        <a href="/topic/wrestling">ჭიდაობა</a>
                        <a href="/topic/other-sports">სხვა სახეობები</a> --}}
                    </nav>
                </div>
            </div>
            <div class="of-middle">
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-end">
                        
                    </div>
                </div>
            </div>
            <div class="of-bottom clearfix">
                <div class="container">
                    <div class="of-brand float-lg-left">
                        <div class="of-logo-wrap float-lg-left">
                            <a href="/" target="_blank">
                                <img class="of-logo"
                                    src="logo-popsport-new.svg" alt="popsport">
                                </a>
                        </div>
                        <div class="of-text-wrap float-lg-left">
                            <p>Copyright &copy; 2020 popsport &mdash; ყველა უფლება დაცულია</p>
                            <p>
                                {{-- <a href="/privacy">კონფიდენციალურობის პოლიტიკა</a> --}}
                            </p>
                        </div>
                    </div>
                    <div class="of-omedia float-lg-right">
                        <a href="/" title="საიტების და მობილური აპლიკაციების დამზადება">შშექმნილია სანდრექსას სახლში</a>
                    </div>
                </div>
            </div>
        </footer>
</div>

@endsection