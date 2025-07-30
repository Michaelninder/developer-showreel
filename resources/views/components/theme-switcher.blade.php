<div class="theme-switcher-container">
    <button id="theme-toggle" type="button" class="theme-switcher">
        <i
            class="bi {{ session('theme', 'dark') === 'dark' ? 'bi-moon-stars-fill' : 'bi-sun-fill' }}"
        ></i>
    </button>
</div>

@push('scripts')
    <script>
        document
            .getElementById('theme-toggle')
            .addEventListener('click', async function () {
                const currentTheme =
                    document.documentElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                // Update the icon immediately for better UX
                const icon = this.querySelector('i');
                icon.classList.remove(
                    currentTheme === 'dark'
                        ? 'bi-moon-stars-fill'
                        : 'bi-sun-fill',
                );
                icon.classList.add(
                    newTheme === 'dark' ? 'bi-moon-stars-fill' : 'bi-sun-fill',
                );

                // Apply the theme to the HTML element
                document.documentElement.setAttribute('data-theme', newTheme);

                // Send an AJAX request to update the session
                try {
                    const response = await fetch('{{ route('theme.switch') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({ theme: newTheme }),
                    });

                    if (!response.ok) {
                        console.error('Failed to update theme on the server.');
                        // Revert icon and theme if server update fails
                        document.documentElement.setAttribute(
                            'data-theme',
                            currentTheme,
                        );
                        icon.classList.remove(
                            newTheme === 'dark'
                                ? 'bi-moon-stars-fill'
                                : 'bi-sun-fill',
                        );
                        icon.classList.add(
                            currentTheme === 'dark'
                                ? 'bi-moon-stars-fill'
                                : 'bi-sun-fill',
                        );
                    }
                } catch (error) {
                    console.error('Error sending theme update:', error);
                    // Revert icon and theme on network error
                    document.documentElement.setAttribute(
                        'data-theme',
                        currentTheme,
                    );
                    icon.classList.remove(
                        newTheme === 'dark'
                            ? 'bi-moon-stars-fill'
                            : 'bi-sun-fill',
                    );
                    icon.classList.add(
                        currentTheme === 'dark'
                            ? 'bi-moon-stars-fill'
                            : 'bi-sun-fill',
                    );
                }
            });
    </script>
@endpush