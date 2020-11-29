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
                                    {{-- <div>


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

                    </div> --}}


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
                                                                        class="link-level-2">საქართველოს
                                                                        თასი</a>
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




                                    {{-- <header>
                        <div class="eb-block-title om-color-feed">
                            <h2 class="ebt-title"><span class="ebt-inner">გირჩევთ ნახოთ</span></h2>
                        </div>
                    </header>
                    @include('posts.relatedNews') --}}

                                    {{-- 
                    @foreach ($posts as $data)
                    <div class="views-row">
                        <article class="e-article-teaser-sm d-flex" data-nid="29625"
                            data-url="https://popsport.com/article/29625-preview-sakartvelos-udzlieresi-trio-hqavs-pinets-liderebi-aklia">
                            <div class="article-thumbnail">
                              
                                <a
                                href="{{route('adminshow',["id"=>$data->id])}}">
                                    <img src="{{asset("storage/$data->image")}}" width="95" height="78"
                                        alt="Thumbnail" />


                                    </a>
                                    <div class="at-cover">

                                    </div>
                                </div>

                                <div class="ats-info d-flex flex-column justify-content-center">
                                    <time class="om-date" datetime="2020-11-27T23:50:00+0400"
                                        title="27 ნოე 2020 / 23:50"
                                        style="visibility: visible;">{{$data->created_at}}</time>

                                    <a href="{{route('adminshow',["id"=>$data->id])}}" class="article-link" style="   
                                    overflow: hidden;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;">
                                        {{$data->description}}
                                    </a>
                                </div>
                                </article>
                            </div>


                            @endforeach --}}













                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



@endsection