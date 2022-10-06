@extends('defaultsite.desktop.layouts.ui-main')

@section('content')

    {{-- Breadcrumb Photo Page --}}
    <ul class="photo-breadcrumb d-flex align-items-center gap-2 flex-wrap my-4">
        <li><a href="/">Home</a></li>
        <li><i class="fa-sharp fa-solid fa-chevron-right" style="font-size: 10px;"></i></li>
        <li class="active"><a href="/photo">Foto</a></li>
    </ul>

    {{-- Trending Tag Photo Page --}}
    @if ($tag = collect(Data::trendingTag())->slice(0, 5) ?? null)
        @if (count($tag) > 0)
            <div class="photo-trending d-flex align-items-center gap-4">
                <h4>TRENDING #</h4>
                <ul class="d-flex align-items-center">
                    @foreach ($tag as $r)
                        <li><a href="{{ Src::detailTag($r) }}">{{ $r['title'] ?? null }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endif

    {{-- Headline Photo Page --}}
    @if ($headline[0]['news_id'] ?? null)
        <div class="mt-3 photo-headline topFoto">
            <div class="topFoto-item item rounded-3">
                <a href="{{ Src::detail($headline[0]) }}" class="item-img item-img--main"
                    data-duration="{{ count($headline[0]['photonews'] ?? 0) }}"
                    aria-label="{{ $headline[0]['news_title'] ?? null }}">

                    @include('image', [
                        'source' => $headline[0],
                        'size' => '761x389',
                        $headline[0]['news_title'] ?? null,
                    ])

                    <span class="text-overlay fs-1 p-5">
                        <p>
                            {{ $headline[0]['news_title'] ?? null }} <i class="fa-solid fa-camera ms-2"></i>
                        </p>
                    </span>

                    <span class="data-overlay">
                        {{ count($headline[0]['photonews'] ?? 0) }}
                    </span>
                </a>

                <a href="{{ Src::detail($headline[1]) }}" class="item-img item-img--aside"
                    data-duration="{{ count($headline[1]['photonews'] ?? 0) }}"
                    aria-label="{{ $headline[1]['news_title'] ?? null }}">
                    @include('image', [
                        'source' => $headline[1],
                        'size' => '230x129',
                        $headline[1]['news_title'] ?? null,
                    ])
                    <span class="text-overlay fs-4 p-3">
                        <p>{{ $headline[1]['news_title'] ?? null }}</p>
                    </span>
                    <span class="data-overlay">
                        {{ count($headline[1]['photonews'] ?? 0) }}
                    </span>
                </a>
                <a href="{{ Src::detail($headline[2]) }}" class="item-img item-img--aside"
                    data-duration="{{ count($headline[2]['photonews'] ?? 0) }}"
                    aria-label="{{ $headline[2]['news_title'] ?? null }}">
                    @include('image', [
                        'source' => $headline[2],
                        'size' => '230x129',
                        $headline[2]['news_title'] ?? null,
                    ])
                    <span class="text-overlay fs-4 p-3">
                        <p>{{ $headline[2]['news_title'] ?? null }}</p>
                    </span>
                    <span class="data-overlay">
                        {{ count($headline[2]['photonews'] ?? 0) }}
                    </span>
                </a>
                <a href="{{ Src::detail($headline[3]) }}" class="item-img item-img--aside"
                    data-duration="{{ count($headline[3]['photonews'] ?? 0) }}"
                    aria-label="{{ $headline[3]['news_title'] ?? null }}">
                    @include('image', [
                        'source' => $headline[3],
                        'size' => '230x129',
                        $headline[3]['news_title'] ?? null,
                    ])
                    <span class="text-overlay fs-4 p-3">
                        <p>{{ $headline[3]['news_title'] ?? null }}</p>
                    </span>
                    <span class="data-overlay">
                        {{ count($headline[3]['photonews'] ?? 0) }}
                    </span>
                </a>
            </div>
        </div>
    @endif

    {{-- Recomendation News Photo Page --}}
    {{-- @if (count($popular) > 0)
    <div class="mt-4">
        <h1 class="special-font-lato fs-2 fw-bold">POPULER</h1>
        @include( 'defaultsite.desktop.components-ui.ui-listphoto', ['rows'=> $popular])
    </div>
@endif --}}

    @if (count($recommendation) > 0)
        <div class="mt-5">
            <h1 class="mb-3 special-font-lato fs-4 fst-italic fw-bold">REKOMENDASI</h1>
            @include('defaultsite.desktop.components-ui.ui-listphoto', ['rows' => $recommendation])
        </div>
    @endif

    @if (count($latest) > 0)
        <div class="mt-5">
            <h1 class="mb-3 special-font-lato fs-4 fst-italic fw-bold">TERKINI</h1>
            @include('defaultsite.desktop.components-ui.ui-listphoto', ['rows' => $latest])
        </div>
    @endif
@endsection
