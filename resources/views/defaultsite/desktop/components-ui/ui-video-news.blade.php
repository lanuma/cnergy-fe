<div class="video-news-container">
    <p>{{ $r[1]['news_type'] }}</p>
    <span>{{ $r[1]['news_date_publish'] }}</span>
    <h4>{{ $r[1]['news_title'] }}</h4>
    <iframe width="100%" height="500" src='{{ $r[1]['news_image']['real'] }}' title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
</div>
