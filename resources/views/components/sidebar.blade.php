<aside id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <div class="brand">
            <img src="{{ $appSettings['logo'] }}" alt="Logo">
            <span>{{ $appSettings['name'] }}</span>
        </div>
    </div>

    @php
    $menuSections = \App\Helper\NavigationHelper::getSidebarMenu();
    @endphp

    <ul class="sidebar-nav">
        @foreach($menuSections as $section)
        @if(!isset($section['visible']) || $section['visible'])
        <li class="nav-header">{{ __($section['header']) }}</li>

        @foreach($section['items'] as $item)
        @if(!isset($item['visible']) || $item['visible'])
        <li class="nav-item">
            @if(isset($item['special']) && $item['special'] === 'logout')
            <a href="{{ route('logout') }}" class="nav-link {{ $item['class'] ?? '' }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i data-lucide="{{ $item['icon'] }}"></i>
                <span>{{ __($item['label']) }}</span>
            </a>
            @else
            <a href="{{ route($item['route']) }}"
                class="nav-link {{ request()->routeIs($item['activePattern']) ? 'active' : '' }} {{ $item['class'] ?? '' }}">
                <i data-lucide="{{ $item['icon'] }}"></i>
                <span data-i18n="{{ $item['label'] }}">{{ __($item['label']) }}</span>
            </a>
            @endif
        </li>
        @endif
        @endforeach
        @endif
        @endforeach
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</aside>