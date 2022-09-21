<div class="slider-container">
  <h4>Berita</h4>
  <div class="slider-content">
    @foreach ($hl as $s)
    <div class="slider-news">
      <a href="{{ Src::detail($s) }}" aria-label="{{ $s[0]['news_title'] ?? null }}">
        <figure>
          <div class="image-news">
            
            @include('image', [
              'source' => $s,
              'force' => '212x115',
              'size' => '212x115',
              $s['news_title'] ?? null,
          ])    
          </div>
          <figcaption>{{ $s['news_title'] }}</figcaption>
        </figure> 
      </a>
    </div>
   @endforeach
  </div>
</div>