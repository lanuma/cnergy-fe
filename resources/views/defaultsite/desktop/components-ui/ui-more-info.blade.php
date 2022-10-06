<div class="more-info-container">
    <p>{{ $tag['content'] ?? null }}</p>
    @if ($tag['content'] ?? null)
        <a href="#">Selengkapnya</a>
    @endif
    <div class="desc">
        <p><b>About : </b>{{ $headline['news_synopsis'] ?? null }}</p>
        <p><b>Date :</b> {{ Util::date($headline['news_entry'], 'ago') }} </p>
    </div>
</div>
