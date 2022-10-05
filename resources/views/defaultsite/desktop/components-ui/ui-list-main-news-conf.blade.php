@if ($rows)
    <div id="{{ Str::uuid() }}">
        @foreach ($rows as $r)
            @if ($r['news_type'] == 'news')
                @include('defaultsite.desktop.components-ui.ui-list-text')
            @elseif($r['news_type'] == 'photonews')
                @include('defaultsite.desktop.components-ui.ui-gallery-news')
            @elseif($r['news_type'] == 'video')
                @include('defaultsite.desktop.components-ui.ui-video-news')
            @endif
        @endforeach

    </div>
@endif
