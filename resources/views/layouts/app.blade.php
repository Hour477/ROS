<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') | {{ $appSettings['name'] }}</title>
    <link rel="icon" type="image/x-icon" href="{{ $appSettings['favicon'] }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="toast-container" id="toastContainer"></div>
        @guest
            @yield('content')
        @else
            <div id="adminLayout" class="admin-layout">
                <x-sidebar />
                <main class="main-content">
                    <x-navbar />
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                </main>
            </div>

            <!-- GLOBAL DELETE MODAL -->
            <div class="modal fade animate__animated animate__fadeIn" id="deleteConfirmModal" tabindex="-1" aria-hidden="true" style="backdrop-filter: blur(4px);">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                    <div class="modal-content border-0 shadow-lg overflow-hidden" style="border-radius: 24px;">
                        <div class="modal-body p-4 p-md-5 text-center">
                            <div class="mb-4">
                                <div class="delete-icon-wrapper mx-auto bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center animate__animated animate__pulse animate__infinite" style="width: 90px; height: 90px;">
                                    <i data-lucide="trash-2" style="width: 45px; height: 45px;"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold mb-2" style="color: #1e293b;">Confirm Delete</h4>
                            <p class="text-muted mb-4">Are you sure you want to permanently delete <strong id="deleteItemName" class="text-dark"></strong>? This action cannot be reversed.</p>
                            <div class="d-flex flex-column gap-2">
                                <button type="button" id="confirmDeleteBtn" class="btn btn-danger py-3 fw-bold shadow-sm" style="border-radius: 14px;">
                                    <i data-lucide="trash-2" class="me-2" style="width: 18px;"></i> Yes, Delete Permanently
                                </button>
                                <button type="button" class="btn btn-white border-0 text-muted py-2 fw-bold" data-bs-dismiss="modal">Cancel & Return</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endguest
    </div>

    <!-- jQuery & Select2 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    @stack('js')
    <script>
        lucide.createIcons();

        $(document).ready(function() {
            $('.select2').select2({
                width: '100%',
                placeholder: $(this).data('placeholder'),
                allowClear: true
            });
        });

        // ToastMagic Function
        function showToast(message, type = 'success') {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `toast-magic ${type}`;
            const icon = type === 'success' ? 'check-circle' : 'alert-circle';
            
            toast.innerHTML = `
                <i data-lucide="${icon}"></i>
                <span>${message}</span>
            `;
            
            container.appendChild(toast);
            lucide.createIcons();
            
            setTimeout(() => toast.classList.add('show'), 100);
            
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 400);
            }, 3000);
        }

        // Session Flash Listener
        @if(session('success')) showToast("{{ session('success') }}", 'success'); @endif
        @if(session('error')) showToast("{{ session('error') }}", 'error'); @endif

        // Sidebar Toggle Logic
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const adminLayout = document.getElementById('adminLayout');

        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('collapsed');
                adminLayout.classList.toggle('collapsed-sidebar');
            });
        }

        // Global Delete Confirmation Logic
        let currentDeleteFormId = null;

        window.confirmDelete = function(formId, itemName) {
            currentDeleteFormId = formId;
            const nameSpan = document.getElementById('deleteItemName');
            if (nameSpan) nameSpan.innerText = itemName;
            
            const modalElement = document.getElementById('deleteConfirmModal');
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
            
            // Re-render icons in modal
            lucide.createIcons();
        };

        const confirmBtn = document.getElementById('confirmDeleteBtn');
        if (confirmBtn) {
            confirmBtn.addEventListener('click', function() {
                if (currentDeleteFormId) {
                    const form = document.getElementById(currentDeleteFormId);
                    if (form) form.submit();
                }
            });
        }
    </script>
</body>
</html>
