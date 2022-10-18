@include('defaultsite.desktop.components-ui.ui-trending-tag')



<div class="channel-ad channel-ad_ad-sc">
    {!! Util::getAds('showcase-1') !!}
</div>

<div class="channel-ad channel-ad_ad-hl">
    {!! Util::getAds('half-page') !!}
</div>

<div class="channel-ad channel-ad_ad-sc2">
    {!! Util::getAds('showcase-2') !!}
</div>

@if ($reference ?? null)
    @include('defaultsite.desktop.components-ui.ui-sidebar-news', ['reference' => $reference])
@endif

@include('defaultsite.desktop.components-ui.ui-populer-news')
