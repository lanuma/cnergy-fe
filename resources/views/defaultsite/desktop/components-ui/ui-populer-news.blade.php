<div class="populer-container">
  <h4>populer</h4>
  <div class="list-populer-container">
    <a href="#">
      <figure>
        <img src="{{  $populer[1]['news_image']['real']  }}" width="100%" height="190px">
      </figure>
    </a>
    <div class="list-berita-populer">
      @foreach ($populer as $item)
        <a href="#">
          <div class="populer-number">
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