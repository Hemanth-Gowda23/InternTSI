document.addEventListener('DOMContentLoaded', function() {
    // Example: Form validation
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');

            if (!nameInput.value || !emailInput.value || !messageInput.value) {
                event.preventDefault();
                alert('Please fill in all fields');
            }
        });
    }

    // You can add more JavaScript functionality here
});