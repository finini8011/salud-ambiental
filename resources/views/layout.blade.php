<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta> @section('titulo','"Salud Ambiental"')
        <title>@yield('titulo','SALUD AMBIENTAL') </title>
        
        <!-- *******Google Tag Manager ********-->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MFWWJFR');</script>
        <!-- *********End Google Tag Manager ***********-->
        

        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/demo.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/theme1.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('packages/core/main.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('packages/daygrid/main.css')}}" />        


        @yield('styles')

        <!--google Analytics-->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152412441-1"></script>



<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-152412441-1');

</script>

    </head>
    <body style="min-width: 1227px;">
            <!-- *******Google Tag Manager (noscript)****** -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFWWJFR"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- ********End Google Tag Manager (noscript) **********-->
        <div class="wrapper" style="min-width: 768px;">
            <!-- Inicio header -->
            @include("header")
            <!-- Fin header -->
        </div>

        <div class="content-wrapper">
            @yield('contenido')
        </div>
        <div class="wrapper">
            @include('footer')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
        <script src="{{asset('packages/core/locales-all.js')}}"></script>
        <script src="{{asset('packages/core/main.js')}}"></script>
        <script src="{{asset('packages/interaction/main.js')}}"></script>
        <script src="{{asset('packages/daygrid/main.js')}}"></script>
        @yield('scripts')

    </body>
</html>
