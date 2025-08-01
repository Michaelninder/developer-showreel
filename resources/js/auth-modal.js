document.addEventListener('DOMContentLoaded', () => {
    const authModal = document.getElementById('auth-modal');
    const closeModal = document.getElementById('close-modal');
    const openModalButtons = document.querySelectorAll('[data-auth-type]');

    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const authType = button.getAttribute('data-auth-type');
            const alpineComponent = document.querySelector('[x-data="{ type: \'login\' }"]');

            if (alpineComponent) {
                alpineComponent.__x.$data.type = authType;
            }

            authModal.classList.remove('hidden');
            authModal.classList.add('flex');
        });
    });

    if (closeModal) {
        closeModal.addEventListener('click', () => {
            authModal.classList.add('hidden');
            authModal.classList.remove('flex');
        });
    }

    window.addEventListener('click', (event) => {
        if (event.target === authModal) {
            authModal.classList.add('hidden');
            authModal.classList.remove('flex');
        }
    });
});
