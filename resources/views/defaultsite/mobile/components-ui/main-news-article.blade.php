<div class="main-news-container">
     <div class="main-news-deskripsi">
      <h3>{{ $row['news_title'] ?? null }}</h3>
      <p>{{ Util::date($row['news_date_publish'] ?? null, 'long_time') }}</p>
     <figure>
        <div class="image-news">
            <img src={{ $row['news_image']['real'] }}>
        </div>
        <p>{{ $row['news_imageinfo'] ?? null }}</p>
      
    </figure>
</div>     

   
  </div>
  