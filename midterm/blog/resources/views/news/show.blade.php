
@extends('layouts.main')
@section('content')


<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- preloader -->
    
    <div class="uc-mobile-menu-pusher">
    <div class="content-wrapper">
    <section id="header_section_wrapper" class="header_section_wrapper">
        <div class="container">
            <div class="header-section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="left_section">
                                                <span class="date">
                                                    Sunday .
                                                </span>
                            <!-- Date -->
                                                <span class="time">
                                                    09 August . 2016
                                                </span>
                            <!-- Time -->
                            <div class="social">
                                <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                <!--Google +-->
                                <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                <!--Linkedin-->
                                <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                <!--Pinterest-->
                                <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            </div>
                            <!-- Top Social Section -->
                        </div>
                        <!-- Left Header Section -->
                    </div>
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo.png" alt="Tech NewsLogo"></a>
                        </div>
                        <!-- Logo Section -->
                    </div>
                    <div class="col-md-4">
                        <div class="right_section">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li class="dropdown lang">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">En <i
                                            class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Bn</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Language Section -->
    
                            <ul class="nav-cta hidden-xs">
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                        class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head-search">
                                                <form role="form">
                                                    <!-- Input Group -->
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                               placeholder="Type Something"> <span class="input-group-btn">
                                                                                <button type="submit"
                                                                                        class="btn btn-primary">Search
                                                                                </button>
                                                                            </span></div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Search Section -->
                        </div>
                        <!-- Right Header Section -->
                    </div>
                </div>
            </div>
            <!-- Header Section -->
            @include('menu.menu')
            <!-- .navigation-section -->
        </div>
        <!-- .container -->
    </section>
    <!-- header_section_wrapper -->
    
    <section id="entity_section" class="entity_section">
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <div class="entity_wrapper">
        <div class="entity_title">
            <h1><a href="/" class="title" style="    color: #337ab7;">   HOMEPAGE</a></h1>
        </div>
        <div class="entity_title">
            <h1><a href="#">   {{$news->title}}</a></h1>
        </div>
        <!-- entity_title -->
    
        <div class="entity_meta"><a href="#" target="_self">            {{$news->created_at}}
        </a>
        </div>
        <!-- entity_meta -->
    
        <div class="entity_rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-full"></i>
        </div>
        <!-- entity_rating -->
    
        <div class="entity_social">
            <a href="#" class="icons-sm sh-ic">
                <i class="fa fa-share-alt"></i>
                <b>424</b> <span class="share_ic">Shares</span>
            </a>
            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
            <!--Twitter-->
            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
            <!--Google +-->
            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
            <!--Linkedin-->
            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
            <!--Pinterest-->
            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
        </div>
        <!-- entity_social -->
    
        <div class="entity_thumb">
            <img class="img-responsive" src="assets/img/category_img_top.jpg" alt="feature-top">
        </div>
        <!-- entity_thumb -->
    
        <div class="entity_content">
          
    
            <blockquote class="pull-left">            {{$news->description}}

            </blockquote>
         
    
            <p>
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                pain was born and I will give you a complete account of the system, and expound the
                actual teachings of the great explorer of the truth, the master-builder of human
                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                but because those who do not know how to pursue pleasure rationally encounter
                consequences that are extremely painful.
            </p>
        </div>
        <!-- entity_content -->
    
        <div class="entity_footer">
            <div class="entity_tag">
                <span class="blank"><a href="#">Tech</a></span>
                <span class="blank"><a href="#">Transport</a></span>
                <span class="blank"><a href="#">Mobile</a></span>
                <span class="blank"><a href="#">Gadgets</a></span>
            </div>
            <!-- entity_tag -->
    
            <div class="entity_social">
                <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
                <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
            </div>
            <!-- entity_social -->
    
        </div>
        <!-- entity_footer -->
    
    </div>
    <!-- entity_wrapper -->
    
    @include('news.related-news')
    <!-- Related news -->
    
    <div class="widget_advertisement">
        <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
    </div>
    <!--Advertisement-->
    
    <div class="readers_comment">
        <div class="entity_inner__title header_purple">
            <h2>Readers Comment</h2>
        </div>
    </div>
        <!-- entity_title -->
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
                {{$item->comments}}
            </div>
        <small>{{$item->created_at}}</small>

        
        
        </div>

    </div>
        @endforeach
        <!-- media end -->
    
    
        <!-- media end -->
    </div>
    <!--Readers Comment-->
    
    <div class="widget_advertisement">
        <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
    </div>
    <!--Advertisement-->
    
    <div class="entity_comments container">
        <div class="entity_inner__title header_black">
            <h2>Add a Comment</h2>
        </div>
        <!--Entity Title -->
    <form method="POST" action="{{route('storecomment')}}" style="margin-bottom: 50px">
        @csrf
        <input type="hidden" name="id" value="{{$news->id}}">
        <textarea name="comments" class="form-control"></textarea>
        <button style="margin-top: 10px" class="btn btn-submit red">Submit Comment</button>
    </form>
 
    
        <!--Entity Comments From -->
    
    </div>
    <!--Entity Comments -->
    
    </div>
    <!--Left Section-->
    
    <div class="col-md-4">
    <br/>
    <br/>
    <br/>
    <!-- .uc-mobile-menu -->
    
    </div>
    @endsection
    @push('scripts')
        
    @endpush
