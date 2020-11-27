@extends('layouts.app')

@section('content')


<div class="flex-center position-ref full-height">
    <div class="category_article_wrapper">
        <div class="row">
            @foreach ($posts as $data)
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="{{route('adminshow',["id"=>$data->id])}}" ><img class="img-responsive" src="assets/img/tab_top1.jpg"
                                                                   alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag pink"><a href="#" target="_self">Tablet</a></span>

                    <div class="category_article_title">
                        <h2> <a href="{{route('adminshow',["id"=>$data->id])}}" >{{$data->title}}</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">{{$data->created_at}}</a></div>
                    <!----article_date------>
                    <!-- article_date -->

                    <div class="category_article_content">
                        {{$data->description}}
                    </div>
                    <!-- category_article_content -->

               
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

      
            <!-- col-md-6 -->

            @endforeach
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
                                    <div>


                                        <nav class="head-top-topics">
                                            <span class="htt-label">პოპულარული:</span>
                                            <a href="/topic/kartuli-sporti" class="e-topic-boxed-link"> ქართული
                                                სპორტი
                                            </a><a href="/topic/football" class="e-topic-boxed-link"> ფეხბურთი
                                            </a><a href="/topic/georgian-football" class="e-topic-boxed-link">
                                                ქართული ფეხბურთი
                                            </a><a href="/topic/erta-liga" class="e-topic-boxed-link"> ერთა ლიგა
                                            </a>
                                        </nav>

                                    </div>


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
                                                <!-- Authentication Links -->
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
                                      
                                        <span>POPSPORT</span>
                                    </a>
                                </div>
                                <div class="col-auto oh-main-nav d-none d-lg-flex">
                                    <nav role="navigation" aria-labelledby="-menu">

                                        <h2 class="visually-hidden" id="-menu">Main navigation</h2>



                                        <nav class="main-menu clearfix">
                                            <ul class="submenu submenu-level-0 list-unstyled">
                                                <li class="item-video menu-item item-level-0 menu-path-video">
                                                    <a href="/video" data-prepend-icon="play-circled-filled"
                                                        class="link-level-0"
                                                        data-drupal-link-system-path="video">VIDEO</a>
                                                </li>
                                                <li
                                                    class="menu-item item-level-0 item--expanded menu-path-topic-football">
                                                    <a href="/topic/football" class="link-level-0"
                                                        data-drupal-link-system-path="taxonomy/term/12">ფეხბურთი</a>
                                                    <ul class="submenu submenu-level-1 list-unstyled">
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-georgian-football">
                                                            <a href="/topic/georgian-football" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/13">ქართული
                                                                ფეხბურთი</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-erovnuli-liga">
                                                                    <a href="/topic/erovnuli-liga" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/14">ეროვნული
                                                                        ლიგა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-cup-georgia">
                                                                    <a href="/topic/cup-georgia"
                                                                        class="link-level-2">საქართველოს თასი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-national-teams">
                                                                    <a href="/topic/national-teams" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/17">ეროვნული
                                                                        ნაკრები</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-football-asakobrivi-nakrebebi">
                                                                    <a href="/topic/football-asakobrivi-nakrebebi"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/298">ასაკობრივი
                                                                        ნაკრებები</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-legioners">
                                                                    <a href="/topic/legioners" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/18">ლეგიონერები</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-futsal">
                                                                    <a href="/topic/futsal" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/19">ფუტსალი</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-world-football">
                                                            <a href="/topic/world-football" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/20">მსოფლიო
                                                                ფეხბურთი</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-champions-league">
                                                                    <a href="/topic/champions-league"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/21">ჩემპიონთა
                                                                        ლიგა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-europa-league">
                                                                    <a href="/topic/europa-league" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/22">ევროპალიგა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-england">
                                                                    <a href="/topic/england" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/23">ინგლისი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-spain">
                                                                    <a href="/topic/spain" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/24">ესპანეთი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-germany">
                                                                    <a href="/topic/germany" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/25">გერმანია</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-italy">
                                                                    <a href="/topic/italy" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/26">იტალია</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-france">
                                                                    <a href="/topic/france" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/27">საფრანგეთი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-netherlands">
                                                                    <a href="/topic/netherlands" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/28">ჰოლანდია</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-erta-liga">
                                                                    <a href="/topic/erta-liga" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/123">ერთა
                                                                        ლიგა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-world-cup">
                                                                    <a href="/topic/world-cup" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/29">მსოფლიოს
                                                                        ჩემპიონატი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-european-championship">
                                                                    <a href="/topic/european-championship"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/30">ევროპის
                                                                        ჩემპიონატი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-coppa-america">
                                                                    <a href="/topic/coppa-america" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/31">კოპა
                                                                        ამერიკა</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>

                                                </li>
                                                <li
                                                    class="menu-item item-level-0 item--expanded menu-path-topic-basketball">
                                                    <a href="/topic/basketball" class="link-level-0"
                                                        data-drupal-link-system-path="taxonomy/term/32">კალათბურთი</a>
                                                    <ul class="submenu submenu-level-1 list-unstyled">
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-georgian-basketball">
                                                            <a href="/topic/georgian-basketball" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/33">ქართული
                                                                კალათბურთი</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-superleague">
                                                                    <a href="/topic/superleague" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/35">სუპერლიგა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-georgian-cup">
                                                                    <a href="/topic/georgian-cup" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/36">საქართველოს
                                                                        თასი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-national-team">
                                                                    <a href="/topic/national-team" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/37">ეროვნული
                                                                        ნაკრები</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-asakobrivi-nakrebebi">
                                                                    <a href="/topic/asakobrivi-nakrebebi"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/38">ასაკობრივი
                                                                        ნაკრებები</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-legioners-0">
                                                                    <a href="/topic/legioners-0" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/39">ლეგიონერები</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-world-basketball">
                                                            <a href="/topic/world-basketball" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/34">მსოფლიო
                                                                კალათბურთი</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li class="menu-item item-level-2 menu-path-topic-nba">
                                                                    <a href="/topic/nba" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/40">NBA</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-euroleague">
                                                                    <a href="/topic/euroleague" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/41">ევროლიგა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-eurobasket">
                                                                    <a href="/topic/eurobasket" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/42">ევრობასკეტი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-basketball-world-championship">
                                                                    <a href="/topic/basketball-world-championship"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/43">მსოფლიოს
                                                                        ჩემპიონატი</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>

                                                </li>
                                                <li class="menu-item item-level-0 item--expanded menu-path-topic-rugby">
                                                    <a href="/topic/rugby" class="link-level-0"
                                                        data-drupal-link-system-path="taxonomy/term/44">რაგბი</a>
                                                    <ul class="submenu submenu-level-1 list-unstyled">
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-georgian-rugby">
                                                            <a href="/topic/georgian-rugby" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/45">ქართული
                                                                რაგბი</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-rugby-georgian-championship">
                                                                    <a href="/topic/rugby-georgian-championship"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/47">დიდი
                                                                        ათი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-rugby-georgian-cup">
                                                                    <a href="/topic/rugby-georgian-cup"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/48">საქართველოს
                                                                        თასი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-rugby-national-team">
                                                                    <a href="/topic/rugby-national-team"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/49">ეროვნული
                                                                        ნაკრები</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-rugby-asakobrivi-nakrebi">
                                                                    <a href="/topic/rugby-asakobrivi-nakrebi"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/50">ასაკობრივი
                                                                        ნაკრებები</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-rugby-legioners">
                                                                    <a href="/topic/rugby-legioners"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/51">ლეგიონერები</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-world-rugby">
                                                            <a href="/topic/world-rugby" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/46">მსოფლიო
                                                                რაგბი</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-nations-cup">
                                                                    <a href="/topic/nations-cup" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/52">ერთა
                                                                        თასი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-6-nations">
                                                                    <a href="/topic/6-nations" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/53">6
                                                                        ერი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-4-nations">
                                                                    <a href="/topic/4-nations" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/54">4
                                                                        ერი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-rugby-sevens">
                                                                    <a href="/topic/rugby-sevens" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/56">7-კაცა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-super-14">
                                                                    <a href="/topic/super-14" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/55">სუპერ
                                                                        რაგბი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-rugby-tests">
                                                                    <a href="/topic/rugby-tests" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/57">ტესტები</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>

                                                </li>
                                                <li
                                                    class="menu-item item-level-0 item--expanded menu-path-topic-other-sports">
                                                    <a href="/topic/other-sports" class="link-level-0"
                                                        data-drupal-link-system-path="taxonomy/term/72">მეტი</a>
                                                    <ul class="submenu submenu-level-1 list-unstyled">
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-tennis">
                                                            <a href="/topic/tennis" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/58">ჩოგბურთი</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-georgian-tennis">
                                                                    <a href="/topic/georgian-tennis"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/59">ქართული
                                                                        ჩოგბურთი</a>
                                                                </li>
                                                                <li class="menu-item item-level-2 menu-path-topic-atp">
                                                                    <a href="/topic/atp" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/60">ATP</a>
                                                                </li>
                                                                <li class="menu-item item-level-2 menu-path-topic-wta">
                                                                    <a href="/topic/wta" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/61">WTA</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-masters">
                                                                    <a href="/topic/masters" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/62">მასტერსი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-big-slam">
                                                                    <a href="/topic/big-slam" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/63">დიდი
                                                                        სლემი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-davis-cup">
                                                                    <a href="/topic/davis-cup" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/64">დევისის
                                                                        თასი</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-wrestling">
                                                            <a href="/topic/wrestling" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/65">ჭიდაობა</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-classic-wrestling">
                                                                    <a href="/topic/classic-wrestling"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/67">კლასიკური
                                                                        ჭიდაობა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-freestyle-wrestling">
                                                                    <a href="/topic/freestyle-wrestling"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/68">თავისუფალი
                                                                        ჭიდაობა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-georgian-wrestling">
                                                                    <a href="/topic/georgian-wrestling"
                                                                        class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/69">ქართული
                                                                        ჭიდაობა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-sambo">
                                                                    <a href="/topic/sambo" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/70">სამბო</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-summo">
                                                                    <a href="/topic/summo" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/71">სუმო</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                        <li
                                                            class="menu-item item-level-1 item--expanded menu-path-topic-other-sports">
                                                            <a href="/topic/other-sports" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/72">სხვა
                                                                სახეობები</a>
                                                            <ul class="submenu submenu-level-2 list-unstyled">
                                                                <li class="menu-item item-level-2 menu-path-topic-judo">
                                                                    <a href="/topic/judo" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/66">ძიუდო</a>
                                                                </li>
                                                                <li class="menu-item item-level-2 menu-path-topic-mma">
                                                                    <a href="/topic/mma" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/1261">MMA</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-formula-1">
                                                                    <a href="/topic/formula-1" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/73">ფორმულა
                                                                        1</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-chess">
                                                                    <a href="/topic/chess" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/75">ჭადრაკი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-hockey">
                                                                    <a href="/topic/hockey" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/76">ჰოკეი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-boxing">
                                                                    <a href="/topic/boxing" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/77">კრივი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-cycling">
                                                                    <a href="/topic/cycling" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/78">ველოსპორტი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-dzalosnoba">
                                                                    <a href="/topic/dzalosnoba" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/351">ძალოსნობა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-handball">
                                                                    <a href="/topic/handball" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/79">ხელბურთი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-volleyball">
                                                                    <a href="/topic/volleyball" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/80">ფრენბურთი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-water-polo">
                                                                    <a href="/topic/water-polo" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/81">წყალბურთი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-figure-skating">
                                                                    <a href="/topic/figure-skating" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/82">ფიგურული
                                                                        სრიალი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-athletics">
                                                                    <a href="/topic/athletics" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/83">მძლეოსნობა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-shooting">
                                                                    <a href="/topic/shooting" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/84">ტყვიის
                                                                        სროლა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-karate">
                                                                    <a href="/topic/karate" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/85">კარატე</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-fencing">
                                                                    <a href="/topic/fencing" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/86">ფარიკაობა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-extreme-sports">
                                                                    <a href="/topic/extreme-sports" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/87">ექსტრემალური
                                                                        სპორტი</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-archery">
                                                                    <a href="/topic/archery" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/88">მშვილდოსნობა</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item item-level-2 menu-path-topic-winter-sports">
                                                                    <a href="/topic/winter-sports" class="link-level-2"
                                                                        data-drupal-link-system-path="taxonomy/term/89">ზამთრის
                                                                        სახეობები</a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>

                                                </li>
                                                <li
                                                    class="menu-item item-level-0 item--collapsed menu-path-topic-gaming">
                                                    <a href="/topic/gaming" class="link-level-0"
                                                        data-drupal-link-system-path="taxonomy/term/2988">Gaming</a>
                                                </li>
                                                <li class="menu-item item-level-0 item--expanded menu-path-popcorn">
                                                    <a href="/popcorn" class="link-level-0"
                                                        data-drupal-link-system-path="taxonomy/term/2336">POPCORN</a>
                                                    <ul class="submenu submenu-level-1 list-unstyled">
                                                        <li
                                                            class="menu-item item-level-1 menu-path-popcorn-pop-analysis">
                                                            <a href="/popcorn/pop-analysis" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/2340">ანალიტიკა</a>
                                                        </li>
                                                        <li
                                                            class="menu-item item-level-1 menu-path-popcorn-pop-history">
                                                            <a href="/popcorn/pop-history" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/2341">ისტორია</a>
                                                        </li>
                                                        <li
                                                            class="menu-item item-level-1 menu-path-popcorn-pop-interview">
                                                            <a href="/popcorn/pop-interview" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/2342">ინტერვიუ</a>
                                                        </li>
                                                        <li class="menu-item item-level-1 menu-path-popcorn-pop-fun">
                                                            <a href="/popcorn/pop-fun" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/3057">ქვიზი</a>
                                                        </li>
                                                        <li class="menu-item item-level-1 menu-path-popcorn-pop-blog">
                                                            <a href="/popcorn/pop-blog" class="link-level-1"
                                                                data-drupal-link-system-path="taxonomy/term/3058">ბლოგი</a>
                                                        </li>
                                                    </ul>

                                                </li>
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
                                <div class="context-groups-home_featured_left col-sm-5">
                                    <article class="e-article-teaser-vertical">
                                        <div class="article-thumbnail">
                                            <a
                                                href="/article/29276-uperuli-da-ugolo-dasasruli-sakartvelom-estonetsats-ver-mougo"><img
                                                    data-src-vertical-taller="https://popsport.com/sites/default/files/styles/teaser_vertical_taller/public/thumb-overrides/Head%202%20Watermark.JPG?itok=0oXBXb7A"
                                                    src="https://popsport.com/sites/default/files/styles/teaser_vertical/public/thumb-overrides/Head%202%20Watermark.JPG?itok=aps1OgLP"
                                                    width="445" height="420" alt="" typeof="foaf:Image" />
                                            </a>
                                            <div class="at-cover">
                                            </div>
                                        </div>
                                        <div class="atv-title-wrap">
                                            <a href="/topic/football" class="e-topic-boxed-link"> ფეხბურთი
                                            </a>

                                            <a href="/article/29276-uperuli-da-ugolo-dasasruli-sakartvelom-estonetsats-ver-mougo"
                                                class="article-link">
                                                უფერული დასასრული - საქართველომ ესტონეთსაც ვერ მოუგო
                                            </a>
                                        </div>
                                    </article>

                                    <div class="js-populate" data-with=".home-featured-banner.b-banner"></div>
                                </div>
                                <div class="context-groups-home_featured_right col-sm-7">
                                    <div class="featured-article-block">
                                        <article class="e-article-teaser-lg">
                                            <div class="article-thumbnail">
                                                <a
                                                    href="/article/29304-dakarguli-shansis-celicadi-kvaratskhelia-maints-sauketeso-iqo"><img
                                                        src="https://popsport.com/sites/default/files/styles/teaser_lg/public/2020-11/KVARA.JPG?itok=mYhuEncC"
                                                        width="303" height="195" alt="" typeof="foaf:Image" />
                                                </a>
                                                <div class="at-cover">
                                                    <a href="/topic/football" class="e-topic-boxed-link"> ფეხბურთი
                                                    </a>

                                                </div>
                                            </div>
                                            <a href="/article/29304-dakarguli-shansis-celicadi-kvaratskhelia-maints-sauketeso-iqo"
                                                class="article-link mt-2">
                                                დაკარგული შანსის წელიწადი - კვარაცხელია მაინც საუკეთესო იყო
                                            </a>
                                        </article>

                                    </div>
                                    <div class="featured-article-block">
                                        <article class="e-article-teaser-lg">
                                            <div class="article-thumbnail">
                                                <a
                                                    href="/article/29302-istoria-daicera-lanchkhuti-chempionta-ligis-plei-opshia"><img
                                                        src="https://static.popsport.com/sites/default/files/styles/teaser_lg/public/2020-11/lanch_0.jpg?itok=EXSGsQPz"
                                                        width="303" height="195" alt="" typeof="foaf:Image" />
                                                </a>
                                                <div class="at-cover">
                                                    <a href="/topic/football" class="e-topic-boxed-link"> ფეხბურთი
                                                    </a>

                                                    <span class="at-video"><svg role="image"
                                                            class="icon-play-circled at-video-icon">
                                                            <use
                                                                xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-play-circled">
                                                            </use>
                                                        </svg></span>
                                                </div>
                                            </div>
                                            <a href="/article/29302-istoria-daicera-lanchkhuti-chempionta-ligis-plei-opshia"
                                                class="article-link mt-2">
                                                ისტორია დაიწერა! ლანჩხუთი ჩემპიონთა ლიგის პლეი ოფშია
                                            </a>
                                        </article>

                                    </div>
                                    <div class="featured-article-block">
                                        <article class="e-article-teaser-lg">
                                            <div class="article-thumbnail">
                                                <a
                                                    href="/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi"><img
                                                        src="https://static.popsport.com/sites/default/files/styles/teaser_lg/public/2020-11/GEO%20EST%202_0.png?itok=DKI3RKch"
                                                        width="303" height="195" alt="" typeof="foaf:Image" />
                                                </a>
                                                <div class="at-cover">
                                                    <a href="/topic/football" class="e-topic-boxed-link"> ფეხბურთი
                                                    </a>

                                                </div>
                                            </div>
                                            <a href="/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi"
                                                class="article-link mt-2">
                                                მუნდიალი 2022 | რომელ კალათაში მოხვდა საქართველოს ნაკრები
                                            </a>
                                        </article>

                                    </div>
                                    <div class="featured-article-block">
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

                                    </div>
                                </div>
                            </div>

                            <div class="js-populate" data-with=".home-top-leaderboard"></div>

                            <div class="js-populate" data-with=".home-top-articles"></div>

                            <div class="context-groups-home_feeds row mb-5">
                                <div class="context-groups-home_feeds_left col-md-8">

                                    <section class="home-main-feed" data-count="10">
                                        <header class="eb-block-title om-color-feed with-links">
                                            <h2 class="ebt-title"><span class="ebt-inner">ბოლო ამბები</span></h2>
                                            <span class="ebt-links">
                                                <span class="ebt-link active" data-tid="0">ყველა</span>
                                                <span class="ebt-link" data-tid="12">ფეხბურთი</span>
                                                <span class="ebt-link" data-tid="32">კალათბურთი</span>
                                                <span class="ebt-link" data-tid="44">რაგბი</span>
                                            </span>
                                        </header>
                                        <div class="hmf-feed">
                                            <article class="e-article-teaser d-sm-flex" data-nid="29308"
                                                data-url="https://popsport.com/article/29308-out-klei-tompsoni-momaval-sezonsats-gamotovebs">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29308-out-klei-tompsoni-momaval-sezonsats-gamotovebs"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/KLEY.jpg?itok=2oP0smv-"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/basketball" class="e-topic-boxed-link">
                                                            კალათბურთი
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T23:05:34+0400">19 ნოე
                                                        2020 / 23:05</time>
                                                    <a href="/article/29308-out-klei-tompsoni-momaval-sezonsats-gamotovebs"
                                                        class="article-link">
                                                        <span>OUT! - კლეი ტომპსონი მომავალ სეზონსაც
                                                            გამოტოვებს</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        გოლდენ სტეიტის ვარსკვლავის უიღბლობა გრძელდება...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29308-out-klei-tompsoni-momaval-sezonsats-gamotovebs">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29307"
                                                data-url="https://popsport.com/article/29307-arasodes-dagivicqebt-nakrebis-pekhburtelebi-vaiss-daemshvidobnen">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29307-arasodes-dagivicqebt-nakrebis-pekhburtelebi-vaiss-daemshvidobnen"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/125764843_743429026259739_3065249441927526884_n%20Cropped.jpg?itok=yrDsHU_O"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/football" class="e-topic-boxed-link">
                                                            ფეხბურთი
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T22:15:55+0400">19 ნოე
                                                        2020 / 22:15</time>
                                                    <a href="/article/29307-arasodes-dagivicqebt-nakrebis-pekhburtelebi-vaiss-daemshvidobnen"
                                                        class="article-link">
                                                        <span>&#039;არასოდეს დაგივიწყებთ&#039; - ნაკრების
                                                            ფეხბურთელები ვაისს დაემშვიდობნენ</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        საქართველოს ნაკრების ფეხბურთელების პოსტები ვლადიმირ ვაისის
                                                        შესახებ...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29307-arasodes-dagivicqebt-nakrebis-pekhburtelebi-vaiss-daemshvidobnen">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29306"
                                                data-url="https://popsport.com/article/29306-margvelashvilma-vierustan-caago-umedlo-dghe-praghashi">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29306-margvelashvilma-vierustan-caago-umedlo-dghe-praghashi"><img
                                                            src="https://popsport.com/sites/default/files/styles/teaser/public/2018-02/finals_783.JPG?itok=PCK3AdDr"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/other-sports" class="e-topic-boxed-link">
                                                            სხვა სახეობები
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T21:36:05+0400">19 ნოე
                                                        2020 / 21:36</time>
                                                    <a href="/article/29306-margvelashvilma-vierustan-caago-umedlo-dghe-praghashi"
                                                        class="article-link">
                                                        <span>მარგველაშვილმა ვიერუსთან წააგო - უმედლო დღე
                                                            პრაღაში</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        ვაჟა მარგველაშვილმა გადამწყვეტი ბრძოლა წააგო. საქართველოს
                                                        ღირსებას მეორე საჭიდაო დღეს სამი ძიუდოისტი დაიცავს...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29306-margvelashvilma-vierustan-caago-umedlo-dghe-praghashi">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29305"
                                                data-url="https://popsport.com/article/29305-khuti-tsvlileba-dziritadshi-borjghalosnebis-shemadgenloba-uelstan">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29305-khuti-tsvlileba-dziritadshi-borjghalosnebis-shemadgenloba-uelstan"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/125824027_3485421784888229_8480210567681499195_o.jpg?itok=7xcMyCxB"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/rugby" class="e-topic-boxed-link"> რაგბი
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T21:14:16+0400">19 ნოე
                                                        2020 / 21:14</time>
                                                    <a href="/article/29305-khuti-tsvlileba-dziritadshi-borjghalosnebis-shemadgenloba-uelstan"
                                                        class="article-link">
                                                        <span>ხუთი ცვლილება ძირითადში - ბორჯღალოსნების შემადგენლობა
                                                            უელსთან</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        ლევან მაისაშვილმა უელსთან თამაშისთვის 23-კაციანი
                                                        შემადგენლობა დაასახელა...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29305-khuti-tsvlileba-dziritadshi-borjghalosnebis-shemadgenloba-uelstan">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29298"
                                                data-url="https://popsport.com/article/29298-akhalbedebistvis-kargi-shansia-uelsis-shemadgenloba-sakartvelostan">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29298-akhalbedebistvis-kargi-shansia-uelsis-shemadgenloba-sakartvelostan"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/rugby1111111111.jpg?itok=TBCRTN2J"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/rugby" class="e-topic-boxed-link"> რაგბი
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T19:53:02+0400">19 ნოე
                                                        2020 / 19:53</time>
                                                    <a href="/article/29298-akhalbedebistvis-kargi-shansia-uelsis-shemadgenloba-sakartvelostan"
                                                        class="article-link">
                                                        <span>&#039;ახალბედებისთვის კარგი შანსია&#039; - უელსის
                                                            შემადგენლობა საქართველოსთან</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        &#039;დრაკონებმა&#039; &#039;ბორჯღალოსნებთან&#039; მატჩის
                                                        წინ ერთბაშად 13 მორაგბე შეცვალეს...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29298-akhalbedebistvis-kargi-shansia-uelsis-shemadgenloba-sakartvelostan">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29301"
                                                data-url="https://popsport.com/article/29301-skhvanairi-samqaro-iqo-buponma-tavisi-debiuti-da-90-iani-clebi-gagvakhsena">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29301-skhvanairi-samqaro-iqo-buponma-tavisi-debiuti-da-90-iani-clebi-gagvakhsena"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/ბუფონი%20popsport%20cover.png?itok=yRJKb_pw"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/football" class="e-topic-boxed-link">
                                                            ფეხბურთი
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T19:30:53+0400">19 ნოე
                                                        2020 / 19:30</time>
                                                    <a href="/article/29301-skhvanairi-samqaro-iqo-buponma-tavisi-debiuti-da-90-iani-clebi-gagvakhsena"
                                                        class="article-link">
                                                        <span>&#039;სხვანაირი სამყარო იყო&#039; - ბუფონმა თავისი
                                                            დებიუტი და 90-იანი წლები გაგვახსენა</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        ჯანლუიჯი ბუფონის უსასრულო ისტორია 25 წლის წინ დაიწყო...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29301-skhvanairi-samqaro-iqo-buponma-tavisi-debiuti-da-90-iani-clebi-gagvakhsena">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29294"
                                                data-url="https://popsport.com/article/29294-margvelashvili-brinjaostvis-ibrdzolebs-skhvebma-gamosvla-daasrules">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29294-margvelashvili-brinjaostvis-ibrdzolebs-skhvebma-gamosvla-daasrules"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/Gabi-Juan-European-Judo-Championships-183609.jpg?itok=q4aZA5Fb"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/other-sports" class="e-topic-boxed-link">
                                                            სხვა სახეობები
                                                        </a>
                                                        <span class="at-video"><svg role="image"
                                                                class="icon-play-circled at-video-icon">
                                                                <use
                                                                    xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-play-circled">
                                                                </use>
                                                            </svg></span>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T17:27:49+0400">19 ნოე
                                                        2020 / 17:27</time>
                                                    <a href="/article/29294-margvelashvili-brinjaostvis-ibrdzolebs-skhvebma-gamosvla-daasrules"
                                                        class="article-link">
                                                        <span>მარგველაშვილი ბრინჯაოსთვის იბრძოლებს - სხვებმა
                                                            გამოსვლა დაასრულეს</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        საღამოს ბლოკში ქართველი ძიუდოისტის მეტოქე მოლდოველი დენის
                                                        ვიერუ იქნება...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29294-margvelashvili-brinjaostvis-ibrdzolebs-skhvebma-gamosvla-daasrules">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29295"
                                                data-url="https://popsport.com/article/29295-opitsialurad-gvardiolam-sitistan-kontrakti-gaakhangrdzliva">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29295-opitsialurad-gvardiolam-sitistan-kontrakti-gaakhangrdzliva"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/Em2_EEwXYAUReye%20Cropped.jpg?itok=GgwVW_sl"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/football" class="e-topic-boxed-link">
                                                            ფეხბურთი
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T16:51:36+0400">19 ნოე
                                                        2020 / 16:51</time>
                                                    <a href="/article/29295-opitsialurad-gvardiolam-sitistan-kontrakti-gaakhangrdzliva"
                                                        class="article-link">
                                                        <span>ოფიციალურად: გვარდიოლამ სიტისთან კონტრაქტი
                                                            გაახანგრძლივა</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        პეპ გვარდიოლას მუშაობით მანჩესტერ სიტიში კმაყოფილები
                                                        არიან...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29295-opitsialurad-gvardiolam-sitistan-kontrakti-gaakhangrdzliva">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29293"
                                                data-url="https://popsport.com/article/29293-makpadenis-21-kula-chempionta-ligashi-pulenmats-shedegianad-itamasha">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29293-makpadenis-21-kula-chempionta-ligashi-pulenmats-shedegianad-itamasha"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/image.jpg?itok=fJH7gZGO"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/basketball" class="e-topic-boxed-link">
                                                            კალათბურთი
                                                        </a>
                                                        <span class="at-video"><svg role="image"
                                                                class="icon-play-circled at-video-icon">
                                                                <use
                                                                    xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-play-circled">
                                                                </use>
                                                            </svg></span>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T16:34:10+0400">19 ნოე
                                                        2020 / 16:34</time>
                                                    <a href="/article/29293-makpadenis-21-kula-chempionta-ligashi-pulenmats-shedegianad-itamasha"
                                                        class="article-link">
                                                        <span>მაკფადენის 21 ქულა ჩემპიონთა ლიგაში - პულენმაც
                                                            შედეგიანად ითამაშა</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        თადის წარმატებულმა გარჯამ ესპანურ სან პაბლო ბურგოსს იტალიურ
                                                        ბრინდისისთან მოაგებინა...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29293-makpadenis-21-kula-chempionta-ligashi-pulenmats-shedegianad-itamasha">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="e-article-teaser d-sm-flex" data-nid="29292"
                                                data-url="https://popsport.com/article/29292-otsnebis-asruleba-ar-gamovida-navalovskim-gulshematkivars-bodishi-moukhada">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29292-otsnebis-asruleba-ar-gamovida-navalovskim-gulshematkivars-bodishi-moukhada"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser/public/2020-11/cover%20%282%29_0.jpg?itok=6cNSIoVh"
                                                            width="365" height="210" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">
                                                        <a href="/topic/football" class="e-topic-boxed-link">
                                                            ფეხბურთი
                                                        </a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="eat-info d-sm-flex flex-sm-column justify-content-sm-center">
                                                    <time class="om-date" datetime="2020-11-19T16:04:09+0400">19 ნოე
                                                        2020 / 16:04</time>
                                                    <a href="/article/29292-otsnebis-asruleba-ar-gamovida-navalovskim-gulshematkivars-bodishi-moukhada"
                                                        class="article-link">
                                                        <span>&#039;ოცნების ასრულება არ გამოვიდა&#039; - ნავალოვსკიმ
                                                            გულშემატკივარს ბოდიში მოუხადა</span>

                                                    </a>
                                                    <p class="eat-desc">
                                                        საქართველოს ნაკრების მცველის, გიორგი ნავალოვსკის პოსტი
                                                        სოციალურ ქსელში...

                                                    </p>

                                                    <div class="eat-share shares-compact js-shares-compact"
                                                        data-url="https://popsport.com/article/29292-otsnebis-asruleba-ar-gamovida-navalovskim-gulshematkivars-bodishi-moukhada">
                                                        <a href="#">
                                                            <span class="boxed-icon"><svg role="image"
                                                                    class="icon-facebook-f bi-icon">
                                                                    <use
                                                                        xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                                                    </use>
                                                                </svg></span>
                                                            გაზიარება
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>

                                        </div>
                                        <div class="hmf-feed-bottom"></div>
                                    </section>

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
                                        <h2 class="ta-title-main">ტოპ-5</h2>
                                        <a class="ta-switch active" data-om="tab" href="#top-day">დღის</a>
                                        <a class="ta-switch" data-om="tab" href="#top-week">კვირის</a>
                                    </div>
                                </div>
                                <div class="om-tabs">
                                    <div class="om-tab active" id="top-day">
                                        <ul class="list-article-teaser-numbered list-unstyled">
                                            <li class="e-article-teaser-numbered" data-nid="29286"
                                                data-url="https://popsport.com/article/29286-bichebo-sirtskhvilia-tavs-mikhedet-ra-tskhadadze-grigalavas-da-kverkvelias">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29286-bichebo-sirtskhvilia-tavs-mikhedet-ra-tskhadadze-grigalavas-da-kverkvelias"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/grigalava%20cxadadze%20popsport%20cover.png?itok=tbXp-PMZ"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29286-bichebo-sirtskhvilia-tavs-mikhedet-ra-tskhadadze-grigalavas-da-kverkvelias"
                                                        class="article-link">
                                                        <span>&#039;ბიჭებო, სირცხვილია! თავს მიხედეთ, რა&#039; -
                                                            ცხადაძე გრიგალავას და კვერკველიას</span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-19T13:40:50+0400">19 ნოე
                                                        2020 / 13:40</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29183"
                                                data-url="https://popsport.com/article/29183-isini-biblias-cvaven-mkhars-ver-davucher-ratom-ar-daichoka-vunipolam">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29183-isini-biblias-cvaven-mkhars-ver-davucher-ratom-ar-daichoka-vunipolam"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/RUGBY.jpg?itok=zERKqjRH"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29183-isini-biblias-cvaven-mkhars-ver-davucher-ratom-ar-daichoka-vunipolam"
                                                        class="article-link">
                                                        <span>&#039;ისინი ბიბლიას წვავენ, მხარს ვერ დავუჭერ&#039; -
                                                            რატომ არ დაიჩოქა ვუნიპოლამ  </span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-16T03:00:19+0400">16 ნოე
                                                        2020 / 03:00</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29279"
                                                data-url="https://popsport.com/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/GEO%20EST%202_0.png?itok=sgz24LaG"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi"
                                                        class="article-link">
                                                        <span>მუნდიალი 2022 | რომელ კალათაში მოხვდა საქართველოს
                                                            ნაკრები </span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-19T02:47:57+0400">19 ნოე
                                                        2020 / 02:47</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29240"
                                                data-url="https://popsport.com/article/29240-vladimir-vaisi-khut-kandidatshi-slovakma-shesadzloa-isev-nakrebi-gacvrtnas">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29240-vladimir-vaisi-khut-kandidatshi-slovakma-shesadzloa-isev-nakrebi-gacvrtnas"><img
                                                            src="https://popsport.com/sites/default/files/styles/teaser_numbered/public/2020-09/vladimir%20weiss%202020%208912898912.JPG?itok=a_4RvqsK"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29240-vladimir-vaisi-khut-kandidatshi-slovakma-shesadzloa-isev-nakrebi-gacvrtnas"
                                                        class="article-link">
                                                        <span>ვლადიმირ ვაისი ხუთ კანდიდატში - სლოვაკმა შესაძლოა ისევ
                                                            ნაკრები გაწვრთნას</span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-17T18:30:05+0400">17 ნოე
                                                        2020 / 18:30</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29212"
                                                data-url="https://popsport.com/article/29212-ori-martskhi-romelmats-kartuli-pekhburti-daazarala-ras-nishnavs-es">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29212-ori-martskhi-romelmats-kartuli-pekhburti-daazarala-ras-nishnavs-es"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/COVER.jpg?itok=b5izEsLY"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29212-ori-martskhi-romelmats-kartuli-pekhburti-daazarala-ras-nishnavs-es"
                                                        class="article-link">
                                                        <span>ორი მარცხი, რომელმაც ქართული ფეხბურთი დააზარალა - რას
                                                            ნიშნავს ეს</span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-16T18:45:55+0400">16 ნოე
                                                        2020 / 18:45</time>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="om-tab" id="top-week">
                                        <ul class="list-article-teaser-numbered list-unstyled">
                                            <li class="e-article-teaser-numbered" data-nid="29183"
                                                data-url="https://popsport.com/article/29183-isini-biblias-cvaven-mkhars-ver-davucher-ratom-ar-daichoka-vunipolam">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29183-isini-biblias-cvaven-mkhars-ver-davucher-ratom-ar-daichoka-vunipolam"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/RUGBY.jpg?itok=zERKqjRH"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29183-isini-biblias-cvaven-mkhars-ver-davucher-ratom-ar-daichoka-vunipolam"
                                                        class="article-link">
                                                        <span>&#039;ისინი ბიბლიას წვავენ, მხარს ვერ დავუჭერ&#039; -
                                                            რატომ არ დაიჩოქა ვუნიპოლამ  </span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-16T03:00:19+0400">16 ნოე
                                                        2020 / 03:00</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29170"
                                                data-url="https://popsport.com/article/29170-vaisi-tu-progresi-gsurt-ramdenime-motamashe-gundshi-ar-unda-darches">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29170-vaisi-tu-progresi-gsurt-ramdenime-motamashe-gundshi-ar-unda-darches"><img
                                                            src="https://popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/DSC_4802.JPG?itok=HvN9yOre"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29170-vaisi-tu-progresi-gsurt-ramdenime-motamashe-gundshi-ar-unda-darches"
                                                        class="article-link">
                                                        <span>ვაისი: თუ პროგრესი გსურთ, რამდენიმე მოთამაშე გუნდში არ
                                                            უნდა დარჩეს</span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-15T23:48:32+0400">15 ნოე
                                                        2020 / 23:48</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29227"
                                                data-url="https://popsport.com/article/29227-didi-karieris-dasasruli-gagamaru-sumodan-cavida">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29227-didi-karieris-dasasruli-gagamaru-sumodan-cavida"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/20201117_132144.jpg?itok=G1ScsMTz"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29227-didi-karieris-dasasruli-gagamaru-sumodan-cavida"
                                                        class="article-link">
                                                        <span>დიდი კარიერის დასასრული - გაგამარუ სუმოდან
                                                            წავიდა</span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-17T13:10:02+0400">17 ნოე
                                                        2020 / 13:10</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29152"
                                                data-url="https://popsport.com/article/29152-shoki-golpis-moedanze-sportsmenebma-6-metriani-aligatori-shenishnes">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29152-shoki-golpis-moedanze-sportsmenebma-6-metriani-aligatori-shenishnes"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/ALIGATOR.jpg?itok=5jWsskAx"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                        <span class="at-video"><svg role="image"
                                                                class="icon-play-circled at-video-icon">
                                                                <use
                                                                    xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-play-circled">
                                                                </use>
                                                            </svg></span>
                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29152-shoki-golpis-moedanze-sportsmenebma-6-metriani-aligatori-shenishnes"
                                                        class="article-link">
                                                        <span>შოკი გოლფის მოედანზე - სპორტსმენებმა 6-მეტრიანი
                                                            ალიგატორი შენიშნეს</span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-14T18:42:08+0400">14 ნოე
                                                        2020 / 18:42</time>
                                                </span>
                                            </li>
                                            <li class="e-article-teaser-numbered" data-nid="29212"
                                                data-url="https://popsport.com/article/29212-ori-martskhi-romelmats-kartuli-pekhburti-daazarala-ras-nishnavs-es">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29212-ori-martskhi-romelmats-kartuli-pekhburti-daazarala-ras-nishnavs-es"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_numbered/public/2020-11/COVER.jpg?itok=b5izEsLY"
                                                            width="207" height="135" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <span class="atn-info">
                                                    <span class="atn-number"></span>
                                                    <a href="/article/29212-ori-martskhi-romelmats-kartuli-pekhburti-daazarala-ras-nishnavs-es"
                                                        class="article-link">
                                                        <span>ორი მარცხი, რომელმაც ქართული ფეხბურთი დააზარალა - რას
                                                            ნიშნავს ეს</span>

                                                    </a>
                                                    <time class="om-date" datetime="2020-11-16T18:45:55+0400">16 ნოე
                                                        2020 / 18:45</time>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
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




                                        <div class="views-row">
                                            <article class="e-article-teaser-sm d-flex" data-nid="29279"
                                                data-url="https://popsport.com/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_sm/public/2020-11/GEO%20EST%202_0.png?itok=oeUxgmk3"
                                                            width="95" height="78" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <div class="ats-info d-flex flex-column justify-content-center">
                                                    <time class="om-date" datetime="2020-11-19T02:47:57+0400">19 ნოე
                                                        2020 / 02:47</time>
                                                    <a href="/article/29279-mundiali-2022-romel-kalatashi-mokhvda-sakartvelos-nakrebi"
                                                        class="article-link">
                                                        <span>მუნდიალი 2022 | რომელ კალათაში მოხვდა საქართველოს
                                                            ნაკრები </span>

                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="views-row">
                                            <article class="e-article-teaser-sm d-flex" data-nid="29305"
                                                data-url="https://popsport.com/article/29305-khuti-tsvlileba-dziritadshi-borjghalosnebis-shemadgenloba-uelstan">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29305-khuti-tsvlileba-dziritadshi-borjghalosnebis-shemadgenloba-uelstan"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_sm/public/2020-11/125824027_3485421784888229_8480210567681499195_o.jpg?itok=Z2y1md4K"
                                                            width="95" height="78" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <div class="ats-info d-flex flex-column justify-content-center">
                                                    <time class="om-date" datetime="2020-11-19T21:14:16+0400">19 ნოე
                                                        2020 / 21:14</time>
                                                    <a href="/article/29305-khuti-tsvlileba-dziritadshi-borjghalosnebis-shemadgenloba-uelstan"
                                                        class="article-link">
                                                        <span>ხუთი ცვლილება ძირითადში - ბორჯღალოსნების შემადგენლობა
                                                            უელსთან</span>

                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="views-row">
                                            <article class="e-article-teaser-sm d-flex" data-nid="29142"
                                                data-url="https://popsport.com/article/29142-shota-arveladze-sakartvelos-nakrebis-gacvrtnas-premieroba-mirchevnia">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29142-shota-arveladze-sakartvelos-nakrebis-gacvrtnas-premieroba-mirchevnia"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_sm/public/2020-05/1590069323-%E1%83%90%E1%83%A0%E1%83%95%E1%83%94%E1%83%9A%E1%83%90%E1%83%AB%E1%83%94.jpg?itok=uN081cDP"
                                                            width="95" height="78" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <div class="ats-info d-flex flex-column justify-content-center">
                                                    <time class="om-date" datetime="2020-11-14T11:08:34+0400">14 ნოე
                                                        2020 / 11:08</time>
                                                    <a href="/article/29142-shota-arveladze-sakartvelos-nakrebis-gacvrtnas-premieroba-mirchevnia"
                                                        class="article-link">
                                                        <span>შოთა არველაძე: საქართველოს ნაკრების გაწვრთნას
                                                            პრემიერობა მირჩევნია</span>

                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="views-row">
                                            <article class="e-article-teaser-sm d-flex" data-nid="29308"
                                                data-url="https://popsport.com/article/29308-out-klei-tompsoni-momaval-sezonsats-gamotovebs">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29308-out-klei-tompsoni-momaval-sezonsats-gamotovebs"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_sm/public/2020-11/KLEY.jpg?itok=lR0LZGhG"
                                                            width="95" height="78" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <div class="ats-info d-flex flex-column justify-content-center">
                                                    <time class="om-date" datetime="2020-11-19T23:05:34+0400">19 ნოე
                                                        2020 / 23:05</time>
                                                    <a href="/article/29308-out-klei-tompsoni-momaval-sezonsats-gamotovebs"
                                                        class="article-link">
                                                        <span>OUT! - კლეი ტომპსონი მომავალ სეზონსაც
                                                            გამოტოვებს</span>

                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="views-row">
                                            <article class="e-article-teaser-sm d-flex" data-nid="29288"
                                                data-url="https://popsport.com/article/29288-margvelashvilma-rusi-iponze-dastsa-carmatebuli-starti-evropis-chempionatze">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29288-margvelashvilma-rusi-iponze-dastsa-carmatebuli-starti-evropis-chempionatze"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_sm/public/2020-11/judo.jpg?itok=Eghp7JVr"
                                                            width="95" height="78" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                        <span class="at-video"><svg role="image"
                                                                class="icon-play-circled at-video-icon">
                                                                <use
                                                                    xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-play-circled">
                                                                </use>
                                                            </svg></span>
                                                    </div>
                                                </div>

                                                <div class="ats-info d-flex flex-column justify-content-center">
                                                    <time class="om-date" datetime="2020-11-19T14:15:00+0400">19 ნოე
                                                        2020 / 14:15</time>
                                                    <a href="/article/29288-margvelashvilma-rusi-iponze-dastsa-carmatebuli-starti-evropis-chempionatze"
                                                        class="article-link">
                                                        <span>მარგველაშვილმა რუსი იპონზე დასცა - წარმატებული სტარტი
                                                            ევროპის ჩემპიონატზე</span>

                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="views-row">
                                            <article class="e-article-teaser-sm d-flex" data-nid="29286"
                                                data-url="https://popsport.com/article/29286-bichebo-sirtskhvilia-tavs-mikhedet-ra-tskhadadze-grigalavas-da-kverkvelias">
                                                <div class="article-thumbnail">
                                                    <a
                                                        href="/article/29286-bichebo-sirtskhvilia-tavs-mikhedet-ra-tskhadadze-grigalavas-da-kverkvelias"><img
                                                            src="https://static.popsport.com/sites/default/files/styles/teaser_sm/public/2020-11/grigalava%20cxadadze%20popsport%20cover.png?itok=jShvh7bi"
                                                            width="95" height="78" alt="Thumbnail"
                                                            typeof="foaf:Image" />
                                                    </a>

                                                    <div class="at-cover">

                                                    </div>
                                                </div>

                                                <div class="ats-info d-flex flex-column justify-content-center">
                                                    <time class="om-date" datetime="2020-11-19T13:40:50+0400">19 ნოე
                                                        2020 / 13:40</time>
                                                    <a href="/article/29286-bichebo-sirtskhvilia-tavs-mikhedet-ra-tskhadadze-grigalavas-da-kverkvelias"
                                                        class="article-link">
                                                        <span>&#039;ბიჭებო, სირცხვილია! თავს მიხედეთ, რა&#039; -
                                                            ცხადაძე გრიგალავას და კვერკველიას</span>

                                                    </a>
                                                </div>
                                            </article>
                                        </div>









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
                                <a href="https://www.facebook.com/popsportcom/" target="_blank" class="boxed-icon"><svg
                                        role="image" class="icon-facebook-f bi-icon">
                                        <use xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-facebook-f">
                                        </use>
                                    </svg></a>
                                <!-- <a href="#" class="boxed-icon"><svg role="image" class="icon-twitter bi-icon"><use xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-twitter"></use></svg></a> -->
                                <a href="https://www.youtube.com/user/europebet" target="_blank" class="boxed-icon"><svg
                                        role="image" class="icon-youtube-play bi-icon">
                                        <use
                                            xlink:href="/themes/custom/omedia/images/icons.svg?qk24s1#icon-youtube-play">
                                        </use>
                                    </svg></a>
                            </div>
                            <nav class="of-menu float-right d-none d-lg-block">
                                <a href="/">მთავარი</a>
                                <a href="/topic/football">ფეხბურთი</a>
                                <a href="/topic/basketball">კალათბურთი</a>
                                <a href="/topic/rugby">რაგბი</a>
                                <a href="/topic/tennis">ჩოგბურთი</a>
                                <a href="/topic/wrestling">ჭიდაობა</a>
                                <a href="/topic/other-sports">სხვა სახეობები</a>
                            </nav>
                        </div>
                    </div>
                    <div class="of-middle">
                        <div class="container">
                            <div class="row justify-content-center justify-content-lg-end">
                                <div class="col-auto of-topge">
                                    <!-- TOP.GE ASYNC COUNTER CODE -->
                                    <div id="top-ge-counter-container" data-site-id="110680"></div>
                                    <script async src="//counter.top.ge/counter.js"></script>
                                    <!-- / END OF TOP.GE COUNTER CODE -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="of-bottom clearfix">
                        <div class="container">
                            <div class="of-brand float-lg-left">
                                <div class="of-logo-wrap float-lg-left">
                                    <a href="/" target="_blank"><img class="of-logo"
                                            src="/themes/custom/omedia/images/logo-popsport-new.svg" alt="popsport"></a>
                                </div>
                                <div class="of-text-wrap float-lg-left">
                                    <p>Copyright &copy; 2020 popsport &mdash; ყველა უფლება დაცულია</p>
                                    <p>
                                        <a href="/privacy">კონფიდენციალურობის პოლიტიკა</a>
                                    </p>
                                </div>
                            </div>
                            <div class="of-omedia float-lg-right">
                                <a href="http://omedia.ge" title="საიტების და მობილური აპლიკაციების დამზადება">შექმნილია
                                    ომედიაში</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>




        <script type="application/json" data-drupal-selector="drupal-settings-json">
            {
                          "path": {
                              "baseUrl": "\/",
                              "scriptPath": null,
                              "pathPrefix": "",
                              "currentPath": "node\/13",
                              "currentPathIsAdmin": false,
                              "isFront": true,
                              "currentLanguage": "ka"
                          },
                          "pluralDelimiter": "\u0003",
                          "ajaxPageState": {
                              "libraries": "ajax_loader\/ajax_loader.throbber,core\/drupal.debounce,core\/html5shiv,core\/jquery.cookie,om_pop\/gift-box,omedia\/bootstrap,omedia\/breakpoints-js,omedia\/global-styling,omedia\/hoverintent,omedia\/jssocials,omedia\/magicsuggest,omedia\/om-geokbd,omedia\/popperjs,omedia\/readmore,omedia\/slick,omedia\/slicknav,omedia\/sticky-kit,omedia\/svg4everybody,statistics\/drupal.statistics,system\/base,views\/views.module",
                              "theme": "omedia",
                              "theme_token": null
                          },
                          "ajaxTrustedUrl": [],
                          "ajaxLoader": {
                              "markup": "\u003Cdiv class=\u0022ajax-throbber sk-wave\u0022\u003E\n              \u003Cdiv class=\u0022sk-rect sk-rect1\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-rect sk-rect2\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-rect sk-rect3\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-rect sk-rect4\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-rect sk-rect5\u0022\u003E\u003C\/div\u003E\n            \u003C\/div\u003E",
                              "hideAjaxMessage": false,
                              "alwaysFullscreen": false,
                              "throbberPosition": "body"
                          },
                          "omedia": {
                              "svg_icon_file": "images\/icons.svg",
                              "theme_path": "\/themes\/custom\/omedia",
                              "css_js_query_string": "qk24s1",
                              "active_langs": ["ka"],
                              "live_server_url": "https:\/\/js.popsport.com:3000"
                          },
                          "statistics": {
                              "data": {
                                  "nid": "13"
                              },
                              "url": "\/core\/modules\/statistics\/statistics.php"
                          },
                          "user": {
                              "uid": 0,
                              "permissionsHash": "fe6e4dfe12773b5e6b64f095b207e77573c421e3ed02dcb3080b17ca636f8196"
                          }
                      }
        </script>
        <script src="/sites/default/files/js/js_pr_MgNAETz2Lus6JlZeqxhQ4chxP-yKKJkII2BghVvM.js"></script>

    </div>
</div>

@endsection