@include('defaultsite.desktop.components-ui.ui-trending-tag')

<div class="ads-side1">
    ADS-SIDE1
</div>

<div class="ads-side2">
    ADS-SIDE2
</div>

<div class="ads-side3">
    ADS-SIDE3
</div>

@if ($reference ?? null)
    @include('defaultsite.desktop.components-ui.ui-sidebar-news', ['reference' => $reference])
@endif

@include('defaultsite.desktop.components-ui.ui-populer-news')
