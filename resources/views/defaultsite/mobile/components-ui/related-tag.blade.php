@if ($row['news_tag'] ?? null)
    <div class="related-tag-container">
        @foreach ($row['news_tag'] as $r)
            <a class="btn btn-related mx-2 "  href="{{ Src::detailTag($r) }}">{{ $r['tag_name'] ?? null }}</a>
        @endforeach
      </div>
@endif