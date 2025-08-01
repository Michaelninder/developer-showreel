const socialToggle = document.getElementById("socialToggle");
const socialBar = document.getElementById("socialBar");

document.addEventListener('DOMContentLoaded', () => {
    const openModalButtons = document.querySelectorAll('[data-modal-target]');
    const modals = document.querySelectorAll('.auth-modal');
    const hideOnModal = document.querySelectorAll('.hide-on-modal');
    const closeModalButtons = document.querySelectorAll('.close-modal-btn');

    const openModal = (modalId) => {
        // close all modals
        modals.forEach(modal => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        });

        // open target modal
        const targetModal = document.getElementById(modalId);
        if (targetModal) {
            targetModal.classList.remove('hidden');
            targetModal.classList.add('flex');
        }
    };

    const closeModal = (modal) => {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    };

    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-target');
            openModal(modalId);
        });
    });

    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.auth-modal');
            if (modal) {
                closeModal(modal);
            }
        });
    });

    modals.forEach(modal => {
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal(modal);
            }
        });
    });
});