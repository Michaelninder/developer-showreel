<div class="theme-switcher-container">
    <button id="theme-toggle" type="button" class="theme-switcher">
        <i class="bi {{ session('theme', 'system') === 'dark' ? 'bi-moon-stars-fill' : (session('theme', 'system') === 'light' ? 'bi-sun-fill' : 'bi-circle-half') }}"></i>
    </button>
</div>

@push('scripts')
<script>
    document.getElementById('theme-toggle').addEventListener('click', async function() {
        const html = document.documentElement;
        const themeOrder = ['system', 'dark', 'light'];
        const currentMode = html.getAttribute('data-theme-mode');
        const newMode = themeOrder[(themeOrder.indexOf(currentMode) + 1) % themeOrder.length];

        html.setAttribute('data-theme-mode', newMode);

        // Update icon
        const icon = this.querySelector('i');
        icon.className = 'bi '; // Reset classes
        if (newMode === 'dark') {
            icon.classList.add('bi-moon-stars-fill');
        } else if (newMode === 'light') {
            icon.classList.add('bi-sun-fill');
        } else { // system
            icon.classList.add('bi-circle-half');
        }

        // Apply theme for both Tailwind and custom CSS
        if (newMode === 'system') {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            html.classList.toggle('dark', prefersDark);
            html.setAttribute('data-theme', prefersDark ? 'dark' : 'light');
        } else {
            const isDark = newMode === 'dark';
            html.classList.toggle('dark', isDark);
            html.setAttribute('data-theme', newMode);
        }

        // Update session
        try {
            await fetch('{{ route('theme.switch') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ theme: newMode }),
            });
        } catch (error) {
            console.error('Failed to update theme on the server.', error);
        }
    });

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        const html = document.documentElement;
        const currentMode = html.getAttribute('data-theme-mode');
        if (currentMode === 'system') {
            const isDark = event.matches;
            html.classList.toggle('dark', isDark);
            html.setAttribute('data-theme', isDark ? 'dark' : 'light');
        }
    });
</script>
@endpush