<div class="more-info-container-index">
    {{-- @dump($tag) --}}
    {{-- <p>{{ $tag['content'] ?? null }}</p> --}}
    <h1 class="index-h1"> {{ $tag['name'] ?? null }}</h1>
    {{-- <p class="index-tag">{{$headline['news_category']}}</p> --}}
    <div class="desc-index">
            <p class="index-p">
                {{ $tag['description'] ?? null }} <span class="index-span">Selengkapnya</span>
        </p>
    {{-- <p class="index-tentang">Tentang: {{ $headline['news_synopsis'] ?? null }}</p> --}}
    <p class="index-lokasi">Lokasi Pelaksanaan: Bandung</p>
    {{-- <p class="index-date">Tanggal Pelaksanaan: {{ Util::date($tag['date_entry'], 'ago') ?? null }}</p> --}}
    </div>  
    
</div>
    