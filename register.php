<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root"; // Your DB password
$dbname = "travel_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success = "";
$error = "";
$name = $email = $mobile = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $mobile   = trim($_POST['mobile']);
    $country  = trim($_POST['country']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Basic validation
    if (empty($name) || empty($email) || empty($mobile) || empty($country) || empty($password)) {
        $error = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } elseif (!preg_match('/^[0-9]{10,15}$/', $mobile)) {
        $error = "Invalid mobile number!";
    } elseif ($password !== $confirmPassword) {
        $error = "Passwords do not match!";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $profilePic = $_FILES['profile_pic']['name'];
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($profilePic);

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targetFile)) {
            $sql = "INSERT INTO users (name, email, mobile, country, password, profile_pic) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $name, $email, $mobile, $country, $hashedPassword, $targetFile);

            if ($stmt->execute()) {
                $_SESSION['user_name'] = $name;
                $_SESSION['user_email'] = $email;
                $success = "Registration successful!";
                // Optionally redirect:
                // header("Location: dashboard.php");
                // exit;
            } else {
                $error = "Database error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $error = "Error uploading profile picture.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Travel and Tour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="register-container">
        <div class="form-container">
            <h2>Register</h2>

            <?php if ($success): ?>
                <script>alert("<?= $success ?>");</script>
                <p style="color:green;"><?= $success ?></p>
            <?php elseif ($error): ?>
                <script>alert("<?= $error ?>");</script>
                <p style="color:red;"><?= $error ?></p>
            <?php endif; ?>

            <form id="register-form" action="register.php" method="POST" enctype="multipart/form-data">
                <div class="profile-pic-container">
                    <label for="profile-pic">Profile Picture</label>
                    <div class="image-preview" id="image-preview">
                        <img src="default-avatar.png" alt="Profile Picture" id="preview-img" width="100">
                    </div>
                    <input type="file" id="profile-pic" name="profile_pic" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required value="<?= htmlspecialchars($name) ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required value="<?= htmlspecialchars($email) ?>">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required value="<?= htmlspecialchars($mobile) ?>">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" name="country" required>
                        <option value="">Select your country</option>
                        <option value="USA" <?= ($country == "USA") ? "selected" : "" ?>>USA</option>
                        <option value="UK" <?= ($country == "UK") ? "selected" : "" ?>>UK</option>
                        <option value="India" <?= ($country == "India") ? "selected" : "" ?>>India</option>
                        <option value="Australia" <?= ($country == "Australia") ? "selected" : "" ?>>Australia</option>
                        <option value="Canada" <?= ($country == "Canada") ? "selected" : "" ?>>Canada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                </div>

                <button type="submit" class="submit-btn">Register</button>
            </form>

            <p>Already have an account? <a href="login.html">Login here</a></p>
        </div>
    </div>

    <script>
        // Preview selected profile picture
        document.getElementById("profile-pic").addEventListener("change", function () {
            const file = this.files[0];
            const preview = document.getElementById("preview-img");

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.setAttribute("src", e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        // Client-side validation alerts
        document.getElementById("register-form").addEventListener("submit", function (e) {
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const mobile = document.getElementById("mobile").value.trim();
            const country = document.getElementById("country").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            if (!name || !email || !mobile || !country || !password || !confirmPassword) {
                alert("All fields are required!");
                e.preventDefault();
            } else if (password !== confirmPassword) {
                alert("Passwords do not match!");
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
