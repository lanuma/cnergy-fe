<div class="populer-container">
  <h4>populer</h4>
  <div class="list-populer-container">
    <a href="#">
      <div class="image-content">
        @include('image', [
                'source' => $populer,
                'force' => '310x172',
                'size' => '310x172',
                $populer['news_title'] ?? null,
            ])
      </div>
    </a>
    <div class="list-berita-populer">
      @foreach ($populer as $item)
        <a href="#">
          <div>
            <h1>{{ $loop->iteration }}</h1>
          </div>
          <div class="berita-populer-deskripsi">
            <span>{{ $item['category_name'] }}</span>
            <p>{{ $item['news_title'] }}</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>