document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('passwordInput');
    const showPasswordCheckbox = document.getElementById('showPassword');
    const showPasswordLabel = document.getElementById('showPasswordLabel');

    showPasswordCheckbox.addEventListener('change', function () {
        if (showPasswordCheckbox.checked) {
            passwordInput.setAttribute('type', 'text');
            showPasswordLabel.textContent = 'Hide Password';
        } else {
            passwordInput.setAttribute('type', 'password');
            showPasswordLabel.textContent = 'Show Password';
        }
    });
});
