<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="login_form.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>

    <?php
    session_start();
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if user exists
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                echo "Login successful. Welcome, " . $row['full_name'] . "!";
                // Redirect to a protected page
                header("Location: protected_page.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that username.";
        }

        $conn->close();
    }
    ?>
</body>
</html>
