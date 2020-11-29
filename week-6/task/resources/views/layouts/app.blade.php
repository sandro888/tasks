<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>POPSPORT</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"><script>
        (function(w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-5WDZC3T');
    </script>
    <!-- End Google Tag Manager -->


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e74e0f">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="/favicon.ico?v=QEMNQY32MA">

    <meta charset="utf-8" />
    <meta name="title" content="popsport - სპორტული ანალიტიკა, ექსკლუზივები და სიახლეები" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:site_name" content="popsport" />
    <link rel="shortlink" href="https://popsport.com/" />
    <meta property="fb:pages" content="1159313984168136" />
    <link rel="canonical" href="https://popsport.com/" />
    <meta property="og:type" content="website" />
    <meta name="twitter:title" content="popsport - სპორტული ანალიტიკა, ექსკლუზივები და სიახლეები" />
    <meta name="description"
        content="სპორტული ანალიტიკა, ექსკლუზივები და სიახლეები. ყველა ახალი ამბავი ერთ პორტალზე." />
    <meta property="og:url" content="https://popsport.com/home" />
    <meta property="og:title" content="popsport" />
    <link rel="image_src" href="https://popsport.com/og.png" />
    <meta name="twitter:url" content="https://popsport.com/home" />
    <meta property="og:image" content="https://popsport.com/og.png" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta property="fb:pages" content="1159313984168136" />
    {{-- <script type="application/ld+json">
        {
                    "@context": "https://schema.org",
                    "@graph": [{
                        "@type": "WebSite",
                        "@id": "https://popsport.com",
                        "name": "popsport",
                        "url": "https://popsport.com",
                        "potentialAction": {
                            "@type": "SearchAction",
                            "query": "https://popsport.com/search?query={search_term_string}",
                            "query-input": "required name=search_term_string"
                        },
                        "publisher": {
                            "@type": "Organization",
                            "@id": "https://popsport.com",
                            "name": "popsport",
                            "url": "https://popsport.com",
                            "sameAs": "https://facebook.com/popsportcom",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https://popsport.com/jsonld-logo.png",
                                "width": "366",
                                "height": "60"
                            }
                        }
                    }]
                }
    </script> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="alternate" hreflang="ka" href="https://popsport.com/home" />
    <link rel="revision" href="/home" />

    <title>popsport - სპორტული ანალიტიკა, ექსკლუზივები და სიახლეები</title>
    <link rel="stylesheet"
        href="https://static.popsport.com/sites/default/files/css/css_2wbtCDSIwii-L5KQ1IV_iTq6wd0WXVSAmI80QhSn3-k.css?qk24s1"
        media="all" />
    <link rel="stylesheet"
        href="https://static.popsport.com/sites/default/files/css/css_bVsrJvDXOXsXNKv917ON_xUbxkx9AGCA6yKSny3AfJY.css?qk24s1"
        media="all" />


    {{-- <script>
        var omedia = {
                    env: 'und',
                    lang: 'ka',
                    locale: 'ka_GE',
                    onUpdate: []
                };
    </script> --}}

    <!-- Facebook Pixel Code -->
    {{-- <script>
        ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '1722393127779737');
                fbq('track', 'PageView');
    </script> --}}
    {{-- <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1722393127779737&ev=PageView&noscript=1" />
    </noscript> --}}
    <!-- End Facebook Pixel Code -->


    {{-- <script type="text/javascript" src="//port80ge.adocean.pl/files/js/ado.js"></script> --}}
      
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                  
                </div>
            </div>
        </nav> --}}

        {{-- <main class="py-4"> --}}
            @yield('content')
        {{-- </main> --}}
     
    </div>
    
    
{{--     
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/toggle.js"></script> --}}
</body>
</html>
