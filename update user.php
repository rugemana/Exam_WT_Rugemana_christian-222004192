<!DOCTYPE html>
<html>
<head>
    <title>Update Users Form</title>
</head>
<body>
    <h2>Update Users Form</h2>
    <form method="post" action="update_users_form.php">
        User ID: <input type="number" name="user_id" required><br>
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Email: <input type="email" name="email" required><br>
        Full Name: <input type="text" name="full_name" required><br>
        Role: <input type="text" name="role" required><br>
        <input type="submit" name="submit" value="Update">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $full_name = $_POST['full_name'];
        $role = $_POST['role'];

        $sql = "UPDATE users SET username='$username', password='$password', email='$email', full_name='$full_name', role='$role' WHERE user_id='$user_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
