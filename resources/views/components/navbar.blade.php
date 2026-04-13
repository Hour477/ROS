<header class="admin-navbar shadow-sm">
    <div class="navbar-left">
        <button id="sidebarToggle" class="navbar-toggle" title="Toggle Sidebar">
            <i data-lucide="menu"></i>
        </button>
    </div>

    <div class="navbar-right d-flex align-items-center gap-3">
        <a href="{{ route('orders.create') }}" class="pos-create-btn">
            <i data-lucide="plus-circle"></i>
            <span>POS</span>
        </a>
        <div class="dropdown">
            <button class="btn btn-sm btn-light border-0 rounded-pill px-3 fw-bold dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" style="font-size: 0.8rem; height: 40px; background: #f8f9fa;">
                <i data-lucide="languages" style="width: 16px;" class="text-primary"></i>
                <span class="d-none d-md-inline">{{ app()->getLocale() == 'kh' ? 'ភាសាខ្មែរ' : 'English' }}</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg mt-3 animate__animated animate__fadeInDown" style="border-radius: 12px; min-width: 160px;">
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2 {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('lang.switch', 'en') }}">
                        <span>🇺🇸</span> English
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2 {{ app()->getLocale() == 'kh' ? 'active' : '' }}" href="{{ route('lang.switch', 'kh') }}">
                        <span>🇰🇭</span> ភាសាខ្មែរ
                    </a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <div class="user-profile dropdown-toggle" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <span>{{ auth()->user()->name }}</span>
                <div class="user-avatar overflow-hidden">
                    @if(auth()->user()->image)
                    <img src="{{ auth()->user()->display_image }}" class="w-100 h-100 object-fit-cover">
                    @else
                    {{ substr(auth()->user()->name, 0, 1) }}
                    @endif
                </div>
            </div>
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg mt-5 animate__animated animate__fadeInDown" aria-labelledby="userDropdown" style="border-radius: 15px; min-width: 230px;">
                <li class="px-3 py-3 border-bottom mb-2 bg-light-subtle rounded-top-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="user-avatar-lg overflow-hidden shadow-sm">
                            @if(auth()->user()->image)
                            <img src="{{ auth()->user()->display_image }}" class="w-100 h-100 object-fit-cover">
                            @else
                            {{ substr(auth()->user()->name, 0, 1) }}
                            @endif
                        </div>
                        <div>
                            <div class="fw-bold text-dark small text-truncate" style="max-width: 140px;">{{ auth()->user()->name }}</div>
                            <div class="text-muted extra-small" style="font-size: 0.7rem;">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('profile.index') }}">
                        <i data-lucide="user" style="width: 16px;"></i> My Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('settings.index') }}">
                        <i data-lucide="settings" style="width: 16px;"></i> System Settings
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider opacity-50">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2 text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-lucide="log-out" style="width: 16px;"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>