document.getElementById('edit-btn').addEventListener('click', function() {
    let inputs = document.querySelectorAll('#profile-form input, #profile-form select');
    let saveBtn = document.getElementById('save-btn');

    // Enable input fields
    inputs.forEach(input => input.disabled = false);

    // Enable file input
    document.getElementById('profile-pic').disabled = false;

    // Enable Save button
    saveBtn.disabled = false;
});

document.getElementById('profile-form').addEventListener('submit', function(event) {
    event.preventDefault();

    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let mobile = document.getElementById('mobile').value.trim();
    let country = document.getElementById('country').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm-password').value;

    if (!name || !email || !mobile || !country) {
        alert('Please fill all required fields.');
        return;
    }

    if (password && password.length < 6) {
        alert('Password must be at least 6 characters.');
        return;
    }

    if (password && password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    alert('Profile updated successfully!');

    // Disable input fields after saving
    document.querySelectorAll('#profile-form input, #profile-form select').forEach(input => input.disabled = true);
    document.getElementById('profile-pic').disabled = true;
    document.getElementById('save-btn').disabled = true;
});

// Profile Picture Preview
document.getElementById('profile-pic').addEventListener('change', function(event) {
    let file = event.target.files[0];

    if (file) {
        let reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
});
