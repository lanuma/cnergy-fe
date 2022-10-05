<div id="{{ $r['news_id'] }}" class="gallery-image-container">
    <div class="photo-gallery">
        <div class="d-flex photo-headline-gallery">
            <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
                @include('image', [
                    'source' => $r,
                    'size' => '426x238',
                    $r['news_title'] ?? null,
                ])

        </a>
        @if ($r['photonews'])
            @foreach (array_slice($r['photonews'], 0, 2) as $p)
                <span class="item-img item-img--aside {{ $loop->last ? 'item-img--overlay' : 'item-img--none' }}"
                    {{ $loop->last && count($r['photonews']) - 2 > 0 ? 'data-photo=+' . count($r['photonews']) - 2 : '' }}>
                    @include('image', [
                        'source' => $p,
                        'size' => '255x143',
                        $r['news_title'] ?? null,
                    ])
                </span>
            @endforeach
        @endif

            </a>
        </div>
        <div class="d-flex flex-column">
            @if ($r['photonews'])
                @foreach (array_slice($r['photonews'], 0, 2) as $p)
                    <div class="photo-gallery-overlay">
                        <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
                            @include('image', [
                                'source' => $p,
                                'size' => '255x143',
                                $r['news_title'] ?? null,
                            ])
                            <h1>{{ $loop->last && count($r['photonews']) - 2 > 0 ? '+' . count($r['photonews']) - 2 : '' }}
                            </h1>
                        </a>

                    </div>
                @endforeach
            @endif
        </div>

    </div>


<div class="gallery-image-row-2">
    <a href="{{ Src::category($r) }}">
        <p>{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}</p>
        <span>{{ Util::date($r['news_date_publish'], 'ago') }}</span>
    </a>
    <h4><a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a></h4>

</div>

    <div class="gallery-image-row-2 mt-4">
        <a href="{{ Src::category($r) }}">
            <p>{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}</p>
            <span>{{ Util::date($r['news_date_publish'], 'ago') }}</span>
        </a>
        <h4 class="mt-4"><a href="{{ Src::detail($r) }}" class="text-dark">{{ $r['news_title'] ?? null }}</a></h4>
    </div>

</div>
