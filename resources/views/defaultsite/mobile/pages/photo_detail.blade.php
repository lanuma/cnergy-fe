@extends('defaultsite.mobile.layouts.ui-main')

{{-- @push('preload')
<link rel="preload" as="image" href="{{ Src::imgNewsCdn($row, '375x208', 'webp') }}" />
{!! RecaptchaV3::initJs() !!}
@endpush --}}

{{-- @push('styles')
<link rel="preload" href="{{ Src::mix('css/detail.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ Src::mix('css/detail.css') }}" /></noscript>
<style>
    .swiper-pagination{
        position: relative;
    }
    .channel-ad_ad-headline{
        margin:15px 0;
        text-align: center;
        display: flex;
        justify-content: center;
    }
    .channel-ad_ad-sc,.channel-ad_ad-sc-2,.channel-ad_ad-exposer{
        margin:15px 0;
    }
</style>
@endpush --}}

{{-- @if( config('app.enabled_tracking') )
    @push('script')
    <script>
        var url = '{{ str_replace('api', 'analytics', config('app.api_url')) }}/jsview2/';
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('{!! http_build_query(['url'=>Src::detail($row??null), 'platform'=>config('site.device')=='mobile'?'m':'www']) !!}');
    </script>
    @endpush
@endif --}}

{{-- @push('script')
<script>
To trigger the Event
window.addEventListener('load', function(){
    document.dispatchEvent(new Event("hyperlocal:load"));
});
</script>
@endpush --}}

@section('content')
{{-- 
<div class="channel-ad channel-ad_ad-headline">
    {!! Util::getAds('headline') !!}
</div> --}}

{{-- <ul class="main-breadcrumb">
    <li class="main-breadcrumb-item"><a href="/">Home</a></li>
    @foreach ($row['news_category'] as $r)
        @if ($loop->iteration==1)
            <li class="main-breadcrumb-item {{$loop->count==1?'active':''}}"><a href="{{ Src::category($row) }}">{{$r['name']??null}}</a></li>
        @elseif($loop->iteration==2)
            <li class="main-breadcrumb-item {{$loop->count==2?'active':''}}"><a href="{{ url(( $row['news_category'][0]['url']??'' ).'/'.( $row['news_category'][1]['url']??'' )) }}">{{$r['name']??null}}</a></li>
        @elseif($loop->iteration==3)
            <li class="main-breadcrumb-item {{$loop->count==3?'active':''}}"><a href="{{ url(( $row['news_category'][0]['url']??'' ).'/'.( $row['news_category'][1]['url']??'' ).'/'.( $row['news_category'][2]['url']??'' )) }}">{{$r['name']??null}}</a></li>
        @endif
    @endforeach
</ul> --}}
<div class="main-body">
    <div class="main-article">
        {{-- headline news --}}
        <div class="main-news-container">
            <ul class="main-breadcrumb">
                <li class="main-breadcrumb-item"><a href="/">Home</a></li>
                @foreach ($row['news_category'] as $r)
                    @if ($loop->iteration==1)
                        <li class="main-breadcrumb-item {{$loop->count==1?'active':''}}"><a href="{{ url(( $row['news_category'][0]['url']??'' )) }}">{{$r['name']??null}}</a></li>
                    @elseif($loop->iteration==2)
                        <li class="main-breadcrumb-item {{$loop->count==2?'active':''}}"><a href="{{ url(( $row['news_category'][0]['url']??'' ).'/'.( $row['news_category'][1]['url']??'' )) }}">{{$r['name']??null}}</a></li>
                    @elseif($loop->iteration==3)
                        <li class="main-breadcrumb-item {{$loop->count==3?'active':''}}"><a href="{{ url(( $row['news_category'][0]['url']??'' ).'/'.( $row['news_category'][1]['url']??'' ).'/'.( $row['news_category'][2]['url']??'' )) }}">{{$r['name']??null}}</a></li>
                    @endif
                @endforeach
            </ul>



            {{-- main --}}
                @include('defaultsite.mobile.components-ui.slider-kumpulan-foto')

            {{-- st-share --}}
            <div class="pt-5"> 
                @include('defaultsite.mobile.components-ui.dt-share')
            </div>


            {{-- report --}}
            <div style="margin:20px;">
                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-light report-btn"><i
                class="fa-solid fa-triangle-exclamation" style="color: #ca0000; margin-right: 10px;"></i>REPORT ARTICLE</button>

                <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            {{-- FORM REPORT --}}
                            @include('defaultsite.mobile.components-ui.form-report')
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        {{-- related tag --}}
        @include('defaultsite.mobile.components-ui.related-tag', ['title' => 'RELATED TAGS'])

        {{-- trending tag --}}
        @include('defaultsite.mobile.components-ui.trending-tag')

        {{-- <div class="channel-ad channel-ad_ad-sc-2">
            {!! Util::getAds('showcase-2') !!}
        </div> --}}
        @include( 'defaultsite.mobile.components-ui.related-news',['news'=>$row['latest'], 'title' => 'LATEST NEWS'] )

    </div>
</div>

@endsection