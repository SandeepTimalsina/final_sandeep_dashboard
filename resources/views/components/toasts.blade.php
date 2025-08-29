@if(session('toast'))
    @php
        $toast = session('toast');
        $type = $toast['type'] ?? 'success'; // success, danger, warning, info, primary, secondary
        $message = $toast['message'] ?? '';
        $title = $toast['title'] ?? ucfirst($type);
        $icon = match($type) {
            'success' => 'bx-check-circle',
            'danger' => 'bx-error',
            'warning' => 'bx-error-alt',
            'info' => 'bx-info-circle',
            'primary' => 'bx-bell',
            'secondary' => 'bx-bell',
            default => 'bx-bell'
        };
        $time = now()->diffForHumans();
    @endphp

    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 2000;">
        <div class="bs-toast toast fade show bg-{{ $type }}" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-white">
                <i class="icon-base bx {{ $icon }} me-2"></i>
                <div class="me-auto fw-medium">{{ $title }}</div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-white">
                {{ $message }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            toastElList.map(function(toastEl) {
                var toast = new bootstrap.Toast(toastEl)
                toast.show()
            })
        });
    </script>
@endif
