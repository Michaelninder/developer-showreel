<!-- resources/views/components/theme-switcher.blade.php -->
<div class="theme-switcher-container">
    <form id="theme-switch-form" action="{{ route('theme.switch') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="theme" id="theme-input" value="{{ $currentTheme }}">
    </form>
    <button id="theme-toggle" type="button" class="theme-switcher">
        <i class="bi {{ $currentTheme === 'dark' ? 'bi-moon-stars-fill' : 'bi-sun-fill' }}"></i>
    </button>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggle = document.getElementById('theme-toggle');
            const themeInput = document.getElementById('theme-input');
            const themeSwitchForm = document.getElementById('theme-switch-form');

            document.documentElement.setAttribute('data-theme', themeInput.value);

            themeToggle.addEventListener('click', function () {
                const currentTheme = document.documentElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                themeInput.value = newTheme;

                // Submit the form via AJAX to avoid page reload
                fetch(themeSwitchForm.action, {
                    method: 'POST',
                    body: new FormData(themeSwitchForm),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        console.error('Theme switch failed');
                    }
                    document.documentElement.setAttribute('data-theme', newTheme);

                    const icon = themeToggle.querySelector('i');
                    icon.classList.remove(currentTheme === 'dark' ? 'bi-moon-stars-fill' : 'bi-sun-fill');
                    icon.classList.add(newTheme === 'dark' ? 'bi-moon-stars-fill' : 'bi-sun-fill');
                })
                .catch(error => console.error('Error switching theme:', error));
            });
        });
    </script>
@endpush