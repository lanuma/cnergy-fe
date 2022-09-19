<div class="list-main-news-container">
    <div class="d-flex justify-content-between list-main-news-card">
      <a href="#">
        <img src="{{ $nw[3]['news_image']['real'] }}" width="100%" height="130px">
      </a>
      <div class="list-main-news-deskripsi">
        <div class="category-and-time">
          <span class="text-uppercase text-danger fw-bold">{{$nw[3]['category_name']}}</span>
          <span class="text-black-50">5 menit lalu</span>
        </div>
        <a href="#">
          <h4>{{ $nw[3]['news_title'] }}</h4>
          <p>{{ $nw[3]['news_synopsis'] }}</p>
        </a>
      </div>
    </div>
    <div class="d-flex justify-content-between list-main-news-card">
        <a href="#">
          <img src="{{ $nw[3]['news_image']['real'] }}" width="100%" height="130px">
        </a>
        <div class="list-main-news-deskripsi">
          <div class="category-and-time">
            <span class="text-uppercase text-danger fw-bold">{{$nw[3]['category_name']}}</span>
            <span class="text-black-50">5 menit lalu</span>
          </div>
          <a href="#">
            <h4>{{ $nw[3]['news_title'] }}</h4>
            <p>{{ $nw[3]['news_synopsis'] }}</p>
          </a>
        </div>
      </div>
  </div>