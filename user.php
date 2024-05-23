<!DOCTYPE html>
<html>
<head>
    <title>Users Form</title>
</head>
<body>
    <h2>Users Form</h2>
    <form method="post" action="users_form.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Email: <input type="email" name="email" required><br>
        Full Name: <input type="text" name="full_name" required><br>
        Role: <input type="text" name="role" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $full_name = $_POST['full_name'];
        $role = $_POST['role'];

        $sql = "INSERT INTO users (username, password, email, full_name, role)
                VALUES ('$username', '$password', '$email', '$full_name', '$role')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
