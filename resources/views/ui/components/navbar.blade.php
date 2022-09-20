<nav>
  <div class="nav-first_section d-flex justify-content-between">
    <a href="/">
      <img src="{{ URL::asset('assets/images/logo.webp') }}" alt="logo" width="168px" height="34px">
    </a>
    <div class="search-container">
      <input type="text" placeholder="Berita apa yang anda ingin baca hari ini?">
      <img src="{{ URL::asset('assets/icons/search-icon.svg') }}" alt="Search">
    </div>
  </div>

  <div class="nav-second_section d-flex justify-content-between">
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
                        @foreach (array_slice($menu, 0, 9) as $m)
                            @if (!filter_var($m['url'], FILTER_VALIDATE_URL))
                                <li class="header-nav-item {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}"><a href="{{ '/' . trim($m['url'], '/') }}">{{ $m['title'] }}</a></li>
                            @else
                                <li class="header-nav-item {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}"><a href="{{ $m['url'] }}">{{ $m['title'] }}</a></li>
                            @endif
                        @endforeach
                        @if (count($menu) > 9)
                            <li class="header-nav-item">
                                <button name="btn-avatar" aria-label="btn-avatar" class="header-nav-item flex items-center header-extra-nav">
                                    <span>{{ __('Lainnya') }}</span> <i class="icon icon--arrowright"></i>
                                </button>
                                <div class="header-nav-item-menu" style="padding-right:0">
                                    <ul class="header-nav-item-menu-list">
                                        @foreach (array_slice($menu, 9) as $m)
                                            @if (!filter_var($m['url'], FILTER_VALIDATE_URL))
                                                <li class="header-nav-item {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}"><a href="{{ '/' . trim($m['url'], '/') }}">{{ $m['title'] }}</a></li>
                                            @else
                                                <li class="header-nav-item {{ trim(end($category_tree)['url'] ?? null, '/') == trim($m['url'], '/') || config('site.attributes.object.category.slug') == trim($m['url'], '/') ? 'active' : '' }}"><a href="{{ $m['url'] }}">{{ $m['title'] }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <span class="header-extra-nav header-nav-item-menu-back"><i class="icon icon--arrowright rotate-180"></i></span>
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
                                                <li class="subkanal__list_item {{ trim($category_tree[0]['url'], '/') == trim($m['url'], '/') ? 'active' : '' }}"><a href="{{ '/' . trim($m['url'], '/') }}">{{ $m['title'] }}</a></li>
                                            @else
                                                <li class="subkanal__list_item {{ trim($category_tree[0]['url'], '/') == trim($m['url'], '/') ? 'active' : '' }}"><a href="{{ $m['url'] }}">{{ $m['title'] }}</a></li>
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


{{-- <ul>
  <li><a href="#">berita daerah</a></li>
  <li><a href="#">ekonomi bisnis</a></li>
  <li><a href="#">politik</a></li>
  <li><a href="#">olahraga</a></li>
  <li><a href="#">hukum & kriminal</a></li>
  <li><a href="#">agri farming</a></li>
  <li><a href="#">hiburan</a></li>
  <li><a href="#">photo</a></li>
  <li><a href="#">video</a></li>
  <li><a href="#">lainnya ></a></li>
</ul> --}}