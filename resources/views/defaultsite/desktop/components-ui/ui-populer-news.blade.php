<div class="populer-container">
  <h4>populer</h4>
  <a href="#">
    <figure>
      <img src="{{ URL::asset('assets/images/populer-image.webp') }}" width="100%" height="190px">
    </figure>
  </a>
  <div class="list-berita-populer">
    @foreach ($populer as $item)
      <a href="#">
        <h1>{{ $loop->iteration }}</h1>
        <div class="berita-populer-deskripsi">
          <span>{{ $item['news_title'] }}</span>
          <p>{{ $item['news_synopsis'] }}</p>
        </div>
      </a>
    @endforeach
  </div>
</div>