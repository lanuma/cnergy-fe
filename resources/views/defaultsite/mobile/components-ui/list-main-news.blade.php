<div class="list-main-news-container">
  @foreach ($listnews as $ln)
    <div class="card-news">
      <a  href="{{ Src::detail($ln) }}" aria-label="{{ $ln['news_title'] ?? null }}">
        {{-- <img src="{{ URL::asset('assets/images/list-main-news-image1.png') }}" alt="news" width="85px" height="85px"> --}}
        <div class="description">
          <div class="banner">
            <p>{{ $ln['category_name'] }}</p>
            <span>{{ Util::date($ln['news_date_publish'], 'ago') }}</span>
          </div>
          <h4>{{ $ln['news_title'] }}</h4>
        </div>
      </a>
    </div>
  @endforeach
</div>