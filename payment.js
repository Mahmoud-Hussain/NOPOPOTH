// Handle payment method selection
document.querySelectorAll('.payment-method').forEach((method) => {
    method.addEventListener('click', () => {
        const selectedMethod = method.getAttribute('data-method');
        document.getElementById('selectedMethod').value = selectedMethod;

        // Hide all modals
        document.querySelectorAll('.modal').forEach((modal) => {
            modal.style.display = 'none';
        });

        // Show the selected modal
        const modalId = `${selectedMethod}Modal`;
        document.getElementById(modalId).style.display = 'block';
    });
});

// Close modal logic
document.querySelectorAll('.close').forEach((closeBtn) => {
    closeBtn.addEventListener('click', () => {
        closeBtn.parentElement.parentElement.style.display = 'none';
    });
});

window.addEventListener('click', (event) => {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = 'none';
    }
});