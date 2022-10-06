<!DOCTYPE html>
<html amp lang="en">

<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
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

    {{-- <link rel="stylesheet" href="{{ URL::asset('assets/css/styles-mobile.css') }}"> --}}
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style amp-custom>
        * {
    box-sizing: border-box;
}

:root {
    --prompt-font: "Prompt", sans-serif;
    --lato-font: "Lato", sans-serif;
}

.special-font-lato {
    font-family: var(--lato-font);
}

a {
    text-decoration: none;
}
        html:not([amp4ads]) body {
    margin: auto !important;
}
        body {
             max-width: 720px;
             margin: 0 auto;
    }
    /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: #fff;
    }

    nav img {
        cursor: pointer;
    }

    .nav-main {
        height: 100vh;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 10;
        background: white;
        overflow-y: auto;
        transform: translateX(-100%);
    }

    .nav-content {
        display: flex;
        flex-direction: column;
    }

    .nav-main.active {
        left: 0;
    }

    .nav-main .nav-header {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        padding: 15px 15px 5px;
        border-bottom: 0.2px solid gainsboro;
    }

    .nav-header img {
        cursor: pointer;
    }

    .nav-menus {
        padding: 15px;
    }

    .nav-menus li {
        list-style: none;
        font-size: 16px;
        padding: 10px 0;
        font-family: var(--lato-font);
    }

    .search-background {
        background: rgba(0, 0, 0, 0.5);
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .search-container {
        position: fixed;
        bottom: 0;
        right: 0;
        left: 0;
        top: 0;
        /* ini */
        z-index: -1;
        opacity: 0;
    }

    .search-box {
        position: relative;
        background-color: white;
        padding: 20px;
    }

    .header-nav-item a {
        color: black;
    }

    .header-nav-item a:hover {
        color: #cd2027;
    }
    /* end-navbar */
    /* breaking-news */
    .breaking-news-logo {
    background-color: #000000;
    height: 100%;
    clip-path: polygon(0 0, 100% 0, 87% 100%, 0% 100%);
    position: absolute;
    padding: 10px 30px 10px 15px;
    left: 0;
}

.breaking-news-container {
    position: relative;
}

.breaking-news-logo,
.special-font-prompt {
    font-family: var(--prompt-font);
}

.breaking-news-logo {
    font-size: 14px;
    font-style: italic;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
}

.breaking-text-marquee {
    z-index: -1;
    position: relative;
    background-color: #ca0000;
    padding: 10px 15px;
}

.breaking-text-marquee marquee {
    font-family: var(--lato-font);
    font-size: 12px;
    font-weight: 700;
    color: #fff;
}

    /* end-breaking-news */
    /* breadcump */
    .main-breadcrumb {
    font-family: var(--lato-font);
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    list-style-type: none;
    font-size: 14px;
    margin: 20px;
    margin-bottom: 0;
}

.main-breadcrumb .main-breadcrumb-item {
    color: #4a4a4a;
}

.main-breadcrumb .active {
    color: #ca0000;
}

.main-breadcrumb .main-breadcrumb-item a {
    color: inherit;
}

.main-breadcrumb .main-breadcrumb-item::after {
    content: ">";
    margin: 0px 10px;
}

.main-breadcrumb .main-breadcrumb-item:last-child::after {
    content: "";
}
/* end breadcrump */
/* main-article */
.main-news-deskripsi h3 {
    font-family: var(--lato-font);
    color: #000;
    font-size: 24px;
    font-weight: bolder;
}
.main-news-deskripsi p {
    font-family: var(--lato-font);
    font-weight: 400;
    font-size: 12px;
    color: #999;
}
 .image-news {
    position: relative;
    /* --aspect-ratio: 23/14;
    padding-bottom: calc(100% / (var(--aspect-ratio)));
    background-color: silver; */
    

}
/* dt-share */
.dt-share-container {
    padding: 10px 20px;
}
.fa-facebook-f,
.fa-whatsapp,
.fa-twitter {
    color: white;
    padding: 10px 23px;
}
.fa-brands {
    font-family: "Font Awesome 6 Brands";
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    width: 60px;
    height: 35px;
}
.fa-fb {
    background-color: #4a6db4;
}
.fa-wa {
    background-color: #86c747;
}
.fa-twitter {
    background-color: #1dadeb;
}
/* end dt-share */

/* dt-paragraf */
.main-news-container .dt-paragraph {
    font-family: var(--lato-font);
    font-weight: 500;
    font-size: 16px;
    /* margin-right: 2px; */
    line-height: 230%;
    color: #000000;
    text-align: justify;
    margin: 20px;
}

.dt-paragraph p {
    margin-bottom: 1.5rem;
}
/* dt-paragraf */
/*end-main article */

/* readtoo-list */

.baca-juga-container {
    padding: 15px 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin: 10px 0;
}

.baca-juga-container p {
    font-family: var(--prompt-font);
    font-weight: 700;
    font-size: 16px;
    color: #000;
    font-style: italic;
    text-transform: uppercase;
}

.baca-juga-container a {
    font-family: var(--lato-font);
    font-size: 14px;
    font-weight: 700;
    color: #ca0000;
}

.baca-juga-container a::after {
    content: ",";
}

.baca-juga-list-container {
    padding: 15px;
    background: #f9f9f9;
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    margin: 40px 20px;
}

.baca-juga-list-container h4 {
    font-family: var(--prompt-font);
    font-weight: 700;
    font-size: 16px;
    font-style: italic;
    text-transform: uppercase;
    color: #000;
}

.baca-juga-list-container ul {
    display: flex;
    flex-direction: column;
    gap: 10px;
    list-style: none;
    padding-top: 10px;
    margin: 0;
    line-height: 1.7em;
    
}

.baca-juga-list-container li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    
}
.baca-juga-list-container ul li::before {
    content: "• ";
    color: #ca0000;
}

.baca-juga-list-container ul li a {
    color: #000;
    font-family: var(--lato-font);
    font-weight: 700;
    font-size: 14px;
    text-align: justify;
}
a:hover {
    color: #dc3545 !important;
}

a {
    color: #000000
}
/* end-readtoolist */
/* related-tag */
.related-tag-container {
    margin: 0 20px;
    margin-bottom: 30px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    line-height: 200%;
}

.related-tag-container a {
    font-family: var(--lato-font);
    font-size: 12px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
}

.btn-related {
    background-color: #ca0000;
    border-radius: 8px;
}
/* end-related-tag */

/* related-article */
.artikel-terkait-container {
    margin: 10px 20px;
}
.artikel-terkait-container h4 {
    font-weight: 700;
    font-size: 16px;
    font-family: var(--prompt-font);
    font-style: italic;
    text-transform: uppercase;
}
.artikel-terkait-container .image-news {
    position: relative;
    /* --aspect-ratio: 23/13;
    padding-bottom: calc(100% / (var(--aspect-ratio)));
    background-color: silver; */
    border-radius: 8px;
}
.artikel-terkait-container .image-news img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
}
.artikel-terkait-container figure figcaption {
    font-family: var(--lato-font);
    font-size: 14px;
    color: #000;
    font-weight: 700;
    margin-top: 10px;
}   
.item-desc-title {
    font-family: "Lato";
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 24px;
    /* or 150% */

    color: #333333;
}
/* end-related-article */
/* trending-tag */
.trending-tag-container {
    margin: 20px;
    padding: 15px;
    border: 2px solid #000;
    border-radius: 4px;
}

.slider-container h4,
.trending-tag-container h4 {
    font-family: var(--prompt-font);
    font-weight: 700;
    font-style: italic;
    font-size: 16px;
    color: #000;
    text-transform: uppercase;
}

.list-trending-tag a:hover {
    color: #dc3545 !important;
}
.list-trending-tag a {
    text-decoration: none;
}

.trending-tag-container .list-trending-tag {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 15px;
    line-height: 25px;
    list-style: none;
}

.trending-tag-container .list-trending-tag a::after {
    content: "/";
    margin-left: 15px;
}
.trending-tag-container .list-trending-tag a:last-child::after {
    content: "";
}

.trending-tag-container .list-trending-tag a {
    color: #000;
    font-family: var(--lato-font);
    font-weight: 700;
    font-size: 12px;
    text-transform: uppercase;
}

/* end trending-tag */
/* slider berita-popular */
.slider-container {
    margin: 30px auto;
}

.slider-container h4 {
    margin: 0 20px;
}

.slider-container figure {
    width: 190px;
}

.slider-content {
    display: flex;
    overflow-x: scroll;
    overflow-y: hidden;
    gap: 15px;
    align-items: flex-start;
    margin-top: 10px;
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.slider-container .slider-content::-webkit-scrollbar {
    display: none;
}
.slider-news figcaption:hover {
    color: #dc3545 !important;
}
.slider-news a {
    text-decoration: none;
}

.slider-container .slider-news figure {
    width: 200px;
}

.slider-container .slider-news figcaption {
    margin-top: 10px;
    font-family: var(--lato-font);
    font-weight: 700;
    font-size: 14px;
    color: #000;
    width: 190px;
}

.slider-container .slider-news .image-news {
    position: relative;
    /* --aspect-ratio: 16/9;
    padding-bottom: calc(100% / (var(--aspect-ratio)));
    background-color: silver; */
    border-radius: 4px;
}

.slider-container .slider-news .image-news img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 4px;
}
.slider-container .slider-news:first-child {
    margin-left: 20px;
}

.slider-container .slider-news:last-child {
    margin-right: 20px;
}
/* end */

/* popular news */
.populer-container a {
    display: block;
    text-decoration: none;
}
.populer-container h4 {
    font-weight: 700;
    font-size: 16px;
    font-family: var(--prompt-font);
    font-style: italic;
    text-transform: uppercase;
}
.populer-container {
    background: #fff;
    margin: 15px 20px;
}
.list-berita-populer p:hover {
    color: #dc3545 !important;
}

.list-berita-populer {
    margin-top: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.list-berita-populer a {
    text-decoration: none;
    display: flex;
    padding: 20px 7px;
    border-bottom: 1px solid #e5e5e5;
}

.list-berita-populer a:last-child {
    border-bottom: none;
}

.berita-populer-deskripsi {
    margin-left: 20px;
}

.list-berita-populer h1 {
    width: 65px;
    text-align: center;
    color: #e5e5e5;
    font-size: 45px;
    font-family: var(--prompt-font);
    font-style: italic;
    font-weight: 700;
}
.berita-populer-deskripsi {
    margin-left: 20px;
}
.berita-populer-deskripsi span {
    font-family: var(--lato-font);
    font-size: 10px;
    font-weight: 700;
    color: #ca0000;
    text-transform: uppercase;
}

.berita-populer-deskripsi p {
    font-family: var(--lato-font);
    font-size: 14px;
    color: #000;
}

/* end */

/* footer */
.footer-container {
    background-color: #000;
    border-top: 4px solid #ca0000;
    padding: 35px 20px 15px;
    text-align: center;
}

.link-footer a {
    text-decoration: none;
}

.footer-container .link-footer {
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-container .link-footer a {
    color: #fff;
    font-family: var(--prompt-font);
    font-weight: 500;
    font-size: 14px;
    text-transform: uppercase;
}

.footer-container p {
    margin-top: 40px;
    font-family: var(--lato-font);
    font-weight: 400;
    font-size: 11px;
    color: #fff;
}

.footer-container .social-media {
    margin: 20px 0px 30px;
    display: flex;
    justify-content: center;
    /* gap: 50px; */
}
.footer-container .social-media a {
    margin: 0px 10px;
}

.footer-container span {
    color: #fff;
    font-family: var(--lato-font);
    font-weight: 400;
    font-size: 11px;
}

/* end */

    </style>
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
            @include('defaultsite.mobile.amp.components-ui.footer')
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

    const openSearch = document.querySelector('.search-container');
    const closeSearch = document.querySelector('.search-background');
    const iconSearch = document.querySelector('.search-icon');

    iconSearch.addEventListener('click',openSearchHeader);
    closeSearch.addEventListener('click',closeSearchHeader);

    function openSearchHeader(){
        openSearch.style['z-index'] = 10;
        openSearch.style['opacity'] = 1;
        openSearch.style['-webkit-transition'] = 'opacity 0.5s';
        openSearch.style['-moz-transition'] = 'opacity 0.5s';
        openSearch.style['transition'] = 'opacity 0.5s';

    }

    function closeSearchHeader(){
        openSearch.style['z-index'] = -1;
        openSearch.style['opacity'] = 0;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    (function() {
        var cx = "{{ config('site.attributes.reldomain.cse_id') ?? null }}";
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();

    window.__gcse = {
        callback: function() {
            document.getElementsByClassName("gsc-input")[2].setAttribute("placeholder", "Berita apa yang ingin Anda cari?");

            if (focus) {
                document.getElementsByClassName("gsc-input")[2].focus()
            }
        }
    };
</script>

<script>
    const slider = document.querySelector('.slider-content');
    const counter = document.querySelector('#sliderCounter');
    const widthSlider = slider.offsetWidth;
    var count = 1;
    var after = widthSlider;
    var before= 0;

    counter.innerHTML =count;
    slider.addEventListener('scroll',countNumber);

    function countNumber (){
        if (slider.scrollLeft > after){
            count = count+1;
            before = after;
            after = widthSlider*count;
            counter.innerHTML =count;
        }
        if (slider.scrollLeft+250 < before && count != 0){
            count = count-1;
            after = before;
            before = widthSlider*(count-1);
            counter.innerHTML =count;
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
</html>