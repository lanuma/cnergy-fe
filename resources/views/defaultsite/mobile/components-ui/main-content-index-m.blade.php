<div class="more-info-container-index">
    <h1 class="index-h1"> {{ $tag['name'] ?? null }}</h1>
    {{-- <p class="index-tag">{{$headline['news_category']}}</p> --}}
    <div class="desc-index">
            <p class="index-p">
                {{ $headline['news_content'] ?? null }} <span class="index-span">Selengkapnya</span>
        </p>
    <p class="index-tentang">Tentang: {{ $headline['news_synopsis'] ?? null }}</p>
    <p class="index-lokasi">Lokasi Pelaksanaan: Bandung</p>
    <p class="index-date">Tanggal Pelaksanaan: {{ Util::date($headline['news_entry'], 'ago') }}</p>
    </div>
    
</div>
    