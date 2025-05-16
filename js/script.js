document.addEventListener('DOMContentLoaded', function () {
    const sidebarCollapse = document.getElementById('sidebarCollapse');
    const sidebar = document.getElementById('sidebar');

    if (sidebarCollapse && sidebar) {
        sidebarCollapse.addEventListener('click', function () {
            sidebar.classList.toggle('active');
        });
    }

    // Initialize Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Placeholder for global CKEditor initialization (can be page-specific too)
    // Example: if (document.querySelector('#editor')) { ClassicEditor.create(document.querySelector('#editor')).catch(error => console.error(error)); }

    // Placeholder for global Tagify initialization
    // Example: var input = document.querySelector('input[name=tags]'); if(input) new Tagify(input);

    console.log("Admin Panel Script (Medium Theme) Loaded");
});

