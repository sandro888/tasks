@extends('layouts.app')

@section('content')


<div class="flex-center position-ref full-height" style="    font-family: sans-serif;">
    <div class="content">
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WDZC3T" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        <div class="om-body-wrap">
            <div class="om-main-wrap">
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


                                            <ul class="navbar-nav ml-auto d-flex" style="    display: -webkit-inline-box !important;">
 

                                                @guest
                                                <li class="nav-item" style="    margin-right: 20px;">
                                                    <a class="nav-link" 
                                                        href="{{ route('login') }}">{{ __('შესვლა') }}</a>
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

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
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
                                        <div class="ohm-item ohm-item-gift d-none-soft"
                                            data-ohm-toggle="ohm-item-gift-content">
                                        </div>
                                        <div class="ohm-item ohm-item-account"
                                            data-ohm-toggle="ohm-item-account-content">
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
                                      
                                        <img class="of-logo"
                                        src="/logo-popsport-new.svg" alt="popsport">
                                    </a>
                                   
                                </div>
                                <div class="col-auto oh-main-nav d-none d-lg-flex">
                                    <nav role="navigation" aria-labelledby="-menu">

                                        <h2 class="visually-hidden" id="-menu">Main navigation</h2>



                                        <nav class="main-menu clearfix">
                                            
                                            <ul class="submenu submenu-level-0 list-unstyled">
                                                <?php $cat=DB::table('categories')->get();?>
                                                @foreach ($cat as $item)
                                                <li
                                                class="menu-item item-level-0 item--expanded menu-path-topic-football">
                                            
                                                    <a  class="link-level-0" href="{{url('category',$item->id)}}">{{$item->name}}</a>


                                            </li>
                
                                                @endforeach
                                             

                                            </ul>

                                        </nav>


                                    </nav>



                                    <form class="head-search" method="get" action="https://popsport.com/search">
                                        <div class="hs-inner">
                                            <input type="text" placeholder="საძიებო სიტყვები" class="hs-input"
                                                name="query" autocomplete="off">
                                            <span class="hs-button">
                                                <svg role="image" class="icon-search hs-icon">
                                                    <use
                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-search">
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

                <div class="container">

                    <div class="row">
                        <div class="col-xs-12 col-md-8 order-1 layout-main-column">

                            <header class="eaf-header with-photo om-leak-xs  title-block-normal"
                                data-article-header-enabled="">

                                <figure class="eaf-thumbnail">

                                    <img src="{{asset("storage/$posts->image")}}" width="730" height="430" alt="" />


                                </figure>

                                <div class="eaf-header-content">
                                    {{-- <div class="topics-ddown-list collapsed topic-boxed-link--more-padding">
                    <a href="/topic/basketball" class="e-topic-boxed-link"> კალათბურთი
                    </a><svg role="image" class="icon-chevron-down tddl-arrow">
                        <use xlink:href="/themes/custom/omedia/images/icons.svg?qkic41#icon-chevron-down"></use>
                    </svg>
             

                </div> --}}
                                    <time class="eaf-date om-date" datetime="2020-11-27T23:50:00+0400"
                                        title="27 ნოე 2020 / 23:50"
                                        style="visibility: visible;">{{$posts->created_at}}</time>
                                    <h1 class="eaf-title"><span>PREVIEW | {{$posts->title}}</span>
                                    </h1>

                                    <div class="om-text-content eaf-body">


                                        <p class="highlighted">
                                            {{$posts->description}}</p>

                                    </div>
                                </div>
                            </header>
                            <div class="eb-block-title om-color-comments">
                                <h2 class="ebt-title">
                                    <span class="ebt-inner">
                                        კომენტარები
                                    </span>
                                </h2>
                            </div>
                            @foreach ($comments as $item)




                            <div class="media container">
                                <div class="media-left">
                                    {{-- <a href="#">
                    <img alt="64x64" class="media-object" data-src="assets/img/reader_img1.jpg"
                         src="assets/img/reader_img1.jpg" data-holder-rendered="true">
                </a> --}}
                                </div>
                                <div class="media-body">
                                    <h2 class="media-heading"></h2>
                                    <div class="card-texts">
                                        {{$item->comments}} - {{ Auth::user()->name }}
                                    </div>
                                    <small>{{$item->created_at}}</small>



                                </div>

                            </div>
                            @endforeach
                            <br />
                            <br />
                            <div class="entity_comments container">

                                <p>{{count($comments)}} - კომენტარი</p>

                                <!--Entity Title -->
                                <form method="POST" action="{{route('storecomment')}}" style="margin-bottom: 50px">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$posts->id}}">
                                    <textarea name="comments" class="form-control"
                                        placeholder="დაამატე კომენტარი..."></textarea>
                                    <button style="margin-top: 10px;
                
                        font-family: sans-serif;" class="btn btn-submit red">Submit Comment</button>
                                </form>

                            </div>
                        </div>


                        <div class="col-xs-12 col-md-4 order-2 layout-sidebar-primary">


                            <div class="views-element-container" style="padding-top: 50px">
                                <div
                                    class="article-sidebar-we-suggest js-view-dom-id-1910ad7526b1c1aaf57cede6100017f79e928d26d49df7529ff29101cf505156">




                               












                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



@endsection