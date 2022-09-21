<div class="more-info-container">
    <p>{{ $headline['news_content'] ?? null }}</p>
    <a href="#">Selengkapnya</a>

    <div class="desc">
        <p><b>Tentang</b>{{ $headline['news_synopsis'] ?? null }}</p>
        {{-- <p><b>Lokasi Pelaksanaan</b>: Bandung</p> --}}
        <p><b>Tanggal Pelaksanaan</b> {{ Util::date($headline['news_entry'], 'ago') }} </p>
    </div>
</div>
