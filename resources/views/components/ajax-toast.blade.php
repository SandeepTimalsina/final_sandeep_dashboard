<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 2000; display: none;" id="ajaxToastContainer">
</div>

<script>
function showToast(type = 'success', message = '', title = '') {
    const icons = {
        success: 'bx-check-circle',
        danger: 'bx-error',
        warning: 'bx-error-alt',
        info: 'bx-info-circle',
        primary: 'bx-bell',
        secondary: 'bx-bell'
    };

    const bgColors = {
        success: 'bg-success',
        danger: 'bg-danger',
        warning: 'bg-warning',
        info: 'bg-info',
        primary: 'bg-primary',
        secondary: 'bg-secondary'
    };

    if (!title) title = type.charAt(0).toUpperCase() + type.slice(1);

    const container = $('#ajaxToastContainer');

    const toastHTML = `
        <div class="bs-toast toast fade show ${bgColors[type]}" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-white">
                <i class="icon-base bx ${icons[type]} me-2"></i>
                <div class="me-auto fw-medium">${title}</div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-white">
                ${message}
            </div>
        </div>
    `;

    container.append(toastHTML).show();

    const toastEl = container.find('.toast').last()[0];
    const toast = new bootstrap.Toast(toastEl);
    toast.show();

    toastEl.addEventListener('hidden.bs.toast', function () {
        $(toastEl).remove();
        if(container.children().length === 0) container.hide();
    });
}
</script>
