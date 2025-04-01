<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Using a prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($connection, "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssiis", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
        $execute = mysqli_stmt_execute($stmt);

        if ($execute) {
            header('Location: book.php');
            exit();
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare statement!";
    }
} else {
    echo 'Something went wrong, try again';
}

mysqli_close($connection);
?>
