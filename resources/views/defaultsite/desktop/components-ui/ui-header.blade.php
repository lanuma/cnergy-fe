<nav>
    <div class="nav-first_section d-flex justify-content-between">
        <a href="/">
            <img src="{{ URL::asset('assets/images/logo.webp') }}" alt="logo" width="168px" height="34px">
        </a>
        <div class="search-container">
            <input class="gsc-input" type="text">
            <img src="{{ URL::asset('assets/icons/search-icon.svg') }}" alt="Search">
            <gcse:searchbox-only resultsUrl="{{ url('search') }}"></gcse:searchbox-only>
        </div>
    </div>


    <div class="nav-second_section">
        @if ($menu = Data::menu())

            <ul>
                @php
                    //get category tree
                    $category_tree = \Src::menu_tree(config('site.attributes.object.category.slug'));
                    if ($row['news_category'] ?? null) {
                        if (count($row['news_category']) > 0) {
                            $category_tree = \Src::menu_tree(end($row['news_category'])['url']);
                        }
                    }
                    if (count($category_tree) == 1) {
                        //list subdomain 1 level
                        $parent_slug = trim(end($category_tree)['url'], '/');
                        $subdomain = collect($menu)
                            ->filter(function ($row) use ($parent_slug) {
                                $arr_slug = explode('/', trim($row['url'], '/'));
                                $arr_parent_slug = explode('/', $parent_slug);
                                return strpos(end($arr_slug), end($arr_parent_slug)) > '' ? 1 : 0;
                            })
                            ->first();
                    } elseif (count($category_tree) >= 2) {
                        $parent_slug = trim(end($category_tree)['url'], '/');
                        //get curent slug base on tree level
                        if (count($category_tree) == 2) {
                            $curent_slug = trim($category_tree[0]['url'], '/');
                        } elseif (count($category_tree) == 3) {
                            $curent_slug = trim($category_tree[1]['url'], '/');
                        }
                        //list subdomain 1 level
                        $subdomain = collect($menu)
                            ->filter(function ($row) use ($parent_slug) {
                                $arr_slug = explode('/', trim($row['url'], '/'));
                                $arr_parent_slug = explode('/', $parent_slug);
                                return strpos(end($arr_slug), end($arr_parent_slug)) > '' ? 1 : 0;
                            })
                            ->first();
                        //list subdomain 2 level
                        $second_subdomain = collect($subdomain['children'])
                            ->filter(function ($row) use ($curent_slug) {
                                $arr_slug = explode('/', trim($row['url'], '/'));
                                $arr_curent_slug = explode('/', $curent_slug);
                                return strpos(end($arr_slug), end($arr_curent_slug)) > '' ? 1 : 0;
                            })
                            ->first();
                        //check list subdomain 2 level > 0
                        if (count($second_subdomain['children'] ?? []) > 0) {
                            $subdomain = $second_subdomain;
                        }
                    }
                @endphp

                <div id="listItemNav">
                    @foreach (array_slice($menu, 0, 9) as $m)
                        @if (!filter_var($m['url'], FILTER_VALIDATE_URL))
                            <li
                                {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}">
                                <a href="{{ '/' . trim($m['url'], '/') }}">{{ $m['title'] }}</a>
                            </li>
                        @else
                            <li
                                {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}">
                                <a href="{{ $m['url'] }}">{{ $m['title'] }}</a>
                            </li>
                        @endif
                    @endforeach
                </div>

                @if (count($menu) > 9)
                    <li>
                        <button id="btnLainnya" style="border: none; background: none; margin-left: 15px"
                            onclick="collapseLainnya()">
                            <span>{{ __('Lainnya') }}</span> <i class="fa-sharp fa-solid fa-chevron-right"></i></i>
                        </button>
                        <div id="list-nav-open" style="padding-right:0">
                            <ul>
                                @foreach (array_slice($menu, 9) as $m)
                                    @if (!filter_var($m['url'], FILTER_VALIDATE_URL))
                                        <li
                                            {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}">
                                            <a href="{{ '/' . trim($m['url'], '/') }}">{{ $m['title'] }}</a>
                                        </li>
                                    @else
                                        <li
                                            {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}">
                                            <a href="{{ $m['url'] }}">{{ $m['title'] }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <span><i onclick="removeCollapse()" class="fa-sharp fa-solid fa-chevron-left"
                                    style="cursor: pointer"></i></span>
                        </div>
                    </li>
                @endif
            </ul>

            @if (count($category_tree) > 0)
                @if ($subdomain)
                    @if (count($subdomain['children']) > 0)
                        <div class="header-submenu">
                            <ul class="header-submenu-item">
                                <li class="header-submenu-item-title">{{ strtoupper($subdomain['title']) }}</li>
                                {{-- list subdomain level 1 or check list subdomain 2 level > 0 --}}
                                @if (count($category_tree) > 0 || count($second_subdomain['children'] ?? []) > 0)
                                    @foreach ($subdomain['children'] as $m)
                                        @if (!filter_var($m['url'], FILTER_VALIDATE_URL))
                                            <li
                                                class="subkanal__list_item {{ trim($category_tree[0]['url'], '/') == trim($m['url'], '/') ? 'active' : '' }}">
                                                <a href="{{ '/' . trim($m['url'], '/') }}">{{ $m['title'] }}</a>
                                            </li>
                                        @else
                                            <li
                                                class="subkanal__list_item {{ trim($category_tree[0]['url'], '/') == trim($m['url'], '/') ? 'active' : '' }}">
                                                <a href="{{ $m['url'] }}">{{ $m['title'] }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    @endif
                @endif
            @endif

        @endif
        {{-- <div class="route_login">
      <a href="#">masuk</a>
    </div> --}}
    </div>
</nav>

<script>
    function collapseLainnya() {
        document.getElementById('listItemNav').style.display = "none";
        document.getElementById('btnLainnya').style.display = "none";
        document.getElementById('list-nav-open').classList.add("open-nav");
    }

    function removeCollapse() {
        document.getElementById('listItemNav').style.display = "flex";
        document.getElementById('btnLainnya').style.display = "block";
        document.getElementById('list-nav-open').classList.remove("open-nav");
    }
</script>
