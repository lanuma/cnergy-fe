<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{config('site.attributes.meta.title') }}</title>
    <meta http-equiv="cache-control" content="public, no-transform" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="{{ config('site.attributes.meta.rel_to_amp') ?? 'canonical' }}" href="{{ config('site.attributes.meta.ampUrl') ?? request()->url() }}" />
    <link rel="icon" type="image/png" href="{{ config('site.attributes.favicon') }}">

    <meta name="title" content="{{config('site.attributes.meta.title')??null }}">
    <meta name="description" content="{{config('site.attributes.meta.site_description')??null }}">
    <meta name="keywords" content="{{config('site.attributes.meta.article_keyword')??null }}">
    <meta property="og:site_name" content="{{config('site.attributes.reldomain.domain_name')??null }}">
    <meta property="og:url" content="{{config('site.attributes.meta.article_url')??null }}">
    <meta property="og:title" content="{{config('site.attributes.meta.article_title')??null }}">
    <meta property="og:description" content="{{config('site.attributes.meta.article_short_desc')??null }}">
    <meta property="article:modified_time" content="{{config('site.attributes.meta.article_last_update')??null }}">
    <meta property="og:updated_time" content="{{config('site.attributes.meta.article_last_update')??null }}">
    <meta property="fb:app_id" content="{{config('site.attributes.fb_app_id')??null }}">
    <meta property="og:type" content="{{config('site.attributes.meta.type')??null }}">
    <meta property="og:image" content="{{config('site.attributes.meta.article_url_image')??null }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{config('site.attributes.twitter_username')??null }}">
    <meta name="twitter:creator" content="{{config('site.attributes.twitter_username')??null }}">

    <meta name="adx:sections" content="{{config('site.attributes.meta.type')??null }}">
    <meta name="adx:keywords" content="{{config('site.attributes.meta.article_keyword')??null }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles-mobile.css') }}">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>

    <div class=" max-w-full">
        {{-- Header --}}
        @include('defaultsite.mobile.components-ui.navbar')

        {{-- Breaking news --}}
        @include('defaultsite.mobile.components-ui.breaking-news')

        @yield('content')

        {{-- Footer --}}
        {{-- @if (config('site.use_footer', 'yes') == 'yes') --}}
            @include('defaultsite.mobile.components-ui.footer')
        {{-- @endif --}}
    </div>
    {{-- @yield('m-photo-detail') --}}

</body>

 <script>
    const mainNav = document.querySelector('.nav-main');
    const closeNav = document.querySelector('.nav-close');
    const openNav = document.querySelector('.nav-open');

    openNav.addEventListener('click',show);
    closeNav.addEventListener('click',close);

    function show(){
        mainNav.style.transition= 'transform 0.5s ease';
        mainNav.style.transform =  'translateX(0)';
    }
    function close(){
        mainNav.style.transform =  'translateX(-100%)';
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>