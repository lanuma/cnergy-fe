@if ($row['news_tag'] ?? null)
    <div class="related-tag-container">
        <ul>
            @foreach ($row['news_tag'] as $r)
                <li class="section--trending-bredcrumb-item"><a
                        href="{{ Src::detailTag($r) }}">{{ $r['tag_name'] ?? null }}</a></li>
            @endforeach
        </ul>
    </div>
@endif
