<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{  settings()->name  }}</title>
    
    <meta name="title" content="{{ settings()->name }}">
    <meta name="description" content="{!! settings()->about_desc !!}">
    <meta name="keywords" content="{!! settings()->about_desc !!}">
    <meta name="author" content="elsecolor">
    <meta property="fb:app_id" content="{{ settings()->fb_app_id }}">
    <meta property="og:title" content="{{ settings()->name }}">
    <meta property="og:description" content="{!! settings()->about_desc !!}">
    <meta property="twitter:title" content="{!! settings()->name !!}">
    <meta property="twitter:description" content="{!! settings()->about_desc !!}">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/et-line.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/owl.transitions.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('landing')}}/css/style.css">
    <link rel="stylesheet" href="{{url('landing')}}/css/responsive.css">
    @if ( Config::get('app.locale') == 'ar')
        <link rel="stylesheet" href="{{url('landing')}}/css/rtl.css">
    @endif
    <link href="{{url('/')}}/assets/global/plugins/bootstrap-toastr/toastr-rtl.min.css" rel="stylesheet" type="text/css" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400%7CUbuntu:400,700%7COpen+Sans" rel="stylesheet">

     


<link rel="shortcut icon" href="{{url('/')}}/{{ settings()->logo  }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/{{ settings()->logo  }}" />
<link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/{{ settings()->logo  }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/{{ settings()->logo  }}" />
<link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/{{ settings()->logo  }}" />
<link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/{{ settings()->logo  }}" />
<link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/{{ settings()->logo  }}" />
<link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/{{ settings()->logo  }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/{{ settings()->logo  }}" />



    <!--[if lt IE 9]>
    <script src="{{url('landing')}}/assets/js/html5shiv.min.js"></script>
    <script src="{{url('landing')}}/assets/js/respond.min.js"></script>
    <![endif]-->
 <style>
.mySlides {display:none;}
</style>

   
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ settings()->google_pixel }}"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ settings()->google_pixel }}');
    </script>

    <!-- Snap Pixel Code -->
    <script type='text/javascript'>
        (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
        {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
            a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
            r.src=n;var u=t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r,u);})(window,document,
            'https://sc-static.net/scevent.min.js');

        snaptr('init', '{{ settings()->snapchat_pixel }}', {
            'user_email': 'info@mrasil.sa'
        });

        snaptr('track', 'PAGE_VIEW');

    </script>
    <!-- End Snap Pixel Code -->



    <!-- TikTok Pixel Code -->
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

            ttq.load('{{ settings()->tiktok_pixel }}');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <!-- End TikTok Pixel Code -->

</head>

<body>
