@if ($breaking = \Data::headline() ?? null)
    @if (count($breaking) > 0)
        <div class="breaking-news-container">
            <div class="breaking-news-logo">
                <span>breaking news</span>
            </div>
            <div class="breaking-text-marquee">
                <span>
                    <marquee direction="left">
                        {{ $breaking[0]['news_title'] }}
                    </marquee>
                </span>
            </div>
        </div>
    @endif
@endif