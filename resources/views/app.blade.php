<!DOCTYPE html>
<html class="scrollbar-thin scrollbar-track-dark scrollbar-thumb-light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-59TFL65');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://www.fabioangelici.com/images/logo.webp">
        <meta property="og:locale" content="it_IT">
        <meta property="og:site_name" content="Fabio Angelici | Web Developer Freelance">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@angelici__fabio">
        <meta name="twitter:title" content="Fabio Angelici | Sviluppo siti web ecommerce e gestionali">
        <meta name="twitter:image" content="https://www.fabioangelici.com/images/logo.webp">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fav Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="/images/favicons/site.webmanifest">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
        <script type="text/javascript">
            var _iub = _iub || [];
            _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"floatingPreferencesButtonDisplay":"bottom-left","perPurposeConsent":true,"siteId":2960676,"whitelabel":false,"cookiePolicyId":71101442,"lang":"it", "banner":{ "acceptButtonDisplay":true,"backgroundOverlay":true,"closeButtonRejects":true,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"logo":"https://fabioangelici.com/images/logo.webp","position":"bottom","rejectButtonDisplay":true }};
            </script>
            <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
    </head>
    <!-- Google tag (gtag.js) -->
<script async class="_iub_cs_activate" suppressedsrc="https://www.googletagmanager.com/gtag/js?id=G-SP4JL1YBZ1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SP4JL1YBZ1');
  gtag('config', 'AW-10909593423');
</script>
    <body class="font-josefin antialiased bg-background text-white">
            <!-- Google Tag Manager (noscript) -->
<noscript><iframe class="_iub_cs_activate" suppressedsrc="https://www.googletagmanager.com/ns.html?id=GTM-59TFL65"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        @inertia
        <!-- Default Statcounter code for fabioangelici.com
http://https:fabioangelici.com -->
<script type="text/javascript">
    var sc_project=12841492; 
    var sc_invisible=1; 
    var sc_security="eee0a4ea"; 
    </script>
    <script type="text/plain"
    class="_iub_cs_activate" suppressedsrc="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript><div class="statcounter"><a title="Web Analytics"
    href="https://statcounter.com/" target="_blank"><img class="statcounter"
    src="https://c.statcounter.com/12841492/0/eee0a4ea/1/" alt="Web Analytics"
    referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
    <!-- End of Statcounter Code -->
    </body>
</html>
