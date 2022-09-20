<div class="berita-terkini-container">
  <h4>berita sidebar</h4>
  <div class="berita-terkini">
    <a href="#">
        <figure>
            <img src="{{ $latest[1]['news_image']['real'] }}" width="100%" height="170px">
            <figcaption>{{ $latest[1]['news_title'] }}</figcaption>
        </figure>
    </a>
    <div class="list-berita-terkini">
        @foreach ($latest as $item)
            <a href="#" class="d-flex align-items-center justify-content-between gap-3">
                <div class="image">
                    <img src="{{ $item['news_image']['real'] }}"  >
                </div>
                <p>{{ $item['news_title'] }}</p>
            </a>
        @endforeach
    </div>
  </div>
</div>