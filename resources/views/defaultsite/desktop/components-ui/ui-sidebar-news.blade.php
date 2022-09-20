<div class="berita-sidebar-container">
    <h4>berita sidebar</h4>
    <a href="#">
        <figure>
            <img src="{{ $sb[1]['news_image']['real'] }}" width="100%" height="170px">
            <figcaption>{{ $sb[1]['news_title'] }}</figcaption>
        </figure>
    </a>
    <div class="list-berita-sidebar mt-2">
        <a href="#" class="d-flex align-items-center justify-content-between gap-3">
            <div class="image">
                <img src="{{ $sb[2]['news_image']['real'] }}" width="100%" height="100%">
            </div>
            <p>{{ $sb[2]['news_title'] }}</p>
        </a>
        <a href="#" class="d-flex align-items-center justify-content-between gap-3">
            <div class="image">
                <img src="{{ $sb[3]['news_image']['real'] }}" width="100%" height="100%">
            </div>
            <p>{{ $sb[3]['news_title'] }}</p>
        </a>
    </div>
</div>
