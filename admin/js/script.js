function navigate(page) {
    const contentArea = document.getElementById('contentArea');

    switch (page) {
        case 'dashboard':
            contentArea.innerHTML = "<h2>Dashboard</h2><p>Overview of the site statistics and activity.</p>";
            break;
        case 'userManagement':
            contentArea.innerHTML = "<h2>User Management</h2><p>Manage users, add new users, or edit user profiles.</p>";
            break;
        case 'tourPackages':
            contentArea.innerHTML = "<h2>Tour Packages Management</h2><p>Manage and create tour packages.</p>";
            break;
        case 'bookingManagement':
            contentArea.innerHTML = "<h2>Booking Management</h2><p>View and manage all bookings.</p>";
            break;
        case 'feedbackManagement':
            contentArea.innerHTML = "<h2>Feedback Management</h2><p>View and respond to customer feedback.</p>";
            break;
        case 'settings':
            contentArea.innerHTML = "<h2>Settings</h2><p>Manage site settings and preferences.</p>";
            break;
        case 'logout':
            contentArea.innerHTML = "<h2>Logout</h2><p>You have successfully logged out.</p>";
            break;
        default:
            contentArea.innerHTML = "<h1>Welcome to Admin Panel</h1><p>Select a section from the side navigation to manage.</p>";
    }
}
