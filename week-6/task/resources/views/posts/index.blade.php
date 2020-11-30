@extends('layouts.app')

@section('content')


<div class="flex-center position-ref full-height" style="    font-family: sans-serif;">
    <div class="category_article_wrapper">
        <div class="row">
           
        </div>
        <!-- row -->

    </div>
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
                                        src="logo-popsport-new.svg" alt="popsport">
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




                <div class="om-page-wrap">

                    <div class="container">

                        <div>



                        </div>
                        <div>



                        </div>
                        <div>









                            <div class="context-groups-home_featured row">
                                {{-- @foreach ($posts->slice(0, 1) as $data) --}}
                                @foreach ($posts as $data)
                                @if($loop->last)

                                <div class="context-groups-home_featured_left col-sm-5">
                                    <article class="e-article-teaser-vertical">
                                        <div class="article-thumbnail">
                                            <a
                                            href="{{route('adminshow',["id"=>$data->id])}}">
                                      
                                             
                                                    <img src="{{asset("storage/$data->image")}}"   width="445" height="505"  alt=""/>

                                            </a>
                                            <div class="at-cover">
                                            </div>
                                        </div>
                                        <div class="atv-title-wrap">
                                            <a style="    overflow: hidden;
                                            max-width: 300px;" href="{{route('adminshow',["id"=>$data->id])}}" class="e-topic-boxed-link"> {{DB::table('posts')->latest('created_at')->first()->title}}
                                            </a>

                                            <a href="{{route('adminshow',["id"=>$data->id])}}"
                                                class="article-link" style="    max-height: 77px;
                                                overflow: hidden;
                                                display: -webkit-box;
                                                -webkit-line-clamp: 2;
                                                -webkit-box-orient: vertical;">
                                                {{DB::table('posts')->latest('created_at')->first()->description}}
                                            </a>
                                        </div>
                                    </article>

                                    <div class="js-populate" data-with=".home-featured-banner.b-banner"></div>
                                </div> 


                                @endif
                                @endforeach
                          <div class="context-groups-home_featured_right col-sm-7">
                              
                                   
                                    @foreach ($posts->slice(0, 5) as $data)
                                    @if($loop->last)
                                        @else
                                 
                                    <div
                                     class="featured-article-block">
                                        <article class="e-article-teaser-lg">
                                            <div class="article-thumbnail">
                                                <a
                                                href="{{route('adminshow',["id"=>$data->id])}}">
                                                    <img src="{{asset("storage/$data->image")}}" width="303" height="195" alt="" alt="">

                                                
                                                </a>
                                                <div class="at-cover">
                                                 
                                                    <a class="e-topic-boxed-link" href="{{route('adminshow',["id"=>$data->id])}}" >{{$data->title}}</a>

                                                </div>
                                            </div>
                                            <a  href="{{route('adminshow',["id"=>$data->id])}}"
                                                class="article-link mt-2" style="   
                                                overflow: hidden;
                                                display: -webkit-box;
                                                -webkit-line-clamp: 1;
                                                -webkit-box-orient: vertical;">
                                                {{$data->description}}
                                            </a>
                                        </article>

                                    </div>
                                    @endif

                                    @endforeach

                                    {{-- <div class="featured-article-block">
                                        <article class="e-article-teaser-lg">
                                            <div class="article-thumbnail">
                                                <a
                                                    href="/article/28967-kvizi-romeli-kartveli-pekhburteli-ar-aris-potoze"><img
                                                        src="https://static.popsport.com/sites/default/files/styles/teaser_lg/public/2020-11/sh.%20arveladze%2C%20khizanishvili%2C%20kashia%20quizz%20popsport%20cover.png?itok=7GLl1Xa4"
                                                        width="303" height="195" alt="" typeof="foaf:Image" />
                                                </a>
                                                <div class="at-cover">
                                                    <a href="/popcorn" class="e-topic-boxed-link"> popcorn
                                                    </a>

                                                </div>
                                            </div>
                                            <a href="/article/28967-kvizi-romeli-kartveli-pekhburteli-ar-aris-potoze"
                                                class="article-link mt-2">
                                                ქვიზი: რომელი ქართველი ფეხბურთელი არ არის ფოტოზე?
                                            </a>
                                        </article>

                                    </div> --}}
                                </div>
                            </div>

                            <div class="js-populate" data-with=".home-top-leaderboard"></div>

                            <div class="js-populate" data-with=".home-top-articles"></div>

                            <div class="context-groups-home_feeds row mb-5">
                                <div class="context-groups-home_feeds_left col-md-8">


                                </div>
                                <div class="js-populate" data-with=".home-feeds-right" data-replace="true"></div>
                            </div>

                        </div>
                        <div class="home-featured-banner b-banner">


                        </div>
                        <div class="mt-3 mb-4 home-top-leaderboard b-banner">


                            <div data-code="&lt;IFRAME SRC=&quot;https://ad.doubleclick.net/ddm/adi/N244601.3233269POPSPORT.COMGE/B23658939.264487263;sz=1110x150;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot; WIDTH=1110 HEIGHT=150 MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no BORDERCOLOR=&#039;#000000&#039;&gt; &lt;SCRIPT language=&#039;JavaScript1.1&#039; SRC=&quot;https://ad.doubleclick.net/ddm/adj/N244601.3233269POPSPORT.COMGE/B23658939.264487263;abr=!ie;sz=1110x150;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot;&gt; &lt;/SCRIPT&gt; &lt;/IFRAME&gt;"
                                data-code-mobile="&lt;IFRAME SRC=&quot;https://ad.doubleclick.net/ddm/adi/N244601.3233269POPSPORT.COMGE/B23658939.264472237;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot; WIDTH=340 HEIGHT=200 MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no BORDERCOLOR=&#039;#000000&#039;&gt; &lt;SCRIPT language=&#039;JavaScript1.1&#039; SRC=&quot;https://ad.doubleclick.net/ddm/adj/N244601.3233269POPSPORT.COMGE/B23658939.264472237;abr=!ie;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot;&gt; &lt;/SCRIPT&gt; &lt;/IFRAME&gt;"
                                class="b-banner-code"></div>
                        </div>
                        <div class="home-top-articles">


                            <section class="list-top-articles mb-4 mb-lg-5 om-leak-xs">



                                <div class="ta-title mt-4">
                                    <div class="ta-title-inner">
                                        <h2 id="yles" class="ta-title-main">ტოპ-5</h2>
                                        <button class="daily-btn ta-switch active" type="button" style="    border: none;
                                        padding-bottom: 7px;                                        outline:none;

                                        cursor: pointer;">დღის</button>
                                        <button class="weekly-btn ta-switch" type="button" style="    border: none;
                                        padding-bottom: 7px;
                                        outline:none;
                                        cursor: pointer;">კვირის</button>
                                    </div>
                                </div>
                                <div class="om-tabs">
                                    <ul class="list-article-teaser-numbered list-unstyled">
                                    @foreach($posts as $data)

                                    @if($data->created_at >  Carbon\Carbon::today())
                                        <li class="daily-news e-article-teaser-numbered" data-nid="29286"
                                            data-url="https://popsport.com/article/29286-bichebo-sirtskhvilia-tavs-mikhedet-ra-tskhadadze-grigalavas-da-kverkvelias">
                                            <div class="article-thumbnail">
                                           
                                                <a
                                                href="{{route('adminshow',["id"=>$data->id])}}">
                                                    <img src="{{asset("storage/$data->image")}}" width="207" height="135" alt="Thumbnail"/>

                                                
                                                </a>
                                                <div class="at-cover">

                                                </div>
                                            </div>

                                            <span class="atn-info">
                                                <span class="atn-number"></span>
                                                <a href="{{route('adminshow',["id"=>$data->id])}}" 
                                                    class="article-link">
                                                    <span>&#039;{{$data->title}}</span>

                                                </a>
                                                <time class="om-date" datetime="2020-11-19T13:40:50+0400">19 ნოე
                                                    2020 / 13:40</time>
                                            </span>
                                        </li>
                                        
                                        @else
                                        <li style="display: none"  class="weekly-news e-article-teaser-numbered" data-nid="29286">
                                           
                                            <div class="article-thumbnail">
                                           
                                                <a
                                                href="{{route('adminshow',["id"=>$data->id])}}">
                                                    <img src="{{asset("storage/$data->image")}}" width="207" height="135" alt="Thumbnail"/>

                                                
                                                </a>
                                                <div class="at-cover">

                                                </div>
                                            </div>

                                            <span class="atn-info">
                                                <span class="atn-number"></span>
                                                <a href="{{route('adminshow',["id"=>$data->id])}}" 
                                                    class="article-link">
                                                    <span>&#039;{{$data->title}}</span>

                                                </a>
                                                <time class="om-date" datetime="2020-11-19T13:40:50+0400">19 ნოე
                                                    2020 / 13:40</time>
                                            </span>
                                   
                                        </li>

                                        
                                        
                                        @endif
                                        
                                        @endforeach
                                    </ul>
                             
                                </div>
                            </section>
                        </div>
                        <div
                            class="context-groups context-groups-home_feeds_right col-md-4 home-feeds-right d-none d-md-block">

                            <div class="mt-4 b-banner">


                                <div data-code="&lt;IFRAME SRC=&quot;https://ad.doubleclick.net/ddm/adi/N244601.3233269POPSPORT.COMGE/B23658939.264472246;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot; WIDTH=340 HEIGHT=200 MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no BORDERCOLOR=&#039;#000000&#039;&gt; &lt;SCRIPT language=&#039;JavaScript1.1&#039; SRC=&quot;https://ad.doubleclick.net/ddm/adj/N244601.3233269POPSPORT.COMGE/B23658939.264472246;abr=!ie;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot;&gt; &lt;/SCRIPT&gt; &lt;/IFRAME&gt;"
                                    data-code-mobile="&lt;IFRAME SRC=&quot;https://ad.doubleclick.net/ddm/adi/N244601.3233269POPSPORT.COMGE/B23658939.264472246;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot; WIDTH=340 HEIGHT=200 MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no BORDERCOLOR=&#039;#000000&#039;&gt; &lt;SCRIPT language=&#039;JavaScript1.1&#039; SRC=&quot;https://ad.doubleclick.net/ddm/adj/N244601.3233269POPSPORT.COMGE/B23658939.264472246;abr=!ie;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot;&gt; &lt;/SCRIPT&gt; &lt;/IFRAME&gt;"
                                    class="b-banner-code"></div>
                            </div>
                            <div class="mt-4 mb-4">


                                <div class="views-element-container">
                                    <div
                                        class="article-sidebar-we-suggest js-view-dom-id-4dc82f03b49aa1f4082e86cd5785d815914a26aa03d96342cff4bbb491a58d7c">




                                        <header>
                                            <div class="eb-block-title om-color-feed">
                                                <h2 class="ebt-title"><span class="ebt-inner">ახლა კითხულობენ</span>
                                                </h2>
                                            </div>
                                        </header>


                                        @foreach ($posts->slice(0, 6) as $data)
                                        <div class="views-row">
                                            <article class="e-article-teaser-sm d-flex" data-nid="29625"
                                                data-url="https://popsport.com/article/29625-preview-sakartvelos-udzlieresi-trio-hqavs-pinets-liderebi-aklia">
                                                <div class="article-thumbnail">
                                                  
                                                    <a
                                                    href="{{route('adminshow',["id"=>$data->id])}}">
                                                        <img src="{{asset("storage/$data->image")}}"  width="95" height="78" alt="Thumbnail"/>
                    
                                                    
                                                    </a>
                                                    <div class="at-cover">
                    
                                                    </div>
                                                </div>
                    
                                                <div class="ats-info d-flex flex-column justify-content-center">
                                                    <time class="om-date" datetime="2020-11-27T23:50:00+0400" title="27 ნოე 2020 / 23:50"
                                                        style="visibility: visible;">{{$data->created_at}}</time>
                                                   
                                                    <a  href="{{route('adminshow',["id"=>$data->id])}}"
                                                        class="article-link" style="   
                                                        overflow: hidden;
                                                        display: -webkit-box;
                                                        -webkit-line-clamp: 1;
                                                        -webkit-box-orient: vertical;">
                                                        {{$data->description}}
                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                        @endforeach 
                    

                                        {{-- @include('posts.relatedNews') --}}










                                    </div>
                                </div>

                            </div>
                            <div class="js-home-feed-sidebar-banner om-leak-xs mt-5 b-banner">


                                <div data-code-mobile="&lt;IFRAME SRC=&quot;https://ad.doubleclick.net/ddm/adi/N244601.3233269POPSPORT.COMGE/B23658939.264472246;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot; WIDTH=340 HEIGHT=200 MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no BORDERCOLOR=&#039;#000000&#039;&gt; &lt;SCRIPT language=&#039;JavaScript1.1&#039; SRC=&quot;https://ad.doubleclick.net/ddm/adj/N244601.3233269POPSPORT.COMGE/B23658939.264472246;abr=!ie;sz=340x200;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot;&gt; &lt;/SCRIPT&gt; &lt;/IFRAME&gt;"
                                    class="b-banner-code"></div>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

            <div class="om-footer-wrap">
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

        </div>

   


    </div>
</div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/toggle.js"></script>
@endsection