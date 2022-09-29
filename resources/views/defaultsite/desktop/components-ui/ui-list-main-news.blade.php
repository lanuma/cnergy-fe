<div class="list-main-news-container">
    @foreach ($listnews as $ln)
        <div class="d-flex align-items-start gap-3 list-main-news-card">
            <div class="list-news-image">
                <a href="{{ Src::detail($ln) }}" aria-label="{{ $ln['news_title'] ?? null }}">
                    @include('image', [
                        'source' => $ln,
                        'size' => '230x129',
                        $ln['news_title'] ?? null,
                    ])
                </a>
            </div>
            <div class="list-main-news-deskripsi">
                <div class="category-and-time">
                    <span class="text-uppercase text-danger fw-bold">{{ $ln['category_name'] }}</span>
                    <span class="text-black-50">{{ Util::date($ln['news_date_publish'], 'ago') }}</span>
                </div>
                <a href="{{ Src::detail($ln) }}" aria-label="{{ $ln['news_title'] ?? null }}">
                    <h4>{{ $ln['news_title'] }}</h4>
                    <p>{{ $ln['news_synopsis'] }}</p>
                </a>
            </div>
        </div>
    @endforeach
</div>
