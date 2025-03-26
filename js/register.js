document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault();

    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let mobile = document.getElementById('mobile').value.trim();
    let country = document.getElementById('country').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm-password').value;
    let profilePic = document.getElementById('profile-pic').files[0];

    // Validation
    if (!name || !email || !mobile || !country || !password || !confirmPassword) {
        alert('Please fill all the fields.');
        return;
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    if (password.length < 6) {
        alert('Password must be at least 6 characters.');
        return;
    }

    if (!profilePic) {
        alert('Please upload a profile picture.');
        return;
    }

    // Success message
    alert('Registration successful!');
});


