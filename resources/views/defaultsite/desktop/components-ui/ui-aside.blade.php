{{-- TRENDING TAG --}}
@include('defaultsite.desktop.components-ui.ui-trending-tag')


{{-- @if ($reference ?? null)
        @include('defaultsite/desktop/components/recommendation', ['reference' => $reference])
    @endif --}}

@if ($reference ?? null)
    @include('defaultsite.desktop.components-ui.ui-sidebar-news', ['reference' => $reference])
@endif

{{-- @dump($reference) --}}
@include('defaultsite.desktop.components-ui.ui-populer-news')
