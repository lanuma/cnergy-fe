<div class="more-info-container">
    {{-- @dump($tag) --}}
    <p>{{ $tag['content'] ?? null }}</p>
    @if ($tag['content'] ?? null)
        <a href="#">Selengkapnya</a>
    @endif
    <div class="desc">
        <p><b>Tentang :</b>{{ $headline['news_synopsis'] ?? null }}</p>
        {{-- <p><b>Lokasi Pelaksanaan</b>: Bandung</p> --}}
        <p><b>Tanggal Pelaksanaan</b> {{ Util::date($headline['news_entry'], 'ago') }} </p>
    </div>
</div>
