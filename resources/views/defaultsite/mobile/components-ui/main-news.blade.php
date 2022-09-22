<div class="main-news-container">
  <figure>
    <a href="{{ Src::detail($mn[0]) }}" aria-label="{{ $mn[0]['news_title'] ?? null }}">
      <div class="image-news">
        <img src="{{ $mn[0]['news_image']['real'] }}">
      </div>
    </a>
  </figure>
  <div class="main-news-deskripsi">
    <h3>{{ $mn[0]['news_title'] }}</h3>
    <p>{{ Util::date($mn[0]['news_date_publish'], 'ago') }} </p>
  </div>
</div>