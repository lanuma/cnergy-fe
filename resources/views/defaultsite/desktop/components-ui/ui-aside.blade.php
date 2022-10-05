@include('defaultsite.desktop.components-ui.ui-trending-tag')

@if ($reference ?? null)
    @include('defaultsite.desktop.components-ui.ui-sidebar-news', ['reference' => $reference])
@endif

@include('defaultsite.desktop.components-ui.ui-populer-news')
