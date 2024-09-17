<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "floric"; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add new user
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_user'])) {
    $username = $_POST['sign_uname'];
    $password = password_hash($_POST['sign_pswd'], PASSWORD_BCRYPT);
    $email = $_POST['sign_email'];
    $mobile = $_POST['sign_mob'];

    $sql = "INSERT INTO users (username, password, email, mobile) VALUES ('$username', '$password', '$email', '$mobile')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p>User added successfully!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add User</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="sign_uname" class="form-label">Username</label>
                <input type="text" class="form-control" id="sign_uname" name="sign_uname" required>
            </div>
            <div class="mb-3">
                <label for="sign_pswd" class="form-label">Password</label>
                <input type="password" class="form-control" id="sign_pswd" name="sign_pswd" required>
            </div>
            <div class="mb-3">
                <label for="sign_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="sign_email" name="sign_email" required>
            </div>
            <div class="mb-3">
                <label for="sign_mob" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="sign_mob" name="sign_mob" required>
            </div>
            <button type="submit" name="add_user" class="btn btn-primary">Add User</button>
        </form>
    </div>
</body>
</html>
