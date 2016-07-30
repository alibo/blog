<link href="http://gmpg.org/xfn/11" rel="profile">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<!-- Enable responsiveness on mobile devices-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

@hasSection('post::title')
    <title>@yield('post::title') - {{$siteName}}</title>
@else
    <title>@yield('pageTitle', $siteTagLine) - {{$siteName}}</title>
@endif


<!-- twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@aliborhani1">
<meta name="twitter:creator" content="@aliborhani1">

<meta name="twitter:title" content="{{ $siteName }} - @yield('pageTitle')">
<meta name="twitter:url" content="{{ $currentUrlPath }}">

@hasSection('post::brief')
<meta name="twitter:description" content="{{ $siteDescription }}">
@else
    <meta name="twitter:description" content="@yield('post::brief')">
@endif

@hasSection('post::image')
<meta name="twitter:image:src" content="@url('assets/images/')@yield('post::image')">
@endif

<!-- CSS -->
<link rel="stylesheet" href="@url('assets/css/all.css')">


<!-- Icons -->
<link rel="shortcut icon" href="@url('assets/favicon.ico')" type="image/x-icon">
